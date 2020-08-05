<?php
session_start();
include '../../config.php';
include '../function.php';
activityLog(urlTrack());
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
                                        <small>Padi Mall Administrator Panel</small>
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
                        <div class="col-sm-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h5>Add Product</h5>
                                </div> -->
                                <div class="card-body table-responsive">
                                    <table class="mb-0 table table-hover responsive" id="dataProduct">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Toko</th>
                                                <th>Kode Produk</th>
                                                <th>KBLI</th>
                                                <th>Kategori</th>
                                                <th>Nama</th>
                                                <th class="text-center">Harga</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = "SELECT A.id, A.category, A.name, A.price, A.kbli, A.code, B.nama_toko FROM product A, supplier B WHERE A.supplier_id = B.id AND A.status=1 ORDER BY A.id DESC";
                                            $result = $pdo->query($query);

                                            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                                <tr>
                                                    <td class="text-center"><?= $no++ ?></td>
                                                    <td><?= $row['nama_toko'] ?></td>
                                                    <td><?= $row['code'] ?></td>
                                                    <td><?= $row['kbli'] ?></td>
                                                    <td><?= $row['category'] ?></td>
                                                    <td><?= $row['name'] ?></td>
                                                    <td class="text-right"><?= rupiah($row['price']) ?></td>
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
            $('#dataProduct').DataTable({
                responsive: true
            });
        });
    </script>

</body>

</html>