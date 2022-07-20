<?php
    require('../controller/dbConfig.php');
    $project_id = $_GET['category_id'];
    $selectQry = " UPDATE categories SET category_delete_status =0 WHERE id = '{$category_id}' ";
    $isCategory = mysqli_query($dbCon, $selectQry);

    if ( isset($isCategory) ) {
        $message = "Category deleted";
    }else{
        $message = "Category not deleted";
    }

    header("Location: categoriesList.php?msg={$message}");