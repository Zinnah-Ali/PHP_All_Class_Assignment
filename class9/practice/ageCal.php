<?php
    function ageCal( $ageBirth ){

        $nowYears = date('Y');
        $ageCal = $nowYears - $ageBirth;
        return $ageCal;
    }

    if( isset( $_POST['ageCalBtn'] ) ){

       $ageResult = ageCal( $_POST['ageCal'] );

    };


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Age Calculator</title>
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
                    <h2>Age Calculator</h2>
                </div>
                <div class="card-body">

                <?php
                    if ( isset( $_POST['ageCalBtn'] ) ) {  
                    
                ?>

                    <p class="alert alert-info"> Hello, <?= $_POST['yourName']; ?>, Your Age <?= $ageResult; ?> Years Old </p>

                <?php
                    }
                ?>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="name" name="yourName" placeholder="Your Name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="number" name="ageCal" placeholder="Your Birth Years" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="ageCalBtn" value="Your Age" class="btn btn-info">
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