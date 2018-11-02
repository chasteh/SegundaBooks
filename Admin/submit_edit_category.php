<?php 
    require_once 'db_categories.php';

    $id = $_POST["id"] ?? "";
    $category_name = $_POST["category_name"] ?? "";

    $update_result = update_category($id, $category_name);

    if ($update_result === true) {
        header('location:categories.php');
    }
?>