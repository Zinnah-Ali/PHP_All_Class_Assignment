<?php

// Question 01
echo "<h2>Question 01</h2>";
// Thih is a index arry
$numbers = [12,34,2,6,78,11,9,7];

foreach ($numbers as $key => $number) {
    //Prime Number 2 Showing Condition
    if ($number == 2) {
        echo $number."<br>";
     }

     //Prime Number check condition 
    if ($number % 2 == 0) {
        if ($number % 3 == 0) {
            if ($number % 5 == 0) {
              if ($number % 7 == 0) {
                  break;
              }
            }
        }
    }else{
        echo $number."<br>";
    }
}






// Question 02
echo "<h2>Question 02</h2>";

//This is a Multidimensional array
$ptArray = array(
    array("Product Title", "Product Description", "Product photo", "price", "quantity"), //This is a just product labale Array

    //This is a Priduct Data  
    array("realme 9i Title", "realme 9i Description", "realme 9i photo", 19000, 10),
    array("Realme 8 Title", "realme 8 Description", "realme 8 photo", 22000, 20),
    array("realme 7i Title", "realme 7i Description", "realme 7i photo", 18500, 10),
    array("Sumsung j7 Title", "Sumsung j7 Description", "Sumsung j7 photo", 14000, 22),
    array("Nokia 3 Title", "Nokia 3 Description", "Nokia 3 photo", 11000, 30)
);      
echo"<pre>";
print_r($ptArray);





// Question 03
echo "<h2>Question 03</h2>";
$numbers = array(0,10,80,67,60,89,91,56,45,30,95,83,99);
$initNumber = 0;
foreach ($numbers as $number) {
  if ($number > $initNumber) {
      $initNumber = $number;
  }
}
echo $initNumber;





echo "<br>";
// Question 04
echo "<h2>Question 04</h2>";
$allNumbers= array(0,10,80,67,60,89,91,56,45,30,95,83,99);


foreach ($allNumbers as $key => $allNumber) {
    if($key % 2 ==0 ){
       continue;
    }else{
        echo $allNumber."<br>";
    }
    
}


