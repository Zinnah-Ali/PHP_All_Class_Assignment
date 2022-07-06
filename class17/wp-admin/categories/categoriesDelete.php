<?php
    require('../controller/dbConfig.php');
    $category_id = $_GET['category_id'];
    $selectQry = " UPDATE categories SET category_delete_status=0 WHERE id = '{$category_id}' ";
    $isCategory = mysqli_query($dbCon, $selectQry);

    if ( isset($isCategory) ) {
        $message = "Project deleted";
    }else{
        $message = "Project not deleted";
    }

    header("Location: categoriesList.php?msg={$message}");