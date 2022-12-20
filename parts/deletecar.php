<?php
// Include database connection file
include("../inc/conection.php");

// Retrieve [id] value from querystring parameter
$idCars = $_GET['idCars'];

// Delete row for a specified [id]
$stmt = $pdo->prepare("DELETE FROM cars WHERE idCars = ?");
$stmt->execute([$idCars]);

// Redirect to home page (index.php)
header("Location:./MyCars.php");
?>