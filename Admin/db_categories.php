<?php 

    require_once '../Database/mysqli_connect.php';


    function insert_category($categoryName){
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
        or die('Error Connecting to MYSQL' . mysqli_connect_error());
        $query = "INSERT INTO category (category_name) VALUES (?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('s', $categoryName);
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                return true;
            }
        }
    }

    function get_categories(){
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
        or die('Error Connecting to MYSQL' . mysqli_connect_error());
        $query = "SELECT category_name, COUNT(*) as count_of_books FROM category GROUP BY category_name";
        $result = $mysqli->query($query);
        return $result;
    }



?>