<?php
require('../controller/dbConfig.php');
$services_id = $_GET['services_id'];
$selectQry = "UPDATE services SET services_status =0 WHERE id = $services_id";
$servicesStatus = mysqli_query($dbCon, $selectQry);

if( isset($servicesStatus) ){
    $message = "Your Service Delete";
}else{
    $message = "Your Service not delete";
}
header("Location: servicesList.php?msg={$message}");