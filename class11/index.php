<?php

/**
 * 
 * Validtion message Function
 * 
 */

 function valideMessage( $message, $color = "danger" ){
    $messageDiv =  "<div class='alert alert-{$color} d-flex justify-content-between'> {$message} <button class='btn' id='close'>X</button> </div>";

    return $messageDiv;
 }


/**
 * Email Validation function
 * 
 */

 function valideEmail( $email ){
     if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        return true;
     }else{
         return false;
     }
 }

 /**
  *Edumail Validatiln function 
  * 
  */

 function valideEduMail( $email ){
    $valideEdumail = ['edu.shorobindu', 'diu.edu.bd', 'brak.edu.bd'];
    $eduEmailArr = explode( '@', $email, 2 );

    if ( in_array( $eduEmailArr[1], $valideEdumail ) ) {
        return true;
    }else{
        return false;
    }

 }

 /**
  * 
  * User Name Function
  */

  function valideUsername( $userName ){

    if ( preg_match( '/^[0-9A-Za-z_]{5,20}$/', $userName ) ) {
        return true;
    }else{
        return false;
    }
  }


  /***
   * 
   * Value Set Function 
   * 
   */

   function oldValue( $value ){
       
    if ( isset( $_POST[$value] ) ) {
        echo $_POST[$value]; 
    } 
   }


   /***
    * Show Message Function 
    *
    */

    function shoMessage( $message ){
        if ( isset( $message ) ) { 
            echo $message; 
        }
    }

if (isset( $_POST['submit'] )) {
    
    //All Filed Selected
    $name = $_POST['name'];
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $cuntry = $_POST['cuntry'];
    $gender = '';
    $agree = '';

    if ( isset( $_POST['radio'] ) ) {
       $gender = $_POST['radio'];
    }
    if( isset( $_POST['agree'] ) ){
        $agree = $_POST['agree'];
    }
    

    // Validate condition just multipole requerd message 
    if ( $name == '') {
        $nameMessage = valideMessage('Please Type Your Name');
    }
    if( $email == '' ){
        $emailMessage = valideMessage('Please Type Your Email');
    }
    if( $phone == '' ){
        $phoneMessage = valideMessage('Please type your Phone Number');
    }
    if( $age == '' ){
        $ageMessage = valideMessage('Please type your age');
    }
    if( $userName == '' ){
        $userNameMessage = valideMessage('Please type your User Name');
    }
    if( $cuntry == 'Select Your Cuntry'    ){
        $cuntryMessage = valideMessage('Please Select Your Cuntry');
    }
    if( empty($gender) ){
        $genderMessage = valideMessage('please select your gender');
    }
    
    // Validate Condtion
    elseif( valideEmail( $email ) == false ){
        $emailMessage = valideMessage('Your Email is not valide');
    }elseif( valideEduMail( $email ) == false ){
        $emailMessage = valideMessage( 'Your Email is not Edu Mail' );
    }elseif( $age < 18 || $age > 60 ){
        $ageMessage = valideMessage( 'Your Age is not correct');
    }elseif( valideUsername( $userName ) == false ){
        $userNameMessage = valideMessage( 'User Name is not Vailde');
    }elseif( empty( $agree ) ){
        $allMessage = valideMessage('please agree terms and conditions');
    }
    else{
        $allMessage = valideMessage('Succes all data sumited', 'info');

        //Succes after clear all field
        $_POST = "";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Ragistartion Form </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
  
  <div class="container">
      <div class="row">
          <div class="col-md-6 offset-md-3 mt-5" >
            <div class="card">
                <div class="card-header">
                    <h2>Ragistration</h2>
                </div>
                <div class="card-body">
                    <?php
                        if ( isset( $allMessage ) ) { echo $allMessage; }
                    ?>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" value = "<?php oldValue('name'); ?>">
                        </div>
                        <?php
                            if ( isset( $nameMessage ) ) { echo $nameMessage; }
                        ?>
                        <div class="mb-3">
                            <label for="name">Username</label>
                            <input type="text" name="username" id="name" class="form-control" placeholder="User Name" value = "<?php oldValue('username'); ?>">
                        </div>
                        <?php
                            if ( isset( $userNameMessage ) ) { echo $userNameMessage; }
                        ?>
                        <div class="mb-3">
                            <label for="email">Your Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" value = "<?php oldValue('email') ?>">
                        </div>
                        <?php
                            if ( isset( $emailMessage ) ) { echo $emailMessage; }
                        ?>
                        <div class="mb-3">
                            <label for="phone">Your Phone</label>
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Your Phone Number" value = "<?php oldValue('phone') ?>">
                        </div>
                        <?php
                            if ( isset( $phoneMessage ) ) { echo $phoneMessage; }
                        ?>
                        <div class="mb-3">
                            <label for="age">Your Age</label>
                            <input type="text" name="age" id="age" class="form-control" placeholder="Your Age" value = "<?php oldValue('age') ?>">
                        </div>
                        <?php
                            if ( isset( $ageMessage ) ) { echo $ageMessage; }
                        ?>

                        <select class="form-select my-3" aria-label="Default select example" name="cuntry" value="<?php oldValue('cuntry'); ?>">
                            <option selected>Select Your Cuntry</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="India">India</option>
                            <option value="israil">Israil</option>
                        </select>
                        <?php
                            if ( isset( $cuntryMessage ) ) { echo $cuntryMessage; }
                        ?>
                        <label for="">Your Gander</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" value="Male" id="radio1" ">
                            <label class="form-check-label" for="radio1">  Male  </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" value="Female" id="radio2" >
                            <label class="form-check-label" for="radio2"> Female</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" value="Others" id="radio2">
                            <label class="form-check-label" for="radio2">Others</label>
                        </div>
                        <?php
                            if ( isset( $genderMessage ) ) { echo $genderMessage; }
                        ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="yes" id="agree" name="agree">
                            <label class="form-check-label" for="agree"> Accept Condition </label>
                        </div>                      

                        <div class="mb-3">
                            <input type="submit" name="submit" class="btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
          </div>
      </div>
  </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        document.getElementById('close').style.display="none";
    </script>
  </body>
</html>