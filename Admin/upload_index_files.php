<?php 

include_once '../index.php';

if($_FILES['firstpic']['name'])
{
 // Folder where you wanna move the file.
  $first_file_name = strtolower("carousel1.jpg"); //You are renaming the file here
  move_uploaded_file($_FILES['firstpic']['tmp_name'], SITE_ROOT."/Admin/uploads/".$first_file_name); // Move the uploaded file to the desired folder
} 

if($_FILES['secondpic']['name'])
{
 // Folder where you wanna move the file.
  $second_file_name = strtolower("carousel2.jpg"); //You are renaming the file here
  move_uploaded_file($_FILES['secondpic']['tmp_name'], SITE_ROOT."/Admin/uploads/".$second_file_name); // Move the uploaded file to the desired folder
} 

if($_FILES['thirdpic']['name'])
{
 // Folder where you wanna move the file.
  $third_file_name = strtolower("carousel3.jpg"); //You are renaming the file here
  move_uploaded_file($_FILES['thirdpic']['tmp_name'], SITE_ROOT."/Admin/uploads/".$third_file_name); // Move the uploaded file to the desired folder
} 


// $inser_into_db="INSERT INTO `database`.`table` (`folder_name`, `file_name`) VALUES('$save_path', '$myname'))";

?>