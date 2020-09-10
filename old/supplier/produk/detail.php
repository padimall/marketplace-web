<?php
session_start();
include '../../config.php';
include '../function.php';
sessionSupplier();
activityLog(urlTrack());
$supplierID = decodeURL($_SESSION['supplierID']);
$productCode = decodeURL($_GET['product']);
?>
<!DOCTYPE html>
<html lang="en">

<?php include '../template/head.php' ?>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        <?php include '../template/header.php' ?>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include '../template/sidebar.php' ?>
            <!-- Page Sidebar Ends-->

            <div class="page-body">

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Detail Produk
                                        <small>Padi Mall Supplier Panel</small>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="card">
                        <div class="row product-page-main card-body">
                            <div class="col-xl-4">
                                <div class="product-slider owl-carousel owl-theme" id="sync1">
                                    <?php
                                    $query = "SELECT * FROM product_image WHERE product_code = '$productCode'";
                                    $result = $pdo->query($query);
                                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <div class="item">
                                            <img src="../assets/produk/<?= $row['image'] ?>" alt="" class="blur-up lazyloaded">
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="owl-carousel owl-theme" id="sync2">
                                    <?php
                                    $result = $pdo->query($query);
                                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <div class="item"><img src="../assets/produk/<?= $row['image'] ?>" alt="" class="blur-up lazyloaded"></div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php
                            $query = "SELECT * FROM product WHERE code = '$productCode'";
                            $sql = $pdo->prepare($query);
                            $sql->execute();
                            $data = $sql->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <div class="col-xl-8">
                                <div class="product-page-details product-right mb-0">
                                    <h2><?= $data['name'] ?></h2>
                                    <hr>
                                    <h6 class="product-title">Deskripsi</h6>
                                    <p><?= $data['description'] ?></p>
                                    <!-- <div class="product-price digits mt-4">
                                        <h3><?= rupiah($data['price']) ?></h3>
                                    </div> -->
                                    <hr>

                                    <div class="m-t-15">
                                        <a class="btn btn-primary m-r-10 text-white disabled" href="update?product=<?= encodeURL($productCode) ?>">Perbaharui Data Produk</a>
                                        <a class="btn btn-danger text-white disabled" href="">Hapus Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

            </div>

            <!-- footer start-->
            <?php include '../template/footer.php' ?>
            <!-- footer end-->
        </div>

    </div>

    <?php include '../template/script.php' ?>

</body>

</html>