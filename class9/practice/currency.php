<?php
function currencyConverter( $amount, $currency1, $currency2 ){
    
    if( $currency1 == 'USD' && $currency2 == 'BDT' ){
        $amountResoult =  $amount*86;
    }elseif( $currency1 == 'BDT' && $currency2 == 'USD' ){
        $amountResoult =  $amount/86;
    }elseif( $currency1 == 'USD' && $currency2 == 'BDT' ){

    }

    return $amountResoult;

}

// if( isset($_POST['currencyBtn'] ) ){
    
//     if ( $_POST['amount'] == '' || $_POST['currency1'] == '' || $_POST['currency2'] == '' ) {
//         echo "All Fild is Requerd";
//     }else{
//         currencyConverter( $_POST['amount'], $_POST['currency1'], $_POST['currency2'] );
//     }

// }


?>


<!doctype html>
<html lang="en">
  <head>
    <title>Currency Converter </title>
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
                    <h2>Currency Converter</h2>
                </div>
                <div class="card-body">
                    <?php

                        if ( isset($_POST['currencyBtn'] ) ) {
                    ?>
                        <p class="alert alert-info"> 
                            <?php 
                                if( isset($_POST['currencyBtn'] ) ){
    
                                    if ( $_POST['amount'] == '' || $_POST['currency1'] == '' || $_POST['currency2'] == '' ) {
                                        echo "All Fild is Requerd";
                                    }else{
                                       echo currencyConverter( $_POST['amount'], $_POST['currency1'], $_POST['currency2'] ); 
                                       echo " ";
                                       echo $_POST['currency2'];
                                    }
                                
                                }
                            
                            ?> 
                        </p>
                    <?php
                        }
                    ?>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <input type="number" name="amount" placeholder="Your USD Price" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3"> 
                                <div class="form-group">
                                    <select class="form-control" name="currency1">
                                        <option value="USD"> USD </option>
                                        <option value="BDT"> BDT </option>
                                        <option value="CAD"> CAD </option>
                                        <option value="POUND"> POUND </option>
                                        <option value="EURO"> EURO </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-1"> = </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control" name="currency2">
                                        <option value="BDT"> BDT </option>
                                        <option value="USD"> USD </option>
                                        <option value="CAD"> CAD </option>
                                        <option value="POUND"> POUND </option>
                                        <option value="EURO"> EURO </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="currencyBtn" value="Currency Coverter" class="btn btn-info">
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