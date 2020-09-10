<!DOCTYPE html>
<html lang="en">

<!-- header start -->
<?php include 'template/head.php' ?>
<!-- header end -->

<body class="bg-light">

    <!-- loader start -->
    <?php include 'template/loader.php' ?>
    <!-- loader end -->

    <!-- header start -->
    <?php include 'template/header.php' ?>
    <!-- header end -->

    <!--section start-->
    <section class="cart-section section-big-py-space bg-light">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-xs">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">Gambar</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Kuantitas</th>
                                <th scope="col">Aksi</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#">
                                        <img src="assets/images/layout-3/product/1.jpg" alt="cart" class=" ">
                                    </a>
                                </td>
                                <td>
                                    <a href="#">Nama Produk 1</a>
                                    <div class="mobile-cart-content row">
                                        <div class="col-xs-3">
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <input type="text" name="quantity" class="form-control input-number" value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color">Rp. 200.000</h2>
                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a>
                                            </h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2>Rp. 200.000</h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td><a href="#" class="icon"><i class="ti-close"></i></a></td>
                                <td>
                                    <h2 class="td-color">Rp. 200.000</h2>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table cart-table table-responsive-md">
                        <tfoot>
                            <tr>
                                <td>Total Harga :</td>
                                <td>
                                    <h2>Rp. 200.000</h2>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-12">
                    <a href="../demo" class="btn btn-normal">Lanjut Belanja</a>
                    <a href="checkout" class="btn btn-normal-green ml-3">Beli</a>
                </div>
            </div>
        </div>
    </section>
    <!--section end-->


    <!--footer start-->
    <?php include 'template/footer.php' ?>
    <!--footer end-->


    <!-- tap to top -->
    <div class="tap-top bg-white">
        <div>
            <img src="assets/images/icon/tap-top.png" class="img-fluid" alt="tap top" />
        </div>
    </div>
    <!-- tap to top End -->

    <!-- Add to cart bar -->
    <div id="cart_side" class=" add_to_cart right">
        <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
        <div class="cart-inner">
            <div class="cart_top">
                <h3>Keranjang Saya</h3>
                <div class="close-cart">
                    <a href="javascript:void(0)" onclick="closeCart()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="cart_media">
                <ul class="cart_product">
                    <li>
                        <div class="media">
                            <a href="#">
                                <img alt="" class="mr-3" src="assets/images/layout-6/product/2.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Nama Produk</h4>
                                </a>
                                <h4>
                                    <span>Rp. 0.000.000</span>
                                </h4>
                            </div>
                        </div>
                        <div class="close-circle">
                            <a href="#">
                                <i class="ti-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <a href="#">
                                <img alt="" class="mr-3" src="assets/images/layout-6/product/5.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Nama Produk</h4>
                                </a>
                                <h4>
                                    <span>Rp. 0.000.000</span>
                                </h4>
                            </div>
                        </div>
                        <div class="close-circle">
                            <a href="#">
                                <i class="ti-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <a href="#"><img alt="" class="mr-3" src="assets/images/layout-6/product/1.jpg"></a>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Nama Produk</h4>
                                </a>
                                <h4>
                                    <span>Rp. 0.000.000</span>
                                </h4>
                            </div>
                        </div>
                        <div class="close-circle">
                            <a href="#">
                                <i class="ti-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="cart_total">
                    <li>
                        <div class="total">
                            <h5>Jumlah Total : <span>Rp. 0.000.000</span></h5>
                        </div>
                    </li>
                    <li>
                        <div class="buttons">
                            <a href="keranjang" class="btn btn-normal btn-xs view-cart">Lihat Keranjang</a>
                            <a href="checkout" class="btn btn-normal btn-xs checkout">Checkout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Add to cart bar end-->

    <!-- Quick-view modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="assets/images/layout-6/product/a6.jpg" alt="quick" class="img-fluid "></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>Nama Product</h2>
                                <h3>Rp. 0.000.000</h3>
                                <div class="border-product">
                                    <h6 class="product-title">Deskripsi Produk</h6>
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium. Sed ut perspiciatis, unde omnis iste natus error sit
                                        voluptatem accusantium doloremque laudantium. Sed ut perspiciatis, unde omnis
                                        iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                </div>
                                <div class="border-product">
                                    <h6 class="product-title">Stok Produk</h6>
                                    <p>1800 Kg Tersedia</p>
                                </div>
                                <div class="product-buttons">
                                    <a href="#" class="btn btn-normal">Tambah Keranjang</a>
                                    <a href="#" class="btn btn-normal">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view modal popup end-->

    <!-- My account bar start-->
    <div id="myAccount" class="add_to_cart right account-bar">
        <a href="javascript:void(0)" class="overlay" onclick="closeAccount()"></a>
        <div class="cart-inner">
            <div class="cart_top">
                <h3>Akun Saya</h3>
                <div class="close-cart">
                    <a href="javascript:void(0)" onclick="closeAccount()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <form class="theme-form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label for="review">Password</label>
                    <input type="password" class="form-control" id="review" placeholder="Masukkan password" required="">
                </div>
                <div class="form-group">
                    <a href="#" class="btn btn-rounded btn-block ">Masuk</a>
                </div>
                <div>
                    <h5 class="forget-class">
                        <a href="#" class="d-block">Lupa Password</a>
                    </h5>
                    <h6 class="forget-class">
                        <a href="register" class="d-block">Belum punya akun ? <b>Daftar Sekarang</b>
                        </a>
                    </h6>
                </div>
            </form>
        </div>
    </div> <!-- Add to account bar end-->

    <!-- script js-->
    <?php include 'template/script.php' ?>
    <!-- script js-->

</body>

</html>