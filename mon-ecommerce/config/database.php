<?php



$host = "localhost";
$dbname = "ecommerce";
$user = "root";
$password = "";

$conn = new PDO(
    "mysql:host=$host;dbname=$dbname;charset=utf8",
    $user,
    $password
);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>
