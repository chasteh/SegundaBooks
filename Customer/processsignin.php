<?php 

require_once('../Database/mysqli_connect.php');

$username = $_POST["username"];
$password = $_POST["password"];

$username = mysqli_real_escape_string($database, $username);
$password = mysqli_real_escape_string($database, $password);

$query = "SELECT id, name, user_name, password, user_role FROM users WHERE user_name = ? LIMIT 1";

$stmt = mysqli_prepare($database, $query);

mysqli_stmt_bind_param($stmt, "s", $username);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$row = mysqli_fetch_assoc($result);

if ($row !== null && password_verify($password, $row["password"])) {
        session_start();

        if ($row["user_role"] == 1) {
            header('Location: ../Admin/admindashboard.php');                         
        }

        else if ($row["user_role"] == 0) {
            header('Location: profile.php');             
        }

        $_SESSION["id"] = $row["id"];
        $_SESSION["authenticated"] = true;
}
else {
    session_start();
    $_SESSION["login_error"] = "Invalid Username or Password";
    header('location: signin.php');
}


?>