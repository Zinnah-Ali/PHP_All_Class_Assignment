<?php

//Question 01
function yourAge( $age ){

    if ( $age > 0 && $age < 18 ) {
        return "Your age " . $age . " Years old You are children";
    }elseif( $age >= 18 && $age < 30){
        return "Your age " . $age . " Years old You are teenagers";
    }elseif( $age >= 30 && $age < 40 ){
        return "Your age " . $age . " Years old You are young Pepule";
    }elseif ( $age >= 40) {
        return "Your age " . $age ." Years old You are Old Man";
    }

}

echo yourAge( 35 );

echo "<br>";
echo "<br>";
//Question 02
function areaCal( $type, $length = 0, $width = 0 ){
    if( $type == 'r' ){
        $rectangle = $length * $length; 
        return "Rectangle " . $rectangle;
    }elseif( $type == 's' ){
        $square = $length * $length;
        return "Square " . $square;
    }elseif( $type == 't' ){
       $triangle = .5 * $length * $width;
       return "Triangle " . $triangle;
    }
}

echo areaCal( 'r', 12);

echo "<br>";
echo "<br>";
//Question 03
//GPA System 
function gpa($bn = 80, $en = 80, $mh = 80){
    $bangla = $bn;
    $english  = $en;
    $match = $mh;

    $totalMark = $bangla + $english + $match;
    $avarageMark = $totalMark / 3;

    if ( $bangla <= 30 || $english <= 30 || $match <= 30 ) {
        return "Your Resoult is Faild ";
    }elseif($bangla > 100 || $english > 100 || $match > 100){
        return "Your Resoult is Not Found";
    }
    //Conditional resoult
    elseif($avarageMark >= 80 && $avarageMark <= 100){
        return "Your Resoults is A+";
    }elseif($avarageMark < 80 && $avarageMark >=70){
        return "Your Resoult is A";
    }elseif($avarageMark < 70 && $avarageMark >=60){
        return "Your Resoult is A-";
    }elseif($avarageMark < 60 && $avarageMark >=50){
        return "Your Resoult is B";
    }elseif($avarageMark < 50 && $avarageMark >=40){
        return "Your Resoult is C";
    }elseif($avarageMark < 40 ){
        return "Your Resoult is F";
    }else{
        return "Your Resoult is Not Found";
    }
}

echo gpa( 60, 50, 50);


echo "<br>";
echo "<br>";
//Question 04
// Age Calculator 
function ageCal( $birthYears ){
   
    $nowYears = date('Y');
    $ageCal = $nowYears - $birthYears;
    return "Your Age " . $ageCal . " Years Old";
}

echo ageCal( 2000 );




echo "<br>";
echo "<br>";
//Question 05
// BMI Calculator 

function bmi( $kg, $height ) {
    $bmiCal = $kg / ($height*$height);
    $bmi = round( $bmiCal );

    if ( $bmi <= 18.5 ) {
        return "Your BMI " . $bmi ." Your Low Body ";
    }elseif( $bmi > 18.5 && $bmi <= 25 ){
        return "Your BMI " . $bmi . " All Right Your Body";
    }elseif( $bmi > 25 && $bmi<= 30){
        return  "Your BMI " . $bmi ." Please control Your Body";
    }elseif( $bmi > 30.0 ){
        return "Your BMI " . $bmi ." Your Body is Very Very Over Weight";
    } 
} 

echo bmi( 70, 1.67);

echo "<br>";
echo "<br>";
//Question 06
// currency converter

function currencyConverter( $type, $amount ){
 
    if ( $type == 'usd') {
        return $amount*86;
    }elseif( $type == 'pound' ){
        return $amount*111;
    }elseif( $type == 'euro' ){
        return $amount*93;
    }elseif( $type == 'cud' ){
        return $amount*68;
    }

}


echo currencyConverter( 'pound', 10 );