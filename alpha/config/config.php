<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "web_marketplace_dev";

$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);

try {
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}