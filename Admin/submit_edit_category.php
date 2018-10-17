<?php 
    require_once 'db_categories.php';

    if(isset($_POST["id"]) && array_key_exists("id", $_POST)){
        $id = $_POST["id"];
    }

    if(isset($_POST["category_name"]) && array_key_exists("category_name", $_POST)){
        $category_name = $_POST["category_name"];
    }

    $update_result = update_category($id, $category_name);

    if ($update_result === true) {
        header('location:categories.php');
    }
?>