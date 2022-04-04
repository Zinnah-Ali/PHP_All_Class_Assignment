<?php
$productName = ['apple', 'orange', 'banana', 'mango', 'Alu', 'Potol', 'lau', 'kumra'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Just Showing Runing month Date</title>
    <!-- Bootstrap CDN Link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="tabale-area">
      <div class="container">
        <div class="row pt-5">
          <div class="col-lg-4"></div>
          <div class="col-lg-4 tb mt-5">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Product Name</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                  foreach ($productName as $key => $product) {
                  ?>

                  <tr>
                    <th scope="row"><?= $key+1 ; ?></th>
                    <td><?=$product; ?></td>
                  </tr>

                  <?php
                    }
                  ?>
              </tbody>
            </table>
          </div>
          <div class="col-lg-4"></div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
