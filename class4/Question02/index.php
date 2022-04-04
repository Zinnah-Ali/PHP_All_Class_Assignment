<?php
echo "<h2>Show the 1- 100 nuberr but just Print odd number uses for loop</h1>";
//Show the 1- 100 nuberr but just Print odd number uses for loop

for ($i=1; $i <= 100; $i++) { 
    if ($i % 2 == 1) {
        echo $i.  "<br>";
    }
}


echo "<h2>Show the 1- 100 nuberr but just Print odd number uses While loop</h2>";
//Show the 1- 100 nuberr but just Print odd number uses While loop
$a= 1;

while ($a <= 100) {
    if ($a % 2 == 1) {
        echo $a . "<br>";
    }
    $a++;
}

echo "<h2>Show the 1- 100 nuberr but just Print odd number uses Do While loop</h2>";
//Show the 1- 100 nuberr but just Print odd number uses Do While loop
$d= 1;

do{
   if($d % 2 == 1){
        echo $d. "<br>";
   }
   $d++;
}while($d<=100);

//Forech Loop is condition not possibale becouse forech jut array dependent 

echo "<h2>Forech Loop this condition  may be not possibale becouse forech jut array dependent </h2>";