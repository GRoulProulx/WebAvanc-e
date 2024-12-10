<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: renter-index.php');
    exit();
}

require_once('classes/CRUD.php');

$crud = new CRUD;
$update = $crud->update('renter', $_POST);


if($update){
    header("location:renter-index.php");
}else{
    echo 'Error, something went wrong.';
}
