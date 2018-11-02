<?php 
    require_once 'db_users.php';

    $id = $_POST["userid"] ?? "";
    $full_name = $_POST["name"] ?? "";
    $user_name = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";
    $contact_number = $_POST["contactnumber"] ?? "";
    
    $user_info = 
    array("id" => $id, 
    "fullname" => $full_name,
    "username" => $user_name,
    "password" => password_hash($password, PASSWORD_DEFAULT),
    "contact_number" => $contact_number);

    $update_result = update_user($id, $user_info);
    if ($update_result === true) {
        header('location:users.php');
    }
?>