<?php 

require_once('Database/mysqli_connect.php');

$username = $_POST["username"];
$password = $_POST["password"];

$username = mysqli_real_escape_string($database, $username);
$password = mysqli_real_escape_string($database, $password);

$query = "SELECT name, user_name, password FROM users WHERE user_name = ? AND password = ? LIMIT 1";

$stmt = mysqli_prepare($database, $query);

mysqli_stmt_bind_param($stmt, "ss", $username, $password);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$row = mysqli_fetch_assoc($result);


// echo $row["name"] . "<br>";
if ($row !== NULL) {
    session_start();
    header('location:index.php');
    $_SESSION["user"] = $row["name"];
    $_SESSION["authenticated"] = TRUE;
}
else{
    $_SESSION["login_error"] = 'Invalid Login';
}


?>