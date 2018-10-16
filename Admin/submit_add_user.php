<?php 
    
    if(isset($_POST["fullname"]) && array_key_exists("fullname", $_POST)){
        $full_name = $_POST["fullname"];
    }
    if(isset($_POST["username"]) && array_key_exists("username", $_POST)){
        $user_name = $_POST["username"];
    }
    if(isset($_POST["password"]) && array_key_exists("password", $_POST)){
        $password = $_POST["password"];
    }
    if(isset($_POST["contactnumber"]) && array_key_exists("contactnumber", $_POST)){
        $contact_number = $_POST["contactnumber"];
    }

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