<?php
// db Include
require('dbConfig.php');

// Clients Insert Code
if (isset($_POST['add_client'])) {
    $client_name = $_POST['client_name'];
    $client_img = $_POST['client_img'];
    $client_review = $_POST['client_review'];

    if ( $client_name == "" || $client_img == "" || $client_review == "" ) {
        $message = "All Field is Requerd";
    }else{
        $clientsInsertQry = " INSERT INTO our_clients ( client_name, client_img, client_review) VALUES ( '{$client_name}', '{$client_img}', '{$client_review}' )";
        $clientsAdd = mysqli_query($dbCon, $clientsInsertQry);

        if (isset($clientsAdd)) {
            $message = " Client Reveiw Added";
        }else{
            $message = "review not added";
        }
    }
    header("Location: ../our_clients/clientsList.php?msg={$message}");
}

// Client Update Code
if (isset($_POST['update_client'])) {
    $client_id = $_GET['client_id'];
    $client_name = $_POST['client_name'];
    $client_img = $_POST['client_img'];
    $client_review = $_POST['client_review'];

    if ( $client_name == "" || $client_img == "" || $client_review == "" ) {
        $message = "All Field is Requerd";
    }else{
        $clientsUpdateQry = " UPDATE our_clients SET client_name='{$client_name}', client_img= '{$client_img}', client_review='{$client_review}'  WHERE id='{$client_id}' ";
        $clientsUpdate = mysqli_query($dbCon, $clientsUpdateQry);

        if (isset($clientsUpdate)) {
            $message = " Client Review Update";
        }else{
            $message = "review not update";
        }
    }

    header("Location: ../our_clients/clientsListUpdate.php?client_id={$client_id}&msg={$message}");

}