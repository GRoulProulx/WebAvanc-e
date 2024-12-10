<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("classes/CRUD.php");

$crud = new CRUD;
$delete = $crud->delete('renter', $_POST['id']);
if($delete){
    header("location:renter-index.php");
}else{
    echo "Error, something went wrong.";
}
