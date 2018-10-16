<?php 

DEFINE ("DB_USER", 'websiteuser');
DEFINE ("DB_PASSWORD", '12312312');
DEFINE ("DB_HOST", 'localhost');
DEFINE ("DB_NAME", 'segundabooks');

$database = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die('Error Connecting to MYSQL' . mysqli_connect_error());

?>