<?php 
session_start();
$userid = $_SESSION["id"] ?? 0; 
include_once '../index.php';
include_once '../Customer/db_books.php';

$title = $_POST["title"] ?? "No Title";
$category_id = $_POST["category"] ?? 10;
$price = $_POST["price"] ?? 0;
$status = $_POST["status"] ?? "New";
$description = $_POST["description"] ?? "No Description";
$location = $_POST["location"] ?? "No Location";

$book_info = 
array(
	"user_id" => $userid,
	"title" => $title,
	"price" => $price,
	"category_id" => $category_id,
	"status" => $status,
	"description" => $description,
	"location" => $location,
	"is_sold" => false,
	"is_reserved" => false
);


if($_FILES['bookimage']['name'])
{
	$file_name = $_FILES["bookimage"]["name"];

	$dir = "userbookimages/".$userid."/";

 	if(!is_dir($dir)){
		mkdir($dir, 0777, true);
	 }

	 $save_file_name = strtolower($userid."-"."$file_name"); //You are renaming the file here

	 $target_dir = $dir.$save_file_name;
	
  	move_uploaded_file($_FILES['bookimage']['tmp_name'], $dir.$save_file_name); // Move the uploaded file to the desired folder
}

$book_info["picture_path"] = $target_dir;

if (insert_book($book_info)) {
	header("Location: index.php");
}

?>