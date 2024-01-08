<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['name'] = $_POST['p_name'];
    $_SESSION['cat'] = $_POST['p_cat'];
    $_SESSION['price'] = $_POST['price'];
    $_SESSION['qt'] = $_POST['p_qt'];

    header("Location: view.php");
    exit();
}
?>
