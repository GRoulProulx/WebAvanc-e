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
$insert = $crud->insert('renter', $_POST);

header("location:renter-show.php?id=$insert");

print_r($crud);