<?php
if( $_POST['name'] == ''|| $_POST['email'] == '' || $_POST['phone'] == ''){ 
    $message = 'All Fild is Requerd';
    echo $message;
}else{
    echo"<pre>";
    print_r( $_POST );
}