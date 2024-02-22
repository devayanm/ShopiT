<?php
$con = new mysqli('localhost', 'root', '', 'ecommerce_1');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
