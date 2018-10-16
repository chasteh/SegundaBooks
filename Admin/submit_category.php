<?php
                require_once 'db_categories.php';
                    $category = $_POST["categoryname"];
                    $insert_result = insert_category($category);
                    if ($insert_result === true) {
                        header('location:categories.php');
                    }
?>