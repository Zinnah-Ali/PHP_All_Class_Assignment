<?php
// db Include
require('dbConfig.php');

// Clients Insert Code
if (isset($_POST['add_client'])) {

    $client_img = $_FILES['client_img'];
    $uploadStatus = false;

    if (isset($client_img)) {

        $img_name     = $client_img['name'];
        $img_type     = $client_img['type'];
        $img_tmp_name = $client_img['tmp_name'];
        $img_size     = $client_img['size'];
        
        // Extantion Validation
        $nameExtArr   = explode('.', $img_name);
        $imgExtantion = strtolower(end($nameExtArr));
        $validExtArr  = array('jpg', 'png', 'jpeg');
        $inExtantion  = in_array($imgExtantion, $validExtArr);
        $randomImgName= time().'.'.$imgExtantion;
        if (isset($inExtantion)) {
            $uploadImg = move_uploaded_file($img_tmp_name, "../uploads/clientsImg/".$randomImgName);
            $uploadStatus = true;
        }else{
            $message = $imgExtantion." File is not Valide";
        }
      
    }

    $client_name = $_POST['client_name'];
    // $client_img = $_POST['client_img'];
    $client_review = $_POST['client_review'];

    if ( $client_name == "" || $client_review == "" || $uploadStatus = false ) {
        $message = "All Field is Requerd";
    }else{
        $clientsInsertQry = " INSERT INTO our_clients ( client_name , client_img , client_review ) VALUES ( '{$client_name}', '{$randomImgName}', '{$client_review}' )";
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

          //Show Old Image
          $client_id = $_GET['client_id'];
          $updateSelectQry = "SELECT * FROM our_clients WHERE id = '{$client_id}'";
          $updateClientList = mysqli_query($dbCon, $updateSelectQry);
          $oldImg = "";
          foreach ($updateClientList as $key => $client) {
              $oldImg = $client['client_img'];
          }
      
          //Update Upload Code 
          $client_img = $_FILES['client_img'];
          $uploadStatus = false;
          if (isset($client_img)) {
              $img_name     = $client_img['name'];
              $img_type     = $client_img['type'];
              $img_tmp_name = $client_img['tmp_name'];
              $img_size     = $client_img['size'];
              
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
                  $uploadImg = move_uploaded_file($img_tmp_name, "../uploads/clientsImg/".$randomImgName);
                  $uploadStatus = true;
                 
              }else{
                $randomImgName = $oldImg;
                $message = $imgExtantion." File is not Valide";
              }
            
          }

    $client_id = $_GET['client_id'];
    $client_name = $_POST['client_name'];
    // $client_img = $_POST['client_img'];
    $client_review = $_POST['client_review'];

    if ( $client_name == "" || $client_review == "" || $uploadStatus = false ) {
        $message = "All Field is Requerd";
    }else{
        $clientsUpdateQry = " UPDATE our_clients SET client_name='{$client_name}', client_img= '{$randomImgName}', client_review='{$client_review}'  WHERE id='{$client_id}' ";
        $clientsUpdate = mysqli_query($dbCon, $clientsUpdateQry);

        if (isset($clientsUpdate)) {
            $message = " Client Review Update";
        }else{
            $message = "review not update";
        }
    }

    header("Location: ../our_clients/clientsListUpdate.php?client_id={$client_id}&msg={$message}");

}