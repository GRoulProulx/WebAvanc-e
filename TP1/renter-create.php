<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('classes/CRUD.php');

$crud = new CRUD;

$select = $crud->select('locationplace', 'typename', 'ASC');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Renter</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="renter-store.php" method="post">
            <h2>New Renter</h2>
            <label>Name
                <input type="text" name="name" required>
            </label>
            <label>Address
                <input type="text" name="address" required>
            </label>
            <label>City
                <input type="text" name="city" required>
            </label>
            <label>Zip Code
                <input type="text" name="zipcode" required>
            </label>
            <label>Location
                <select name="locationtypeid" >
                <?php
                foreach($select as $row) {
                ?>
                    <option value="<?= $row['id']; ?>"><?= $row['typename']; ?></option>
                <?php
                    }
                ?>
                </select>
            </label>
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
</body>
</html>