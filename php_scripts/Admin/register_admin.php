<?php

    require_once "../../Shared/connection.php";

    $name = $_POST["full_name"];
    $contact_num = $_POST["contact_number"];
    $email_address = $_POST["email"];
    $admin_password = $_POST["password"];
    $user_address = $_POST["address"];
    $gender = $_POST["gender"];
    $hashPassword = password_hash($admin_password, PASSWORD_BCRYPT);

    try {
        $query = "INSERT INTO tb_Admins(name, contact_num, email_address, admin_password, user_address, gender) VALUES (:name, :contact_num, :email_address, :admin_password, :user_address, :gender);";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':contact_num', $contact_num);
        $stmt->bindParam(':email_address', $email_address);
        $stmt->bindParam(':admin_password', $hashPassword);
        $stmt->bindParam(':user_address', $user_address);
        $stmt->bindParam(':gender', $gender);

        $stmt->execute();

        echo json_encode(['status' => 'success', 'msg' => 'Admin registered successfully!']);
    }
    catch(PDOException $e)
    {
        if($e->errorInfo[1] == 1062)
        {
            echo json_encode(['status' => 'error', 'msg' => "Email already exists!"]);
        }
        else
        {
            echo json_encode(['status' => 'error', 'msg' => $e->getMessage()]);
        }
    }

    $conn = null;

?>