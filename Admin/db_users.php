<?php 

    require_once '../Database/mysqli_connect.php';


    function insert_user($user_info){
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
        or die('Error Connecting to MYSQL' . mysqli_connect_error());
        $query = "INSERT INTO users (name, user_name, password, contact_number) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('ssss', 
        $user_info["fullname"],
        $user_info["username"],
        $user_info["password"],
        $user_info["contact_number"]);

        
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                return true;
            }
        }
    }

    function get_users(){
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
        or die('Error Connecting to MYSQL' . mysqli_connect_error());
        $query = "SELECT user_name, name, contact_number FROM users";
        $result = $mysqli->query($query);
        return $result;
    }
?>