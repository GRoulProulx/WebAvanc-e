<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_GET["id"]) || $_GET["id"]==null){
    header('location:renter-index.php');
    exit;
}
require_once("classes/CRUD.php");

$crud = new CRUD;
$selectId = $crud->selectId('renter', $_GET["id"]);
if($selectId){
  /*  foreach($selectId as $key=>$value){
    $$key = $value;
   } */
    extract($selectId);

    $location = $crud->selectId("locationplace", $locationtypeid);
    $locationType = $location['typename'];
}else{
    header('location:renter-index.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renter Show</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Renter</h1>
        <p><strong>Name : </strong><?= $name;?></p>
        <p><strong>Address : </strong><?= $address;?></p>
        <p><strong>City : </strong><?= $city;?></p>
        <p><strong>Zip Code : </strong><?= $zipcode;?></p>
        <p><strong>Location : </strong> <?= $locationType;?> </p>
        <div>
            <a href="renter-edit.php?id=<?= $id;?>" class="btn">Edit</a>
            <form action="renter-delete.php" method="post">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <button type="submit" class="btn delete" >Delete</button>
        </div>
        </form>
    </div>
</body>
</html>