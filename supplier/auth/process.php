<?php
include '../../config.php';
include '../function.php';

//register process
if (isset($_POST['btnRegister'])) {
    //secure XSS
    $username = htmlentities($_POST['username']);
    // $password = hashSHA384(htmlentities($_POST['password']));
    // $confirm_password = hashSHA384(htmlentities($_POST['confirm_password']));
    $password = hashSHA384(preg_replace('/\s+/', '', strtolower(htmlentities($_POST['password']))));
    $confirm_password = hashSHA384(preg_replace('/\s+/', '', strtolower(htmlentities($_POST['confirm_password']))));
    $nama_toko = htmlentities($_POST['nama_toko']);
    $nib = htmlentities($_POST['nib']);
    $alamat = htmlentities($_POST['alamat']);
    $email = htmlentities($_POST['email']);
    $phone = htmlentities($_POST['phone']);
    $slogan = htmlentities($_POST['slogan']);

    //check if password and confirm password match
    if ($password != $confirm_password || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($username) || empty($email) || empty($phone)) {
    } else {
        $sql = $pdo->prepare("
        INSERT INTO supplier 
        (username, password, nama_toko, nib, alamat, email, phone, slogan) 
        VALUES 
        (:username, :password, :nama_toko, :nib, :alamat, :email, :phone, :slogan)");
        $sql->bindParam(':username', $username);
        $sql->bindParam(':password', $password);
        $sql->bindParam(':nama_toko', $nama_toko);
        $sql->bindParam(':nib', $nib);
        $sql->bindParam(':alamat', $alamat);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':phone', $phone);
        $sql->bindParam(':slogan', $slogan);
        if ($sql->execute()) {
            FlashMessage::add("<div class='alert alert-warning fade show' role='alert'>Please check your input </div>");
            redirect("../auth");
        }
    }
}

//login process
if (isset($_POST['btnLogin'])) {
    $username = htmlentities($_POST['username']);
    // $password = hashSHA384(htmlentities($_POST['password']));
    $password = hashSHA384(preg_replace('/\s+/', '', strtolower(htmlentities($_POST['password']))));
    if (empty($username) || empty($password)) {
    } else {
        $sql = $pdo->prepare("SELECT * FROM supplier WHERE BINARY username=:username AND BINARY password=:password");
        $sql->bindParam(':username', $username);
        $sql->bindParam(':password', $password);
        if ($sql->execute()) {
            $data = $sql->fetch();
            if ($data > 0) {
                session_start();
                $_SESSION['supplierID'] = encodeURL($data['id']);
                $_SESSION['email'] = encodeURL($data['email']);
                $_SESSION['nama_toko'] = encodeURL($data['nama_toko']);
                $_SESSION['supplier_status'] = encodeURL('login');
                redirect('../dashboard');
            } else {
                redirect("../auth");
            }
        }
    }
}
