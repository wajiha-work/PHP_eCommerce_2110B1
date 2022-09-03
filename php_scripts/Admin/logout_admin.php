<?php

    session_start();

    try{
        if(isset($_SESSION["admin_id"]))
        {
            session_destroy();
            echo json_encode(['status' => 'success', 'msg' => 'Admin logged-out successfully!']);
        }
        else
        {
            echo json_encode(['status' => 'error', 'msg' => "You're not logged-in!"]);
        }
    }
    catch(Exception $e)
    {
        echo json_encode(['status' => 'error', 'msg' => "Something went wrong!"]);
    }
?>