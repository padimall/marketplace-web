<div class="page-sidebar">
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <h6 class="mt-3 f-14"><?= decodeURL($_SESSION['username']) ?></h6>
            <!-- <p><?= decodeURL($_SESSION['email']) ?></p> -->
        </div>
        <ul class="sidebar-menu">
            <li>
                <a class="sidebar-header" href="../dashboard/">
                    <i data-feather="home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a class="sidebar-header" href="#">
                    <i data-feather="box"></i>
                    <span>Produk</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="../produk"><i class="fa fa-circle"></i>
                            <span>Daftar Produk</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="sidebar-header" href="">
                    <i data-feather="users"></i>
                    <span>Supplier</span><i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="../supplier"><i class="fa fa-circle"></i>Daftar Supplier</a></li>
                </ul>
            </li>
            <!-- <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i class="fa fa-circle"></i>
                            <span>Physical</span> <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="category.html"><i class="fa fa-circle"></i>Category</a></li>
                            <li><a href="category-sub.html"><i class="fa fa-circle"></i>Sub Category</a>
                            </li>
                            <li><a href="product-list.html"><i class="fa fa-circle"></i>Product List</a>
                            </li>
                            <li><a href="product-detail.html"><i class="fa fa-circle"></i>Product Detail</a>
                            </li>
                            <li><a href="add-product.html"><i class="fa fa-circle"></i>Add Product</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle"></i>
                            <span>Digital</span> <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="category-digital.html"><i class="fa fa-circle"></i>Category</a>
                            </li>
                            <li><a href="category-digitalsub.html"><i class="fa fa-circle"></i>Sub
                                    Category</a></li>
                            <li><a href="product-listdigital.html"><i class="fa fa-circle"></i>Product
                                    List</a></li>
                            <li><a href="add-digital-product.html"><i class="fa fa-circle"></i>Add
                                    Product</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="order.html"><i class="fa fa-circle"></i>Orders</a></li>
                    <li><a href="transactions.html"><i class="fa fa-circle"></i>Transactions</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="coupon-list.html"><i class="fa fa-circle"></i>List Coupons</a></li>
                    <li><a href="coupon-create.html"><i class="fa fa-circle"></i>Create Coupons </a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Pages</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="pages-list.html"><i class="fa fa-circle"></i>List Page</a></li>
                    <li><a href="page-create.html"><i class="fa fa-circle"></i>Create Page</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="media.html"><i data-feather="camera"></i><span>Media</span></a></li>
            <li><a class="sidebar-header" href="#"><i data-feather="align-left"></i><span>Menus</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="menu-list.html"><i class="fa fa-circle"></i>Menu Lists</a></li>
                    <li><a href="create-menu.html"><i class="fa fa-circle"></i>Create Menu</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="user-list.html"><i class="fa fa-circle"></i>User List</a></li>
                    <li><a href="create-user.html"><i class="fa fa-circle"></i>Create User</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Vendors</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="list-vendor.html"><i class="fa fa-circle"></i>Vendor List</a></li>
                    <li><a href="create-vendors.html"><i class="fa fa-circle"></i>Create Vendor</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="chrome"></i><span>Localization</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="translations.html"><i class="fa fa-circle"></i>Translations</a></li>
                    <li><a href="currency-rates.html"><i class="fa fa-circle"></i>Currency Rates</a></li>
                    <li><a href="taxes.html"><i class="fa fa-circle"></i>Taxes</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
            <li><a class="sidebar-header" href=""><i data-feather="settings"></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="profile.html"><i class="fa fa-circle"></i>Profile</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Invoice</span></a>
            </li> -->
            <li><a class="sidebar-header" href="../auth/logout"><i data-feather="log-in"></i><span>Logout</span></a>
            </li>
        </ul>
    </div>
</div>