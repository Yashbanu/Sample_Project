<?php
session_start();

// Retrieve form data from session variables
$id = $_SESSION['id'];
$name = $_SESSION['name'];
$cat = $_SESSION['cat'];
$price = $_SESSION['price'];
$qt = $_SESSION['qt'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="ss">
        <h1>THE DETAILS ARE:</h1>
        <p>ID: <?php echo $id; ?></p>
        <p>Name: <?php echo $name; ?></p>
        <p>Category: <?php echo $cat; ?></p>
        <p>Price: <?php echo $price; ?></p>
        <p>Quantity: <?php echo $qt; ?></p>
    </div>
</body>
</html>
