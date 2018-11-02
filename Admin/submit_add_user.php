<?php 
    
    $full_name = $_POST["fullname"] ?? "";
    $user_name = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";
    $contact_number = $_POST["contactnumber"] ?? "";

    require_once 'db_users.php';
    $user_info = 
    array("fullname" => $full_name,
    "username" => $user_name,
    "password" => password_hash($password, PASSWORD_DEFAULT),
    "contact_number" => $contact_number);

    $insert_result = insert_user($user_info);
    if ($insert_result === true) {
        header('location:users.php');
    }

?>