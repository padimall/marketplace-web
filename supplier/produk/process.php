<?php
include '../../config.php';
include '../function.php';
session_start();
if (isset($_POST['addProduct'])) {
    $supplier_id = decodeURL($_SESSION['supplierID']);
    $nama_produk = htmlentities($_POST['nama_produk']);
    $harga_produk = htmlentities(preg_replace("/\D/", "", $_POST['harga_produk']));
    $kbli_produk = htmlentities($_POST['kbli_produk']);

    $gambar_produk = $_FILES['gambarProduk']['name'];
    $lokasi_gambar_produk = $_FILES['gambarProduk']['tmp_name'];
    $ukuran = $_FILES['gambarProduk']['size'];

    $code = dateNow();
    $category = htmlentities($_POST['category']);
    $description = ($_POST['deskripsi_produk']);

    //masukkan detail product
    $query = "INSERT INTO product (supplier_id, kbli, code, category, name, price, description) VALUES (:supplier_id, :kbli, :code, :category, :name, :price, :description)";
    $sql = $pdo->prepare($query);
    $sql->bindParam(':supplier_id', $supplier_id);
    $sql->bindParam(':kbli', $kbli_produk);
    $sql->bindParam(':code', $code);
    $sql->bindParam(':category', $category);
    $sql->bindParam(':name', $nama_produk);
    $sql->bindParam(':price', $harga_produk);
    $sql->bindParam(':description', $description);
    if ($sql->execute()) {
        for ($i = 0; $i < sizeof($gambar_produk); $i++) {
            if ($gambar_produk[$i] != '') {
                //cek apakah ekstensi gambar sudah sesuai atau tidak
                $x = explode('.', $gambar_produk[$i]);
                $ekstensi = strtolower(end($x));
                $gambar_produk[$i] = dateNow() . cleanString($gambar_produk[$i]);
                $folder = "../assets/produk/" . $gambar_produk[$i];
                $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');

                if (in_array($ekstensi, $ekstensi_diperbolehkan) == true) {
                    if ($ukuran[$i] < 1044070) {
                        if (move_uploaded_file($lokasi_gambar_produk[$i], "$folder")) {
                            $query = "INSERT INTO product_image (product_code, image) VALUES ('$code', '$gambar_produk[$i]')";
                            $sql = $pdo->prepare($query);
                            $sql->execute();
                        }
                    } else {
                        // ukuran gambar yang di upload kebesaran;
                    }
                } else {
                    // ekstensi gambar yang di unggah tidak sesuai
                }
            }
        }

        redirect("../produk");
    } else {
        //gagal menjalankan query
    }
}
