<?php
// Include database connection file
include("../inc/conection.php");

// Retrieve [id] value from querystring parameter
$id = $_GET['id'];

// Delete row for a specified [id]
$stmt = $pdo->prepare("DELETE FROM declarant WHERE id = ?");
$stmt->execute([$id]);

// Redirect to home page (index.php)
header("Location:./acconte.php");
?>