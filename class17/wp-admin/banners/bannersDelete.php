<?php
    require('../controller/dbConfig.php');
    $banners_id = $_GET['banners_id'];
    $selectQry = " UPDATE banners SET banners_status =0 WHERE id = '{$banners_id}' ";
    $isBanners = mysqli_query($dbCon, $selectQry);

    if ( isset($isBanners) ) {
        echo "banner deleted";
    }else{
        echo "banner not deleted";
    }

    header('Location: bannersList.php');