<?php
// DB CONNECT CODE
require("../controller/dbConfig.php");

// Category Insert Code Start
if (isset($_POST['add_categories'])) {
   $categories_name   = $_POST['categories_name'];
   $categories_status = $_POST['categories_status'];

   $categoryInsertQry = " INSERT INTO categories (categories_name, categories_status) VALUES ('{$categories_name}','{$categories_status}') ";

   $categoryInsert = mysqli_query($dbCon,  $categoryInsertQry);

   if (isset($categoryInsert)) {
      $message = "Category Insert Succecfull";
   }else{
      $message = "Insert Problem";
   }

   header("Location: ../categories/categoriesList.php?msg='{$message}'");
}


// Category Update Code 

if (isset($_POST['update_categories'])) {
   $category_id = $_GET['category_id'];
   $categories_name   = $_POST['categories_name'];
   $categories_status = $_POST['categories_status'];

   $categoriesUpadeQry = "UPDATE categories SET categories_name='{$categories_name}',categories_status='{$categories_status}' WHERE id= '{$category_id}' ";

   $updateCategory = mysqli_query($dbCon, $categoriesUpadeQry);

   if (isset($updateCategory)) {
      $message =  "Category update Succecfull";
   }else{
      $message = "Update faild";
   }
   header("Location: ../categories/categoriesListUpdate.php?category_id='{$category_id}'&msg='{$message}'");
}
