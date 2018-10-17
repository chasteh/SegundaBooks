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
        $query = "SELECT id, category_name, COUNT(*) as count_of_books FROM category GROUP BY category_name";
        $result = $mysqli->query($query);
        return $result;
    }

    function get_category($category_id){
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
        or die('Error Connecting to MYSQL' . mysqli_connect_error());
        $query = "SELECT id, category_name FROM category WHERE id = ? LIMIT 1";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('i', $category_id);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if($category = $result->fetch_assoc()){
                return array("id" => $category["id"],
                "category_name" => $category["category_name"]);
            }
        
        }     
    }

    function update_category($category_id, $category_name){
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
        or die('Error Connecting to MYSQL' . mysqli_connect_error());
        $query = "SELECT id, category_name FROM category WHERE id = ? LIMIT 1";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('s', $category_id);

        if ($stmt->execute()) {

            $stmt->store_result();


            if ($stmt->num_rows > 0) {
                echo "SELECTEDROWS";
               $update_query = "UPDATE category SET category_name= ? WHERE id = ?";
               $update_stmt = $mysqli->prepare($update_query);
               $update_stmt->bind_param
               ('si', 
               $category_name,
               $category_id);

                if ($update_stmt->execute()) {
                    return true;
                }

            }    
        } 
    }



?>