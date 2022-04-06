<?php
    //Show the Date of this month using for loop
	$month = 4;
	$years = 2022;
    $allMontDate = cal_days_in_month(CAL_GREGORIAN, $month, $years);
    $startDate = 1;
    
    for ($i=$startDate; $i <=$allMontDate; $i++) { 
       echo $i. "<br>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just Showing Runing month Date</title>
    <!-- Bootstrap CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="select-form-date pt-5">
       <div class="container">
           <div class="row">
               <div class="col-lg-4"></div>
               <div class="col-lg-4">
               <form action="" class="form-control mt-5">
                    <h4>Select Now Month Date</h4>
                        <select name="" id="" class="form-select">
                            <?php
                            //Show the date of this month DropDown Select Option. uses for loop and foreach loop or array
                            for($x=$startDate; $x <= $allMontDate; $x++){
                                $dateArry= array($x);

                                foreach($dateArry as $data){
                            ?>
                                <option value=""><?= $data;?></option>
                            <?php 
                                } } 
                            ?>
                        </select>
                </form>
               </div>
               <div class="col-lg-4"></div>
           </div>
       </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>