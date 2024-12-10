<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('classes/CRUD.php');

$crud = new CRUD;

$select = $crud->select('renter', 'name', 'DESC');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renters</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Renters</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>City</th>
                <th>Zipcode</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($select  as $row) {
            ?>
            <tr>
                <td><a href="renter-show.php?id=<?= $row['id'];?>"><?= $row['name'] ?></a></td>
                <td><?= $row['address'] ?></td>
                <td><?= $row['city'] ?></td>
                <td><?= $row['zipcode'] ?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <a href="renter-create.php" class="btn">New Renter</a>
</body>
</html>