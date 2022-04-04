<?php
//Subject Name
$subjectA_mark = 120;
$subjectB_mark = 80;
$subjectC_mark = 90;
$subjectD_mark = 90;



//Totale Subject Marks
$totaleMark = $subjectA_mark + $subjectB_mark + $subjectC_mark + $subjectD_mark;

//Avarage Totale Marks
$avarageMark = $totaleMark / 4;

//Genarte Resoult Condition

//Not Found Releted Condition
if($subjectA_mark < 40 || $subjectB_mark < 40 || $subjectC_mark < 40 || $subjectD_mark < 40){
    echo "Your Resoult is F";
}elseif($subjectA_mark > 100 || $subjectB_mark > 100 || $subjectC_mark > 100 || $subjectD_mark > 100){
    echo "Your Resoult is Not Found";
}
//Conditional resoult
elseif($avarageMark >= 80 && $avarageMark <= 100){
    echo "Your Resoults is A+";
}elseif($avarageMark < 80 && $avarageMark >=70){
    echo "Your Resoult is A";
}elseif($avarageMark < 70 && $avarageMark >=60){
    echo "Your Resoult is A-";
}elseif($avarageMark < 60 && $avarageMark >=50){
    echo "Your Resoult is B";
}elseif($avarageMark < 50 && $avarageMark >=40){
    echo "Your Resoult is C";
}elseif($avarageMark < 40 ){
    echo "Your Resoult is F";
}else{
    echo "Your Resoult is Not Found";
}



echo "<br>";
echo "<br>";

/**
 * 
 * Bike Simplae Game Coding Start
 * 
*/


//Bike Name 
$suzuki_bike = "gear2";

//Switch Condition
switch ($suzuki_bike) {
    case 'start':
        echo " Bike is Start";
        break;
    case 'stop';    
        echo 'Bike is Stop';
        break;
    case 'break':
        echo 'Bike is Break';
        break;    
    case 'gear1':
        echo 'Bike Speed is Fast Bike Gear Number 1';
        break;    
    case 'gear2':
        echo 'Bike Speed is Fast Bike Gear Number 2';
        break;    
    case 'gear3':
        echo 'Bike Speed is Fast Bike Gear Number 3';
        break;      
    case 'signal right':
        echo 'Bike Right Signal Light is ON';
        break;    
    case 'signal left':
        echo 'Bike Left Signal Light is ON';
        break;    
    case 'headlight':
        echo 'Bike Head Light is ON';
        break;    
    
    default:
        echo "You don't have the key to the Bike"; 
        break;
}