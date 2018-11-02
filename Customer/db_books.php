<?php 

require_once '../Database/mysqli_connect.php';

function insert_book($book_info){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
    or die('Error Connecting to MYSQL' . mysqli_connect_error());
    $query = "INSERT INTO users (name, user_name, password, contact_number) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);

    $stmt->bind_param('ssss', 
    $book_info["fullname"],
    $book_info["username"],
    $book_info["password"],
    $book_info["contact_number"]);

    
    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            return true;
        }
    }
}














?>