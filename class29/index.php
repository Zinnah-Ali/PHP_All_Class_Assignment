<?php

require_once "./CrudController.php";

$crudControllObj = new CrudController();


$formData['name'] = 'Raihan Ali Khan';
$formData['email'] = 'Raihan@gmail.com';
$formData['password'] = '123456';

//Object Uses
// echo $crudControllObj->select('users');
// echo $crudControllObj->create('users', $formData);
// echo $crudControllObj->update('users', $formData, 'email="zinnah@gmail.com"');
// echo $crudControllObj->delete('users', "id = 1");
