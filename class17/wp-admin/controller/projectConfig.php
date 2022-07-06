<?php
// include dbCon
require('../controller/dbConfig.php');

if ( isset($_POST['add_project']) ) {
    $category_id = $_POST['category_id'];
    $project_name = $_POST['project_name'];
    $project_link = $_POST['project_link'];
    $project_thumb = $_POST['project_thumb'];

    if ( $project_name == '' || $project_link == '' ||  $project_thumb == '' ) {
        $message = "ALL Field is Requerd";
    }else{
        $projectInsertQry = "INSERT INTO our_project (category_id, project_name, project_link, project_thumb) VALUES ('{$category_id}', '{$project_name}','{$project_link}','{$project_thumb}') ";
        $projectsAdd = mysqli_query($dbCon, $projectInsertQry);

        if ( isset($projectsAdd)) {
            $message = "Your Prroject Added";
        }else{
            $message = "not add";
        }
        header("Location: ../our_project/projectList.php?msg={$message}");
    }
}


// Project Update Code 

if (isset($_POST['update_project'])) {
    $project_id = $_GET['project_id'];
    $project_name = $_POST['project_name'];
    $project_link = $_POST['project_link'];
    $project_thumb = $_POST['project_thumb'];

    if ( $project_name == '' || $project_link == '' ||  $project_thumb == '' ) {
        $message = "ALL Field is Requerd";
    }else{
        $projectUpdateQry = " UPDATE our_project SET project_name = '{$project_name}', project_link = '{$project_link}', project_thumb ='{$project_thumb}' WHERE id = '{$project_id}' ";

        $projectsUpdate = mysqli_query($dbCon, $projectUpdateQry);

        if ( isset($projectsUpdate)) {
            $message = "Your Prroject Update";
        }else{
            $message = "not add";
        }
        header("Location: ../our_project/projectListUpdate.php?project_id={$project_id}&msg={$message}");
    }
}