<?php
                require_once 'db_categories.php';

              $category_name = $_POST["category_name"] ?? "";
                    
                   if (insert_category($category_name)) {
                       header('location:categories.php');
                   }
                ?>

