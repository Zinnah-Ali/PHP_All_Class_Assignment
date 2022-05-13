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

if (isset( $_POST['submit'] )) {
    
    //All Filed Selected
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];

    // Validate condition
    if ( $name == '' || $email == '' || $phone == '' || $age == '') {
        $message = valideMessage('ALl Fild is Requerd');
    }elseif( valideEmail( $email ) == false ){
        $message = valideMessage('Your Email is not valide');
    }elseif( valideEduMail( $email ) == false ){
        $message = valideMessage( 'Your Email is not Edu Mail' );
    }elseif( $age < 18 || $age > 60 ){
        $message = valideMessage( 'Your Age is not correct');
    }
    else{
        $message = valideMessage('Succes all data sumited', 'info');
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
                        if ( isset( $message ) ) { echo $message; }
                    ?>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">Your Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="phone">Your Phone</label>
                            <input type="tel" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="age">Your Age</label>
                            <input type="text" name="age" id="age" class="form-control">
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