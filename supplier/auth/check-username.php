<?php
include '../../config.php';
include '../function.php';

if (isset($_POST['username']) && $_POST['username'] != '') {
    $response = array();
    $username = $_POST['username'];

    $query = "SELECT COUNT(username) AS status FROM supplier WHERE BINARY username=:username";
    $result = $pdo->prepare($query);
    $result->bindParam(':username', $username);
    $result->execute();
    $username = $result->fetch(PDO::FETCH_ASSOC);
    echo json_encode($username['status']);
}
