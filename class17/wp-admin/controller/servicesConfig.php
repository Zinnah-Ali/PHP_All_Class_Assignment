<?php
// Include dbCon
require('../controller/dbConfig.php');

// Insert Code
    if ( isset( $_POST['add_services'] ) ) {
        $services_name = $_POST['services_name'];
        $services_details = $_POST['services_details'];
        $services_icon = $_POST['services_icon'];

        if ( $services_name == '' || $services_details == '' || $services_icon == '' ) {
            $message = "All Fiels is Requerd";
            header("Location: ../services/servicesListAdd.php?msg={$message}");
        }else{
            $insertServicesQry = "INSERT INTO services (services_name, services_details, services_icon) VALUES ('{$services_name}','{$services_details}', '{$services_icon}')";
            $servicesSubmit = mysqli_query($dbCon, $insertServicesQry);

            if ( isset( $servicesSubmit ) ) {
                $message = "Your Services Added";
                header("Location: ../services/servicesList.php?msg={$message}");
            }else{
                $message = "Not Submited";
                header("Location: ../services/servicesList.php?msg={$message}");
            }
        }
       
    }



// Update Code 
if ( isset( $_POST['update_services'] ) ) {
    $services_id = $_GET['services_id'];
    $services_name = $_POST['services_name'];
    $services_details = $_POST['services_details'];
    $services_icon = $_POST['services_icon'];

    if ($services_name == '' || $services_details == '' || $services_icon = '') {
       echo "All Fild is requerd";
    }else{
       $updateServiceQry = " UPDATE services SET services_name = '{$services_name}', services_details = '{$services_details}', services_icon = '{$services_icon}' WHERE id = '{$services_id}'";
        
       $updateService = mysqli_query($dbCon, $updateServiceQry);

       if ( isset($updateService) ) {
        echo "Update Done";
       }else{
        echo "not update";
       }
    }
}













