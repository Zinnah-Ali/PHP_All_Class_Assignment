<?php
    require('../controller/dbConfig.php');
    $client_id = $_GET['client_id'];
    $selectQry = " UPDATE our_clients SET client_status=0  WHERE id='{$client_id}' ";
    $isClient = mysqli_query($dbCon, $selectQry);

    if ( isset($isClient) ) {
        $message = "Client deleted";
    }else{
        $message = "Client not deleted";
    }

    header("Location: clientsList.php?msg={$message}");