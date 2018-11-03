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

function get_books_by_user($userid){
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
    or die('Error Connecting to MYSQL' . mysqli_connect_error());
    $query = "SELECT picture_path, book_title, 
        status, description, location, c.category_name AS category_name, user_id, is_sold, is_reserved, u.name AS full_name
        FROM book_details bt 
        JOIN category c ON c.id = bt.category_id
        JOIN users u ON bt.user_id = u.id 
        WHERE u.id = ?";

    $stmt = $mysqli->prepare($query) or die($mysqli->error);
    $stmt->bind_param("i", $userid);

    if ($stmt->execute()) {

    $result = $stmt->get_result();


    $books = array_fill(0, $result->num_rows, array_fill(0,10, ''));

    for ($i=0; $i < $result->num_rows; $i++) { 
        $row = $result->fetch_assoc();
        $books[$i] = array(
            "full_name" => $row["full_name"],
            "picture_path" => $row["picture_path"],
            "book_title" => $row["book_title"],
            "status" => $row["status"],
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