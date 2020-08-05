<?php
include '../../config.php';
include '../function.php';

if (isset($_POST['addProduct'])) {
    $nama_produk = htmlentities($_POST['nama_produk']);
    $harga_produk = htmlentities(preg_replace("/\D/", "", $_POST['harga_produk']));
    $kbli_produk = htmlentities($_POST['kbli_produk']);

    $gambar_produk = $_FILES['gambarProduk']['name'];
    $lokasi_gambar_produk = $_FILES['gambarProduk']['tmp_name'];
    $ukuran = $_FILES['gambarProduk']['size'];

    for ($i = 0; $i < sizeof($gambar_produk); $i++) {
        if ($gambar_produk[$i] != '') {
            //cek apakah ekstensi gambar sudah sesuai atau tidak
            $x = explode('.', $gambar_produk[$i]);
            $ekstensi = strtolower(end($x));
            $folder = "../assets/produk/" . cleanString($gambar_produk[$i]);
            $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');

            if (in_array($ekstensi, $ekstensi_diperbolehkan) == true) {
                if ($ukuran[$i] < 1044070) {
                    if (move_uploaded_file($lokasi_gambar_produk[$i], "$folder")) {
                        echo "sukses";
                    }
                } else {
                    echo "kebesaran";
                }
            } else {
                echo 23;
            }
        }
    }
}
