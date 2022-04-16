<?php


// Question 01
echo "<h2>Question 01</h2>";

// Buy Product List Array 
$buyProduct = array(
    array('name' => 'banana',  'qty' => 10,   'totalPrice' => 550),
    array('name' => 'apple',   'qty' => 50,   'totalPrice' => 1500),
    array('name' => 'orange',  'qty' => 7,    'totalPrice' => 600),
);
   
//Array sum 
$arrSumQty = array_sum(array_column($buyProduct, 'qty', 'name'));
$arrSumTotalPrice = array_sum(array_column($buyProduct, 'totalPrice', 'name'));

//print resoult
echo "Your Product Quantity ".$arrSumQty. " Your Totale Price ".$arrSumTotalPrice;



// Question 02
echo "<h2>Question 02</h2>";

// Main Email Array 
$firstEmail = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
$secondEmail = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

//Merge Array 
$mergeEmail = array_merge($firstEmail, $secondEmail);

//Unique Array 
$uniqueMergeEmail = array_unique($mergeEmail);

echo "<pre>";
print_r($uniqueMergeEmail);




// Question 03
echo "<h2>Question 03</h2>";

//City Array list 
$citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );
$chunkArray=array_chunk($citylist, 4);

echo "<pre>";
print_r($chunkArray);




