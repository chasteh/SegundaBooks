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
        $query = "SELECT id, user_name, name, contact_number FROM users";
        $result = $mysqli->query($query);
        return $result;
    }

    function get_user($user_id){
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
        or die('Error Connecting to MYSQL' . mysqli_connect_error());
        $query = "SELECT id, user_name, name, password ,contact_number FROM users WHERE id = ? LIMIT 1";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('s', $user_id);

        if ($stmt->execute()) {

            $result = $stmt->get_result();


            if($user = $result->fetch_assoc()){
                return array("user_id" => $user["id"],
                "user_name" => $user["user_name"],
                "full_name" => $user["name"],
                "password" => $user["password"],
                "contact_number" => $user["contact_number"]);
            }
        
        }     
    }

    function update_user($user_id, $user_info){
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
        or die('Error Connecting to MYSQL' . mysqli_connect_error());
        $query = "SELECT id, user_name, name, password ,contact_number FROM users WHERE id = ? LIMIT 1";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('s', $user_id);

        if ($stmt->execute()) {

            $stmt->store_result();
            
            if ($stmt->num_rows > 0) {
               $update_query = "UPDATE users SET name= ?,user_name= ?,password= ?, contact_number = ? WHERE id = ?";
               $update_stmt = $mysqli->prepare($update_query);
               $update_stmt->bind_param
               ('sssss', 
               $user_info["fullname"],
                $user_info["username"], 
                password_hash($user_info["password"], PASSWORD_DEFAULT),
                $user_info["contact_number"],
                $user_info["id"]);

                if ($update_stmt->execute()) {
                    return true;
                }

            }    
        } 
    }
?>