<?php
// include dbCon
require('dbConfig.php');

if ( isset($_POST['add_staff']) ) {
    $staff_name = $_POST['staff_name'];
    $staff_img = $_POST['staff_img'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];

    if ( $staff_name =='' || $staff_img == '' ) {
        echo "Name or Image Field is requerd";
    }else{
        $staffInsertQry = "INSERT INTO our_staff (staff_name, staff_img, facebook, twitter, linkedin) VALUES ('{$staff_name}','{$staff_img}','{$facebook}', '{$twitter}', '{$linkedin}') ";
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
    $staff_id = $_GET['staff_id'];
    $staff_name = $_POST['staff_name'];
    $staff_img = $_POST['staff_img'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];

    if ( $staff_name =='' || $staff_img == '' ) {
        echo "Name or Image Field is requerd";
    }else{
        $staffUpdateQry = "UPDATE our_staff SET staff_name = '{$staff_name}', staff_img ='{$staff_img}', facebook= '{$facebook}',  twitter = '{$twitter}', linkedin ='{$linkedin}' WHERE id = '{$staff_id}' ";

        $staffUpdate = mysqli_query($dbCon, $staffUpdateQry);

        if ( isset($staffUpdate)) {
            $message = "Staff Update";
        }else{
            $message = "not Update";
        }
        header("Location: ../our_staff/staffList.php?staff_id={$staff_id}&msg={$message}");
    }
}