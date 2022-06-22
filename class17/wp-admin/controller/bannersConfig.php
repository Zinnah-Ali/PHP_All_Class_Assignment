<?php
require('./dbConfig.php');

// Insert/Add Banners
if ( isset($_POST['add_banner']) ) {
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details = $_POST['details'];
    $banners_img = $_POST['banners_img'];


    if ( $title == "" || $sub_title == "" || $details == "" || $banners_img == "" ) {
        $message = "All Field is Requerd";
        header("Location: ../banners/bannersListAdd.php?msg={$message}" );
    }else{
      $insertBanner = "INSERT INTO banners ( title, sub_title, details, banners_img ) VALUES ( '{$title}', '{$sub_title}', '{$details}', '{$banners_img}' )";
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
    $banner_id = $_GET['banner_id'];
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details = $_POST['details'];
    $banners_img = $_POST['banners_img'];

    if ( $title == "" || $sub_title == "" || $details == "" || $banners_img == "" ) {
        $message = "All Field is Requerd";
        header("Location: ../banners/bannersListUpdate.php?banner_id={$banner_id}&msg={$message}" );

    }else{
      $updateBannerQry = " UPDATE banners SET title='{$title}', sub_title='{$sub_title}',details='{$details}', banners_img='{$banners_img}' WHERE id = '{$banner_id}'";

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

