<?php

$fullname = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];
$location = $_POST["location"];
$contact_number = $_POST["mobile-number"];

$fullname = mysql_escape_string($fullname);


require_once "Database/mysqli_connect.php";

$query = "INSERT INTO Users 
(name, user_name, password, location, contact_number) 
 VALUES  (?, ?, ?, ?, ?)";

 $stmt = mysqli_prepare($database, $query);

mysqli_stmt_bind_param($stmt, "sssss", $fullname, $username, $password, $location, $contact_number);

mysqli_stmt_execute($stmt);

$affected_rows = mysqli_stmt_affected_rows($stmt);

if ($affected_rows == 1) {
        $query = "SELECT name, user_name, password FROM users WHERE user_name = ? AND password = ? LIMIT 1";
        $stmt = mysqli_prepare($database, $query);

        mysqli_stmt_bind_param($stmt, "ss", $username, $password);

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        $row = mysqli_fetch_assoc($result);

        if ($row !== null) {
            session_start();
            header('location:index.php');
            $_SESSION["user"] = $row["name"];
            $_SESSION["authenticated"] = true;
        }
}
?>