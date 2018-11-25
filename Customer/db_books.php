<?php 

require_once '../Database/mysqli_connect.php';

function insert_book($book_info){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
    or die('Error Connecting to MYSQL' . mysqli_connect_error());
    $query = "INSERT INTO book_details(book_title, picture_path, status, price, description, location, category_id, user_id, is_sold, is_reserved) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query) or die($mysqli->error);

    $stmt->bind_param('sssdssiiii',
    $book_info["title"],
    $book_info["picture_path"],
    $book_info["status"],
    $book_info["price"],
    $book_info["description"],
    $book_info["location"],
    intval($book_info["category_id"]),
    intval($book_info["user_id"]),
    intval($book_info["is_sold"]),
    intval($book_info["is_reserved"]));
    
    if ($stmt->execute() or die($mysqli->error)) {
        if ($stmt->affected_rows > 0) {
            return true;
        }
    }
}

function get_no_of_sold_items($user_id){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
    or die('Error Connecting to MYSQL' . mysqli_connect_error());
    $query = "SELECT COUNT(is_sold) AS sold_books FROM book_details WHERE user_id = ? AND is_sold = 1 LIMIT 1";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('s', $user_id);

    if ($stmt->execute()) {

        $result = $stmt->get_result();

        if($count = $result->fetch_assoc()){
           return $count["sold_books"];
        }
    
    }   
}

function get_no_of_reserved_items($user_id){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
    or die('Error Connecting to MYSQL' . mysqli_connect_error());
    $query = "SELECT COUNT(is_reserved) AS reserved_items FROM book_details WHERE user_id = ? AND is_reserved = 1 LIMIT 1";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('s', $user_id);

    if ($stmt->execute()) {

        $result = $stmt->get_result();

        if($count = $result->fetch_assoc()){
           return $count["reserved_items"];
        }
    
    }   
}


function get_book($book_id){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
    or die('Error Connecting to MYSQL' . mysqli_connect_error());
    $query = "SELECT bt.id, picture_path, book_title, 
    status, price ,description, location, c.category_name AS category_name, 
    user_id, is_sold, is_reserved, 
    u.name AS full_name,
    u.contact_number AS contact_number
    FROM book_details bt 
    LEFT JOIN category c ON c.id = bt.category_id
    JOIN users u ON bt.user_id = u.id 
    WHERE bt.id = ? LIMIT 1";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('i', $book_id);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if($row = $result->fetch_assoc()){
            return array(
                "id" => $row["id"],
                "picture_path" => $row["picture_path"],
                "book_title" => $row["book_title"],
                "status" => $row["status"],
                "price" => $row["price"],
                "description" => $row["description"],
                "location" => $row["location"],
                "category_name" => $row["category_name"],
                "user_id" => $row["user_id"],
                "is_sold" => $row["is_sold"] == 0 ? "Not Sold" : "Sold",
                "is_reserved" => $row["is_reserved"] == 0 ? "Not Reserved" : "Reserved",
            );
        }
    
    }     
}


function get_books_by_user($userid){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
    or die('Error Connecting to MYSQL' . mysqli_connect_error());
    $query = "SELECT bt.id, picture_path, book_title, 
        status, price ,description, location, c.category_name AS category_name, 
        user_id, is_sold, is_reserved, 
        u.name AS full_name,
        u.contact_number AS contact_number
        FROM book_details bt 
        LEFT JOIN category c ON c.id = bt.category_id
        JOIN users u ON bt.user_id = u.id 
        WHERE bt.user_id = ?";

    $stmt = $mysqli->prepare($query) or die($mysqli->error);
    $stmt->bind_param("i", $userid);

    if ($stmt->execute()) {

    $result = $stmt->get_result();

    $books = array_fill(0, $result->num_rows, array_fill(0,10, ''));

    for ($i=0; $i < $result->num_rows; $i++) { 
        $row = $result->fetch_assoc();
        $books[$i] = array(
            "id" => $row["id"],
            "picture_path" => $row["picture_path"],
            "book_title" => $row["book_title"],
            "status" => $row["status"],
            "price" => $row["price"],
            "description" => $row["description"],
            "location" => $row["location"],
            "category_name" => $row["category_name"],
            "user_id" => $row["user_id"],
            "is_sold" => $row["is_sold"] == 0 ? "Not Sold" : "Sold",
            "is_reserved" => $row["is_reserved"] == 0 ? "Not Reserved" : "Reserved",
        );
    }
}     

    return $books;
}


function get_all_books(){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
    or die('Error Connecting to MYSQL' . mysqli_connect_error());
    $query = "SELECT bt.id, picture_path, book_title, 
        status, price ,description, location, c.category_name AS category_name, 
        user_id, is_sold, is_reserved, 
        u.name AS full_name,
        u.contact_number AS contact_number
        FROM book_details bt 
        LEFT JOIN category c ON c.id = bt.category_id
        JOIN users u ON bt.user_id = u.id";

    $stmt = $mysqli->prepare($query) or die($mysqli->error);

    if ($stmt->execute()) {

    $result = $stmt->get_result();

    $books = array_fill(0, $result->num_rows, array_fill(0,10, ''));

    for ($i=0; $i < $result->num_rows; $i++) { 
        $row = $result->fetch_assoc();
        $books[$i] = array(
            "id" => $row["id"],
            "picture_path" => $row["picture_path"],
            "book_title" => $row["book_title"],
            "status" => $row["status"],
            "price" => $row["price"],
            "description" => $row["description"],
            "location" => $row["location"],
            "category_name" => $row["category_name"],
            "user_id" => $row["user_id"],
            "is_sold" => $row["is_sold"] == 0 ? "Not Sold" : "Sold",
            "is_reserved" => $row["is_reserved"] == 0 ? "Not Reserved" : "Reserved",
        );
    }
}     
    return $books;
}

function search_books($search){
    $search = "%" .$search. "%";

    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
    or die('Error Connecting to MYSQL' . mysqli_connect_error());
    $query = "SELECT bt.id, picture_path, book_title, 
        status, price ,description, location, c.category_name AS category_name, 
        user_id, is_sold, is_reserved, 
        u.name AS full_name,
        u.contact_number AS contact_number
        FROM book_details bt 
        LEFT JOIN category c ON c.id = bt.category_id
        JOIN users u ON bt.user_id = u.id
        WHERE book_title LIKE ?";

    $stmt = $mysqli->prepare($query) or die($mysqli->error);
    $stmt->bind_param("s", $search);

    if ($stmt->execute()) {

    $result = $stmt->get_result();

    $books = array_fill(0, $result->num_rows, array_fill(0,10, ''));

    for ($i=0; $i < $result->num_rows; $i++) { 
        $row = $result->fetch_assoc();
        $books[$i] = array(
            "id" => $row["id"],
            "picture_path" => $row["picture_path"],
            "book_title" => $row["book_title"],
            "status" => $row["status"],
            "price" => $row["price"],
            "description" => $row["description"],
            "location" => $row["location"],
            "category_name" => $row["category_name"],
            "user_id" => $row["user_id"],
            "is_sold" => $row["is_sold"] == 0 ? "Not Sold" : "Sold",
            "is_reserved" => $row["is_reserved"] == 0 ? "Not Reserved" : "Reserved",
        );
    }
}     
    return $books;
}

?>