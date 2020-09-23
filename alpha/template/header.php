<?php
include('./controller/product.php');
$productView = new Product();

$dataProduct = $productView->view_product();
$dataProduct = $dataProduct["result"]['data'];
// // var_dump($dataProduct["result"]['data']);

$dataProduct_categories = $productView->view_product_categories();
$dataProduct_categories = $dataProduct_categories["result"]['data'];
?>
<header>
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        <div class="custom-container">
            <div class="row">
                <div class="col-xl-5 col-md-7 col-sm-6">
                    <div class="top-header-left">
                        <!-- <div class="shpping-order">
                                <h6>free shipping on order over $99 </h6>
                            </div> -->
                        <div class="app-link">
                            <h6>
                                Download App
                            </h6>
                            <ul>
                                <li><a><i class="fa fa-apple"></i></a></li>
                                <li><a><i class="fa fa-android"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-md-5 col-sm-6">
                    <div class="top-header-right">
                        <div class="top-menu-block">
                            <ul>
                                <li><a href="#">gift cards</a></li>
                                <li><a href="#">Notifications</a></li>
                                <li><a href="#">help & contact</a></li>
                                <li><a href="#">todays deal</a></li>
                                <li><a href="#">track order</a></li>
                                <li><a href="#">shipping </a></li>
                                <li><a href="#">easy returns</a></li>
                            </ul>
                        </div>
                        <div class="language-block">
                            <div class="language-dropdown">
                                <span class="language-dropdown-click">
                                    englishEnglish <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                                <ul class="language-dropdown-open">
                                    <li><a href="#">Indonesia</a></li>
                            </div>
                            <div class="curroncy-dropdown">
                                <span class="curroncy-dropdown-click">
                                    IDR<i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                                <ul class="curroncy-dropdown-open">
                                    <li><a href="#"><i class="fa fa-inr"></i>IDR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layout-header4">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="contact-block">
                        <div class="sm-nav-block">
                            <span class="sm-nav-btn"><i class="fa fa-bars"></i></span>
                            <ul class="nav-slide">
                                <li>
                                    <div class="nav-sm-back">
                                        back <i class="fa fa-angle-right pl-2"></i>
                                    </div>
                                </li>
                                <li><a href="#">western ware</a></li>
                                <li><a href="#">TV, Appliances</a></li>
                                <li><a href="#">Pets Products</a></li>
                                <li><a href="#">Car, Motorbike</a></li>
                                <li><a href="#">Industrial Products</a></li>
                                <li><a href="#">Beauty, Health Products</a></li>
                                <li><a href="#">Grocery Products </a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Bags, Luggage</a></li>
                                <li><a href="#">Movies, Music </a></li>
                                <li><a href="#">Video Games</a></li>
                                <li><a href="#">Toys, Baby Products</a></li>
                            </ul>
                        </div>
                        <div class="desc-nav-block">
                            <i class="fa fa-volume-control-phone tell" aria-hidden="true"></i>
                            <span class="contact-item">
                                call us
                                <span>+62 822 7466 0962</span>
                            </span>
                            <div class="onhover-dropdown ">
                                <a href="signup">
                                    <i class="icon-user mobile-user ">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="logo-block">
                        <a href="./">
                            <img src="./assets/images/layout-4/logo/logo.png" alt="logo" class="img-fluid  ">
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="icon-block">
                        <ul>
                            <li onclick="openAccount()" class="mobile-user onhover-dropdown"><a href="#"><i
                                        class="icon-user"></i></a>

                            </li>
                            <li class="mobile-search"><a href="#"><i class="icon-search"></i></a>
                                <div class="search-overlay">
                                    <div>
                                        <span class="close-mobile-search">×</span>
                                        <div class="overlay-content">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <form>
                                                            <div class="form-group"><input type="text"
                                                                    class="form-control" id="exampleInputPassword1"
                                                                    placeholder="Search a Product"></div>
                                                            <button type="submit" class="btn btn-primary"><i
                                                                    class="fa fa-search"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="mobile-wishlist" onclick="openWishlist()"><a href="#"><i
                                        class="icon-heart"></i></a></li>
                            <li class="mobile-setting mobile-setting-hover" onclick="openSetting()"><a href="#"><i
                                        class="icon-settings"></i></a>
                            </li>
                            <li class="mobile-cart cart-hover-div" onclick="openCart()">
                                <a href="#">
                                    <i class="icon-shopping-cart "></i>
                                    <!-- <div class="cart-item">
                                            <div>$00.0<span>cart</span></div>
                                        </div> -->
                                </a>
                            </li>
                        </ul>
                        <span class="toggle-nav">
                            <i class="fa fa-bars"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="category-header-4">
        <div class="custom-container">
            <div class="row">
                <div class="col">
                    <div class="navbar-menu">
                        <div class="category-left">
                            <div class=" nav-block">
                                <div class="nav-left">
                                    <nav class="navbar" data-toggle="collapse"
                                        data-target="#navbarToggleExternalContent">
                                        <button class="navbar-toggler" type="button">
                                            <span class="navbar-icon"><i class="fa fa-arrow-down"></i></span>
                                        </button>
                                        <h5 class="mb-0  text-white title-font">Shop by category</h5>
                                    </nav>
                                    <div class="collapse nav-desk" id="navbarToggleExternalContent">
                                        <ul class="nav-cat title-font">
                                            <?php
                                            foreach ($dataProduct_categories as $listProduct) {
                                            ?>
                                            <li><a href="#"><?= $listProduct['name'] ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-block">
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2"
                                                    aria-hidden="true"></i></div>
                                        </li>
                                        <!--HOME-->
                                        <li>
                                            <a href="#" class="light-menu-item">Home</a>
                                            <ul>
                                                <li><a target="_blank" href="index.html">layout 1</a></li>
                                                <li><a target="_blank" href="layout-2.html">layout 2</a></li>
                                                <li><a target="_blank" href="layout-3.html">layout 3</a></li>
                                                <li><a target="_blank" href="layout-4.html">layout 4</a></li>
                                                <li><a target="_blank" href="layout-5.html">layout 5</a></li>
                                                <li><a target="_blank" href="layout-6.html">layout 6</a></li>
                                            </ul>
                                        </li>
                                        <!--HOME-END-->

                                        <!--SHOP-->
                                        <li>
                                            <a href="#" class="light-menu-item">shop</a>
                                            <ul>
                                                <li><a href="category-page(left-sidebar).html">left sidebar</a></li>
                                                <li><a href="category-page(right-sidebar).html">right sidebar</a>
                                                </li>
                                                <li><a href="category-page(no-sidebar).html">no sidebar</a></li>
                                                <li><a href="category-page(sidebar-popup).html">sidebar popup</a>
                                                </li>
                                                <li><a href="category-page(metro).html">metro <span
                                                            class="new-tag">new</span></a></li>
                                                <li><a href="category-page(full-width).html">full width <span
                                                            class="new-tag">new</span></a></li>
                                                <li><a href="category-page(infinite-scroll).html">infinite
                                                        scroll</a></li>
                                                <li><a href=category-page(3-grid).html>3 grid</a></li>
                                                <li><a href="category-page(6-grid).html">6 grid</a></li>
                                                <li><a href="category-page(list-view).html">list view</a></li>
                                            </ul>
                                        </li>
                                        <!--SHOP-END-->
                                        <!--product-meu start-->
                                        <li class="mega"><a href="#" class="light-menu-item">product
                                            </a>
                                            <ul class="mega-menu full-mega-menu ">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>sidebar</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a
                                                                                    href="product-page(left-sidebar).html">left
                                                                                    sidebar</a></li>
                                                                            <li><a
                                                                                    href="product-page(right-sidebar).html">right
                                                                                    sidebar</a></li>
                                                                            <li><a href="product-page(no-sidebar).html">non
                                                                                    sidebar</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>bonus layout</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a
                                                                                    href="product-page(bundle).html">bundle</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="product-page(image-swatch).html">image
                                                                                    swatch</a></li>
                                                                            <li><a
                                                                                    href="product-page(vertical-tab).html">vertical
                                                                                    tab</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>product layout <span
                                                                                class="new-tag">new</span></h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="product-page(4-image).html">4
                                                                                    image </a></li>
                                                                            <li><a
                                                                                    href="product-page(sticky).html">sticky</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="product-page(accordian).html">accordian</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>thumbnail image</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="product-page(left-image).html">left
                                                                                    image</a></li>
                                                                            <li><a
                                                                                    href="product-page(right-image).html">right
                                                                                    image</a></li>
                                                                            <li><a
                                                                                    href="product-page(image-outside).html">image
                                                                                    outside</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>3 column</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="product-page(3-col-left).html">thumbnail
                                                                                    left</a></li>
                                                                            <li><a
                                                                                    href="product-page(3-col-right).html">thumbnail
                                                                                    right</a></li>
                                                                            <li><a href="product-page(3-column).html">thubnail
                                                                                    bottom</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>product element</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="element-productbox.html">product
                                                                                    box</a></li>
                                                                            <li><a href="element-product-slider.html">product
                                                                                    slider</a></li>
                                                                            <li><a href="element-no_slider.html">no
                                                                                    slider</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row menu-banner">
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <img src="./assets/images/menu-banner1.jpg"
                                                                        alt="menu-banner" class="img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <img src="./assets/images/menu-banner2.jpg"
                                                                        alt="menu-banner" class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--product-meu end-->

                                        <!--mega-meu start-->
                                        <li class="mega" id="hover-cls">
                                            <a href="#" class="light-menu-item">features</a>
                                            <ul class="mega-menu full-mega-menu ratio_landscape">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>portfolio</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="grid-2-col.html">portfolio
                                                                                    grid 2</a></li>
                                                                            <li><a href="grid-3-col.html">portfolio
                                                                                    grid 3</a></li>
                                                                            <li><a href="grid-4-col.html">portfolio
                                                                                    grid 4</a></li>
                                                                            <li><a href="grid-6-col.html">portfolio
                                                                                    grid 6</a></li>
                                                                            <li><a href="masonary-2-grid.html">mesonary
                                                                                    grid 2</a></li>
                                                                            <li><a href="masonary-3-grid.html">mesonary
                                                                                    grid 3</a></li>
                                                                            <li><a href="masonary-4-grid.html">mesonary
                                                                                    grid 4</a></li>
                                                                            <li><a href="masonary-fullwidth.html">mesonary
                                                                                    full width</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>add to cart</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="layout-5.html">cart modal
                                                                                    popup</a></li>
                                                                            <li><a href="layout-6.html">qty. counter
                                                                                </a></li>
                                                                            <li><a href="index.html">cart top</a>
                                                                            </li>
                                                                            <li><a href="layout-2.html">cart
                                                                                    bottom</a></li>
                                                                            <li><a href="layout-3.html">cart
                                                                                    left</a></li>
                                                                            <li><a href="layout-4.html">cart
                                                                                    right</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>shortcodes</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="element-title.html">title</a>
                                                                            </li>
                                                                            <li><a href="element-banner.html">collection
                                                                                    banner</a></li>
                                                                            <li><a href="element-slider.html">home
                                                                                    slider</a></li>
                                                                            <li><a
                                                                                    href="element-category.html">category</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="element-service.html">service</a>
                                                                            </li>
                                                                            <li><a href="element-image-ratio.html">image
                                                                                    size ratio</a></li>
                                                                            <li><a href="element-tab.html">tab</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>email template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="email-order-success.html">order
                                                                                    success</a></li>
                                                                            <li><a href="email-order-success-tow.html">order
                                                                                    success 2</a></li>
                                                                            <li><a href="email-template.html">email
                                                                                    template</a></li>
                                                                            <li><a href="email-template-tow.html">email
                                                                                    template 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title menu-secon-title">
                                                                        <h5>Easy to use</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="button.html">element
                                                                                    button</a></li>
                                                                            <li><a href="instagram.html">element
                                                                                    instagram</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box product ">
                                                                <div class="mega-img">
                                                                    <img src="./assets/images/mega-banner.jpg"
                                                                        alt="menu-banner" class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--mega-meu end-->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="category-right">
                            <div class="input-block">
                                <form class="big-deal-form">
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="search"><i class="fa fa-search"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search a Product">
                                        <!-- <div class="input-group-prepend">
                                                <select>
                                                    <option>All Category</option>
                                                    <option>indurstrial</option>
                                                    <option>sports</option>
                                                </select>
                                            </div> -->
                                    </div>
                                </form>
                            </div>
                            <div class="sm-nav-block">
                                <span class="sm-nav-btn"><i class="fa fa-bars"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>