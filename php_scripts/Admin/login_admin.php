<?php
session_start();
require_once "../../Shared/connection.php";

$email_address = $_POST["email_address"];
$password = $_POST["password"];

try {
    $query = "SELECT * FROM tb_Admins WHERE email_address = :email_address;";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email_address', $email_address);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    if($result)
    {
        $hassed_password = $result['admin_password'];
        if(password_verify($password, $hassed_password))
        {
            $_SESSION["admin_id"] = $result["admin_id"];
            $_SESSION["admin_name"] = $result["name"];
            echo json_encode(['status' => 'success', 'msg' => 'Admin logged-in successfully!']);
        }
        else
        {
            echo json_encode(['status' => 'error', 'msg' => "Invalid username or password"]);
        }
    }
    else
    {
        echo json_encode(['status' => 'error', 'msg' => "Invalid username or password"]);
    }
} catch (PDOException $e) {
    echo json_encode(['status' => 'error', 'msg' => $e->getMessage()]);
}

$conn = null;
