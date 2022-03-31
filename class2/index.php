<?php

/**
 * 
 * 
 * This is a Demo Assaingment like Photo
 * 
 * 
 */
//me name varibale
$name= "Zinnah Ali"; //Data type is String;
$age = 16.5; // Data Type is float or double;
$web_design = true; //Data type is Boolian;
$class = 10; //number or integer;

//you name varibale
$youName = "Shubuj"; //String;
$youAge = 16.6; //Duuble or float;

//Print uses echo 
echo "
    <h4>Case Study</h4>
    <h3>Let's introduce your self</h3>
    <p>Me: I am $name, I am $age years old,</p>
    <p>You: I am $youName, I am also $youAge yeasr old, Do you know web design technology?</p>
    <p>Me: Yeas, I know web design technology, what class do you reed in?</p>
    <p>You: I reed in class $class</p>
    <p>Me: I am also</p>
    ";




/**
 * 
 * Crate Assaignment Product Form Data
 * 
 */
 $product_Name = "This is The best HP Monitore Product"; // Data Type String;
 $product_price = 8000; //Data type integer or number;
 $product_qnt = 10; // Data Type integer or Number;
 $product_disply_size = 15.6; //Data Type Double or Float;
 $product_about = "I have three old hp monitors, not new. I want to sell it on my own website. That’s why I should create a product upload form on my website, then upload my product with specification and available quantity. My monitors have a 15.6 inch display. My monitor’s VGA cable status, yes, I will sell it for 8000 tk.
 For creating a product upload form what specifications will be uploaded and what will be their data types?"; //String
 $product_availavel = true; // Data type is Boolian;



// Print uses echo 
if($product_availavel){
echo 
"
Product Tile: <h1>$product_Name</h1>
Product Price : <span>$product_price</span><br>
Product Quantity : <span>$product_qnt</span><br>
Product Disply Size : <span>$product_disply_size</span> <br> <br>
Product About: $product_about
";
}