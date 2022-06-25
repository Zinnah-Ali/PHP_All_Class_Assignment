<?php
    require('../controller/dbConfig.php');
    $project_id = $_GET['project_id'];
    $selectQry = " UPDATE our_project SET project_status =0 WHERE id = '{$project_id}' ";
    $isProject = mysqli_query($dbCon, $selectQry);

    if ( isset($isProject) ) {
        $message = "Project deleted";
    }else{
        $message = "Project not deleted";
    }

    header("Location: ProjectList.php?msg={$message}");