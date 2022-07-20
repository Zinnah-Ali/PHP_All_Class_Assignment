<?php
// include dbCon
require('../controller/dbConfig.php');

if ( isset($_POST['add_project']) ) {

    $project_thumb = $_FILES['project_thumb'];
    $uploadStatus = false;
    if (isset($project_thumb)) {
        $img_name     = $project_thumb['name'];
        $img_type     = $project_thumb['type'];
        $img_tmp_name = $project_thumb['tmp_name'];
        $img_size     = $project_thumb['size'];
        
        // Extantion Validation
        $nameExtArr   = explode('.', $img_name);
        $imgExtantion = strtolower(end($nameExtArr));
        $validExtArr  = array('jpg', 'png', 'jpeg');
        $inExtantion  = in_array($imgExtantion, $validExtArr);
        $randomImgName= time().'.'.$imgExtantion;
        if (isset($inExtantion)) {
            $uploadImg = move_uploaded_file($img_tmp_name, "../uploads/projectsImg/".$randomImgName);
            $uploadStatus = true;
        }else{
            $message = $imgExtantion." File is not Valide";
        }
      
    }

    $category_id = $_POST['category_id'];
    $project_name = $_POST['project_name'];
    $project_link = $_POST['project_link'];
    // $project_thumb = $_POST['project_thumb'];

    if ( $project_name == '' || $project_link == '' ||  $uploadStatus = false ) {
        $message = "ALL Field is Requerd";
    }else{
        $projectInsertQry = "INSERT INTO our_project (category_id, project_name, project_link, project_thumb) VALUES ('{$category_id}', '{$project_name}','{$project_link}','{$randomImgName}') ";
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

    //Show Old Image
    $project_id = $_GET['project_id'];
    $updateSelectQry = "SELECT * FROM our_project WHERE id = '{$project_id}'";
    $updateProjectList = mysqli_query($dbCon, $updateSelectQry);
    $oldImg = "";
    foreach ($updateProjectList as $key => $project) {
        $oldImg = $project['project_thumb'];
    }

    //Update Upload Code 
    $project_thumb = $_FILES['project_thumb'];
    $uploadStatus = false;
    if (isset($project_thumb)) {
        $img_name     = $project_thumb['name'];
        $img_type     = $project_thumb['type'];
        $img_tmp_name = $project_thumb['tmp_name'];
        $img_size     = $project_thumb['size'];
        
        // Extantion Validation
        $nameExtArr   = explode('.', $img_name);
        $imgExtantion = strtolower(end($nameExtArr));
        $validExtArr  = array('jpg', 'png', 'jpeg');
        $inExtantion  = in_array($imgExtantion, $validExtArr);
        $randomImgName= time().'.'.$imgExtantion;

        if ($inExtantion) {
            if( $oldImg != $randomImgName ){
                $file = "../uploads/projectsImg/".$oldImg;
                if (file_exists($file)) {
                    unlink( $file );
                } 
            }
            $uploadImg = move_uploaded_file($img_tmp_name, "../uploads/projectsImg/".$randomImgName);
            $uploadStatus = true;
           
        }else{
            $randomImgName = $oldImg;
            $message = $imgExtantion." File is not Valide";
        }
      
    }



    $project_id = $_GET['project_id'];
    $category_id = $_POST['category_id'];
    $project_name = $_POST['project_name'];
    $project_link = $_POST['project_link'];
    // $project_thumb = $_POST['project_thumb'];

    if ( $project_name == '' || $project_link == '' ) {
        $message = "ALL Field is Requerd";
    }else{
        $projectUpdateQry = " UPDATE our_project SET     category_id = '{$category_id}', project_name = '{$project_name}', project_link = '{$project_link}', project_thumb ='{$randomImgName}' WHERE id = '{$project_id}' ";

        $projectsUpdate = mysqli_query($dbCon, $projectUpdateQry);

        if ( isset($projectsUpdate)) {
            $message = "Your Prroject Update Complated";
        }else{
            $message = "not Update ";
        }
        header("Location: ../our_project/projectListUpdate.php?project_id={$project_id}&msg={$message}");
    }
}