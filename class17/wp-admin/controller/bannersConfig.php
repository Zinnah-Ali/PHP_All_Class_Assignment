<?php
// db include
require('./dbConfig.php');

// Insert/Add Banners
if ( isset($_POST['add_banner']) ) {
    // echo"<pre>";
    // print_r( $_FILES['banners_img']);
    // echo"</pre>";

    // Upload Image File Code
    $banners_img = $_FILES['banners_img'];
    $uploadStatus = false;
    if (isset($banners_img)) {
        $img_name     = $banners_img['name'];
        $img_type     = $banners_img['type'];
        $img_tmp_name = $banners_img['tmp_name'];
        $img_size     = $banners_img['size'];
        
        // Extantion Validation
        $nameExtArr   = explode('.', $img_name);
        $imgExtantion = strtolower(end($nameExtArr));
        $validExtArr  = array('jpg', 'png', 'jpeg');
        $inExtantion  = in_array($imgExtantion, $validExtArr);
        $randomImgName= time().'.'.$imgExtantion;
        if (isset($inExtantion)) {
            $uploadImg = move_uploaded_file($img_tmp_name, "../uploads/bannersImg/".$randomImgName);
            $uploadStatus = true;
        }else{
            $message = $inExtantion." File is not Valide";
        }
      
    }

    // Add Banners Text Fields
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details = $_POST['details'];
    $banners_img = $_POST['banners_img'];


    if ( $title == "" || $sub_title == "" || $details == "" || $uploadStatus == false ) {
        $message = "All Field is Requerd";
        header("Location: ../banners/bannersListAdd.php?msg={$message}" );
    }else{
      $insertBanner = "INSERT INTO banners ( title, sub_title, details, banners_img ) VALUES ( '{$title}', '{$sub_title}', '{$details}', '{$randomImgName}' )";
       $bannerSubmit = mysqli_query($dbCon, $insertBanner);

       if ( isset( $bannerSubmit ) ) {
        $message = "Well Done, Your Banners is Added";
        header("Location: ../banners/bannersList.php?msg={$message}" );
       }else{
        $message = "not Submit";
        header("Location: ../banners/bannersListAdd.php?msg={$message}" );
       }
    }

}


// Update Banners
if ( isset( $_POST['update_banner'] ) ) {

    // Show Old Image
    $banner_id = $_GET['banner_id'];
    $updateSelectQry = "SELECT * FROM banners WHERE id = '{$banner_id}'";
    $updateBannerList = mysqli_query($dbCon, $updateSelectQry);
    $oldImg = "";
    foreach ($updateBannerList as $key => $banners) {
        $oldImg = $banners['banners_img'];
    }

    
        // Upload Image File Code
        $banners_img = $_FILES['banners_img'];
        $uploadStatus = false;
        if (isset($banners_img)) {
            $img_name     = $banners_img['name'];
            $img_type     = $banners_img['type'];
            $img_tmp_name = $banners_img['tmp_name'];
            $img_size     = $banners_img['size'];
            
            // Extantion Validation
            $nameExtArr   = explode('.', $img_name);
            $imgExtantion = strtolower(end($nameExtArr));
            $validExtArr  = array('jpg', 'png', 'jpeg');
            $inExtantion  = in_array($imgExtantion, $validExtArr);
            $randomImgName= time().'.'.$imgExtantion;

           
            if ($inExtantion) {
                if( $oldImg != $randomImgName ){
                    $file = "../uploads/bannersImg/".$oldImg;
                    if (file_exists($file)) {
                        unlink( $file );
                    }
                }
                $uploadImg = move_uploaded_file($img_tmp_name, "../uploads/bannersImg/".$randomImgName);
                $uploadStatus = true;               
            }else{
                $randomImgName = $oldImg;
                $message = $inExtantion." File is not Valide";
            }
          
        }

    $banner_id = $_GET['banner_id'];
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details = $_POST['details'];
    $banners_img = $_POST['banners_img'];

    if ( $title == "" || $sub_title == "" || $details == "" ) {
        $message = "All Field is Requerd";
        header("Location: ../banners/bannersListUpdate.php?banner_id={$banner_id}&msg={$message}" );

    }else{
      $updateBannerQry = " UPDATE banners SET title='{$title}', sub_title='{$sub_title}', details='{$details}', banners_img='{$randomImgName}' WHERE id = '{$banner_id}'";
      $bannerUpdate = mysqli_query($dbCon, $updateBannerQry);

       if ( isset( $bannerUpdate ) ) {
        $message = "Well Done, Your Banner is Updated";
        header("Location: ../banners/bannersListUpdate.php?banner_id={$banner_id}&msg={$message}" );
       }else{
        $message = "not Updated";
        header("Location: ../banners/bannersListUpdate.php?banner_id={$banner_id}&msg={$message}" );
       }
    }
}

