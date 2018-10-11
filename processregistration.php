<?php 

$fullname = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];
$location = $_POST["location"];
$contact_number = $_POST["mobile-number"];

$fullname = mysql_escape_string($fullname);



require_once("Database/mysqli_connect.php");

$query = "INSERT INTO Users 
(name, user_name, password, location, contact_number) 
 VALUES  (?, ?, ?, ?, ?)";

 $stmt = mysqli_prepare($database, $query);

mysqli_stmt_bind_param($stmt, "sssss", 
$fullname, $username, $password, $location, $contact_number);

mysqli_stmt_execute($stmt);

$affected_rows = mysqli_stmt_affected_rows($stmt);

if ($affected_rows == 1) {
    echo 'Successfully created account';
    $_SESSION["user"] = 
}
?>