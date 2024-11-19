<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* if(!isset($_GET["id"]) || $_GET["id"]==null){
    header('location:renter-index.php');
    exit;
} */
require_once("classes/CRUD.php");

$crud = new CRUD;
$selectId = $crud->selectId('renter', $_GET["id"]);

if($selectId){
    extract($selectId); 
}else{
    header('location:renter-index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Renter</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Renter</h2>
        <form action="renter-update.php" method="post">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <label>Name
                <input type="text" name="name" value="<?= $name;?>">
            </label>
            <label>Address
                <input type="text" name="address"  value="<?= $address;?>">
            </label>
            <label>Phone
                <input type="text" name="city"  value="<?= $city;?>" >
            </label>
            <label>Zip Code
                <input type="text" name="zipcode"  value="<?= $zipcode;?>">
            </label>
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
</body>
</html>