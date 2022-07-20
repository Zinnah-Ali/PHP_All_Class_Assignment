<?php
// include dbCon
require('dbConfig.php');

if ( isset($_POST['add_staff']) ) {

    //Image Upload
    $staff_img = $_FILES['staff_img'];
    $uploadStatus = false;
    if (isset($staff_img)) {

        print_r($staff_img);
        die();

        $img_name     = $staff_img['name'];
        $img_type     = $staff_img['type'];
        $img_tmp_name = $staff_img['tmp_name'];
        $img_size     = $staff_img['size'];
        
        // Extantion Validation
        $nameExtArr   = explode('.', $img_name);
        $imgExtantion = strtolower(end($nameExtArr));
        $validExtArr  = array('jpg', 'png', 'jpeg');
        $inExtantion  = in_array($imgExtantion, $validExtArr);
        $randomImgName= time().'.'.$imgExtantion;
        if (isset($inExtantion)) {
            $uploadImg = move_uploaded_file($img_tmp_name, "../uploads/staffImg/".$randomImgName);
            $uploadStatus = true;
        }else{
            $message = $imgExtantion." File is not Valide";
        }
      
    }


    $staff_name = $_POST['staff_name'];
    // $staff_img = $_POST['staff_img'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];

    if ( $staff_name =='' || $uploadStatus = false) {
        echo "Name or Image Field is requerd";
    }else{
        $staffInsertQry = "INSERT INTO our_staff (staff_name, staff_img, facebook, twitter, linkedin) VALUES ('{$staff_name}','{$randomImgName}','{$facebook}', '{$twitter}', '{$linkedin}') ";
        $staffAdd = mysqli_query($dbCon, $staffInsertQry);

        if ( isset($staffAdd)) {
            $message = "Staff Added";
        }else{
            $message = "not add";
        }
        header("Location: ../our_staff/staffList.php?msg={$message}");
    }
}

// Update Staff Code
if ( isset($_POST['update_staff']) ) {


      //Show Old Image
      $staff_id = $_GET['staff_id'];
      $updateSelectQry = "SELECT * FROM our_staff WHERE id = '{$staff_id}'";
      $updateStaffList = mysqli_query($dbCon, $updateSelectQry);
      $oldImg       = "";
      foreach ($updateStaffList as $key => $staff) {
          $oldImg = $staff['staff_img'];
      }

  
      //Update Upload Code 
      $staff_img = $_FILES['staff_img'];
      $uploadStatus = false;
      if (isset($staff_img)) {
          $img_name     = $staff_img['name'];
          $img_type     = $staff_img['type'];
          $img_tmp_name = $staff_img['tmp_name'];
          $img_size     = $staff_img['size'];
          
          // Extantion Validation
          $nameExtArr   = explode('.', $img_name);
          $imgExtantion = strtolower(end($nameExtArr));
          $validExtArr  = array('jpg', 'png', 'jpeg');
          $inExtantion  = in_array($imgExtantion, $validExtArr);
          $randomImgName= time().'.'.$imgExtantion;

       
          if ($inExtantion) {
            if( $oldImg != $randomImgName ){
                $file = "../uploads/staffImg/".$oldImg;
                if (file_exists($file)) {
                    unlink( $file );
                } 
            }
              $uploadImg = move_uploaded_file($img_tmp_name, "../uploads/staffImg/".$randomImgName);
              $uploadStatus = true;
             
          }else{
              $randomImgName = $oldImg;
              $message = $imgExtantion." File is not Valide";
          }
        
      }
  

    $staff_id = $_GET['staff_id'];
    $staff_name = $_POST['staff_name'];
    // $staff_img = $_POST['staff_img'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];

    if ( $staff_name =='' || $uploadStatus = false) {
        echo "Name or Image Field is requerd";
    }else{
        $staffUpdateQry = "UPDATE our_staff SET staff_name = '{$staff_name}', staff_img ='{$randomImgName}', facebook= '{$facebook}',  twitter = '{$twitter}', linkedin ='{$linkedin}' WHERE id = '{$staff_id}' ";

        $staffUpdate = mysqli_query($dbCon, $staffUpdateQry);

        if ( isset($staffUpdate)) {
            $message = "Staff Update";
        }else{
            $message = "not Update";
        }
        header("Location: ../our_staff/staffListUpdate.php?staff_id={$staff_id}&msg={$message}");
    }
}