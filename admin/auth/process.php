<?php
include '../../config.php';
include '../function.php';

//login process
if (isset($_POST['btnLogin'])) {
    $username = htmlentities($_POST['username']);
    $password = hashSHA384(htmlentities($_POST['password']));
    if (empty($username) || empty($password)) {
    } else {
        $sql = $pdo->prepare("SELECT * FROM administrator WHERE BINARY username=:username AND BINARY password=:password");
        $sql->bindParam(':username', $username);
        $sql->bindParam(':password', $password);
        if ($sql->execute()) {
            $data = $sql->fetch();
            if ($data > 0) {
                session_start();
                $_SESSION['adminID'] = encodeURL($data['id']);
                $_SESSION['username'] = encodeURL($data['username']);
                $_SESSION['admin_status'] = encodeURL('login');
                redirect('../dashboard');
            } else {
                redirect("../auth");
            }
        }
    }
}
