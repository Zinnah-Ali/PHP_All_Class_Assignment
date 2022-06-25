<?php
    require('../controller/dbConfig.php');
    $section_id = $_GET['section_id'];
    $deleteQry = " DELETE FROM sections WHERE id = '{$section_id}' ";
    $isSection = mysqli_query($dbCon, $deleteQry);

    if ( isset($isSection) ) {
        echo "Section deleted";
    }else{
        echo "Section not deleted";
    }

    header('Location: sectionList.php');