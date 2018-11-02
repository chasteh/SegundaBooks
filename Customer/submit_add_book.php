<?php 
session_start();
$userid = $_SESSION["id"] ?? 0; 
$title = $_POST["title"] ?: "No Title";
$category_id = $_POST["category"] ?: 10;
$status = $_POST["status"] ?: "New";
$description = $_POST["description"] ?: "No Description";
$location = $_POST["location"] ?: "No Location";

$book_info = 
array(
	"user_id" => $userid,
	"title" => $title,
	"category_id" => $category_id,
	"status" => $status,
	"description" => $description,
	"location" => $location,
	"is_sold" => false,
	"is_reserved" => false
);


if($_FILES['bookimage']['name'])
{
	$dir = "userbookimages/".$userid;

 	if(!is_dir($dir)){
		mkdir($dir);
 	}

  	$file_name = strtolower($userid.".jpg"); //You are renaming the file here
  	move_uploaded_file($_FILES['firstpic']['tmp_name'], SITE_ROOT."/Customer/userbookimages/".$first_file_name); // Move the uploaded file to the desired folder
}

?>