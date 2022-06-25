<?php
// dbCon Include
require('dbConfig.php');

if (isset($_POST['add_section'])) {
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details = $_POST['details'];
    $page_no = $_POST['page_no'];

    if ($title== '' || $sub_title =='' || $details == '' || $page_no == ''){
        $message = "All Field is requerd";
    }else{
        $insertSection = "INSERT INTO sections ( title, sub_title, details, page_no ) VALUES ('{$title}','{$sub_title}','{$details}','{$page_no}')";

        $sectionAdd = mysqli_query($dbCon, $insertSection);

        if (isset($sectionAdd)) {
            $message = "Service Title Added";
        }else{
            $message = "Service not added";
        }
        header("Location: ../sections/sectionList.php?msg={$message}");
    }
}

// Sections Title Update
if ( isset($_POST['update_section']) ) {
    $section_id = $_GET['section_id'];
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details = $_POST['details'];
    $page_no = $_POST['page_no'];

    if ($title== '' || $sub_title =='' || $details == '' || $page_no == ''){
        $message = "All Field is requerd";
    }else{
        $updateSectionQry = "UPDATE sections SET title = '{$title}', sub_title = '{$sub_title}', details = '{$details}', page_no = '{$page_no}' WHERE id = '{$section_id}'";

        $sectionUpdate = mysqli_query($dbCon, $updateSectionQry);

        if (isset($sectionUpdate)) {
            $message = "Service Title Update";
        }else{
            $message = "Service not Update";
        }
        header("Location: ../sections/sectionListUpdate.php?section_id={$section_id}&msg={$message}");
    }

}