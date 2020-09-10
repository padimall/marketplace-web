<?php
include '../../config.php';
include '../function.php';
session_start();
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
                                    <h3>Dashboard
                                        <small>Padi Mall Supplier Panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 xl-50">
                            <div class="card o-hidden  widget-cards">
                                <div class="bg-secondary card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body"><span class="m-0">Jumlah Produk</span>
                                            <h3 class="mb-0">
                                                <span class="counter">
                                                    <?= jumlahProduct($supplierID) ?>
                                                </span>
                                            </h3>
                                        </div>
                                        <div class="icons-widgets">
                                            <i data-feather="box"></i>
                                        </div>
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