<?php
session_start();
include '../../config.php';
include '../function.php';
sessionSupplier();
activityLog(urlTrack());
$supplierID = decodeURL($_SESSION['supplierID']);
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
                                    <h3>List Produk
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
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h5>Add Product</h5>
                                </div> -->
                                <div class="card-body table-responsive">
                                    <table class="mb-0 table table-hover responsive" id="rekapPiutang">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Produk</th>
                                                <th>KBLI</th>
                                                <th>Kategori</th>
                                                <th>Nama</th>
                                                <!-- <th class="text-right">Harga</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = "SELECT * FROM product WHERE supplier_id = '$supplierID' AND status = 1 ORDER BY id DESC";
                                            $result = $pdo->query($query);

                                            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                                <tr>
                                                    <td class="text-center"><?= $no++ ?></td>
                                                    <td><?= $row['code'] ?></td>
                                                    <td><?= $row['kbli'] ?></td>
                                                    <td><?= $row['category'] ?></td>
                                                    <td><?= $row['name'] ?></td>
                                                    <!-- <td class="text-right"><?= rupiah($row['price']) ?></td> -->
                                                    <td>
                                                        <div>
                                                            <a href="detail?product=<?= encodeURL($row['code']) ?>">
                                                                <i class="fa fa-edit mr-2 font-success"></i>
                                                            </a>
                                                            <a href="">
                                                                <i class="fa fa-trash font-danger"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#rekapPiutang').DataTable({
                responsive: true
            });
        });
    </script>

</body>

</html>