<?php
    require('../controller/dbConfig.php');
    $staff_id = $_GET['staff_id'];
    $selectQry = "DELETE FROM our_staff WHERE id = '{$staff_id}' ";
    $isStaff = mysqli_query($dbCon, $selectQry);

    if ( isset($isStaff) ) {
        $message = "Staff deleted";
    }else{
        $message = "Staff not deleted";
    }

    header("Location: staffList.php?msg={$message}");