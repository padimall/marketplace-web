<?php
session_start();
include '../../config.php';
include '../function.php';
sessionSupplier();
activityLog(urlTrack());
?>
<!DOCTYPE html>
<html lang="en">

<?php include '../template/head.php' ?>
<style>
    #image-preview {
        display: none;
        width: 250px;
        height: 300px;
    }
</style>

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
                                    <h3>Tambah Produk
                                        <small>Padi Mall Supplier panel</small>
                                    </h3>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Physical</li>
                                    <li class="breadcrumb-item active">Add Product</li>
                                </ol>
                            </div> -->
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
                                <div class="card-body">
                                    <div class="row product-adding">
                                        <div class="col-xl-12">
                                            <form class="needs-validation add-product-form" method="POST" action="process" enctype="multipart/form-data">
                                                <div class="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-sm-4 mb-0">
                                                                    Kategori
                                                                </label>
                                                                <select class="form-control digits col-xl-8 col-sm-7" name="category">
                                                                    <option value="1">Consumer & Convenient Goods, Food</option>
                                                                    <option value="2">Agro Product</option>
                                                                    <option value="3">Fashion Product</option>
                                                                    <option value="4">Mesin-mesin UKM</option>
                                                                    <option value="5">Kerjaninan Tangan</option>
                                                                    <option value="6">Produk Rumah Tangga dan Dekorasi</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-sm-4 mb-0">
                                                                    Nama
                                                                </label>
                                                                <input class="form-control col-xl-8 col-sm-7" type="text" name="nama_produk" required="">
                                                            </div>
                                                            <input class="form-control col-xl-8 col-sm-7" name="harga_produk" type="hidden" value="0">
                                                            <!-- <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-sm-4 mb-0">
                                                                    Harga
                                                                </label>
                                                                <input class="form-control col-xl-8 col-sm-7" name="harga_produk" type="text" id="rupiah" min="0" required="">
                                                            </div> -->
                                                            <div class="form-group mb-3 row">
                                                                <label class="col-xl-3 col-sm-4 mb-0">
                                                                    Kode KBLI
                                                                </label>
                                                                <input class="form-control col-xl-8 col-sm-7" name="kbli_produk" type="text" required="">
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-sm-4 mb-0">
                                                                    Gambar Produk 1
                                                                </label>
                                                                <input class="form-control col-xl-8 col-sm-7" name="gambarProduk[]" type="file" required="" accept="image/*">
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-sm-4 mb-0">
                                                                    Gambar Produk 2
                                                                </label>
                                                                <input class="form-control col-xl-8 col-sm-7" name="gambarProduk[]" type="file" accept="image/*">
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-sm-4 mb-0">
                                                                    Gambar Produk 3
                                                                </label>
                                                                <input class="form-control col-xl-8 col-sm-7" name="gambarProduk[]" type="file" accept="image/*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-sm-4">Deskripsi</label>
                                                                <div class="col-xl-9 col-sm-8 pl-0 description-sm">
                                                                    <textarea id="editor1" class="col-xl-10 col-sm-8" name="deskripsi_produk" cols="12" rows="4"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- <div class="form">
                                                    <div class="form-group row">
                                                        <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select Size :</label>
                                                        <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1">
                                                            <option>Small</option>
                                                            <option>Medium</option>
                                                            <option>Large</option>
                                                            <option>Extra Large</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-sm-4 mb-0">Total Products :</label>
                                                        <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
                                                            <div class="input-group">
                                                                <input class="touchspin" type="text" value="1">
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-sm-4">Add Description :</label>
                                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                                            <textarea id="editor1" name="editor1" cols="10" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary btn-block" name="addProduct">Tambah Produk</button>
                                                    <!-- <button type="button" class="btn btn-light">Discard</button> -->
                                                </div>
                                            </form>
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

    <!-- currency format -->
    <script type="text/javascript">
        var rupiah = document.getElementById('rupiah');
        rupiah.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, 'Rp. ');
        });

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
        }

        function previewImage() {
            document.getElementById("image-preview").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

            oFReader.onload = function(oFREvent) {
                document.getElementById("image-preview").src = oFREvent.target.result;
            };
        };
    </script>
</body>

</html>