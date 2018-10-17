<?php 
    require_once 'db_users.php';

    if(isset($_POST["userid"]) && array_key_exists("userid", $_POST)){
        $id = $_POST["userid"];
    }

    if(isset($_POST["name"]) && array_key_exists("name", $_POST)){
        $full_name = $_POST["name"];
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