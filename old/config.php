<?php

//Local Server
$host = "localhost";
$username = "root";
$password = "";
$database = "marketplace-web";

$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);

try {
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
