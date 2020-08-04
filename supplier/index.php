<!DOCTYPE html>
<html lang="en">

<?php include 'template/head.php' ?>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        <?php include 'template/header.php' ?>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include 'template/sidebar.php' ?>
            <!-- Page Sidebar Ends-->

            <div class="page-body">

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Dashboard
                                        <small>Bigdeal Admin panel</small>
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
                                        <div class="media-body"><span class="m-0">Products</span>
                                            <h3 class="mb-0">$ <span class="counter">9856</span><small> This
                                                    Month</small></h3>
                                        </div>
                                        <div class="icons-widgets">
                                            <i data-feather="box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 xl-50">
                            <div class="card o-hidden widget-cards">
                                <div class="bg-primary card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body"><span class="m-0">Messages</span>
                                            <h3 class="mb-0">$ <span class="counter">893</span><small> This
                                                    Month</small></h3>
                                        </div>
                                        <div class="icons-widgets">
                                            <i data-feather="message-square"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 xl-50">
                            <div class="card o-hidden widget-cards">
                                <div class="bg-warning card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body"><span class="m-0">Earnings</span>
                                            <h3 class="mb-0">$ <span class="counter">6659</span><small> This
                                                    Month</small></h3>
                                        </div>
                                        <div class="icons-widgets">
                                            <i data-feather="navigation"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 xl-50">
                            <div class="card o-hidden widget-cards">
                                <div class="bg-success card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body"><span class="m-0">New Vendors</span>
                                            <h3 class="mb-0">$ <span class="counter">45631</span><small> This
                                                    Month</small></h3>
                                        </div>
                                        <div class="icons-widgets">
                                            <i data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 xl-100">
                            <div class="card height-equal">
                                <div class="card-header">
                                    <h5>Order Activity</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="order-timeline">
                                        <div class="media">
                                            <div class="timeline-line"></div>
                                            <div class="timeline-icon-primary">
                                                <i data-feather="map-pin"></i>
                                            </div>
                                            <div class="media-body">
                                                <span class="font-primary">Delivered</span>
                                                <p>56 mins ago</p>
                                            </div>
                                            <span class="pull-right text-muted">Today</span>
                                        </div>
                                        <div class="media">
                                            <div class="timeline-icon-secondary">
                                                <i data-feather="shopping-cart"></i>
                                            </div>
                                            <div class="media-body">
                                                <span class="font-secondary">In Transit</span>
                                                <p>18 Hour ago</p>
                                            </div>
                                            <span class="pull-right text-muted">Yesterday</span>
                                        </div>
                                        <div class="media">
                                            <div class="timeline-icon-warning">
                                                <i data-feather="box"></i>
                                            </div>
                                            <div class="media-body">
                                                <span class="font-warning">Dispatched</span>
                                                <p>3 Days Ago</p>
                                            </div>
                                            <span class="pull-right text-muted">12 Sep</span>
                                        </div>
                                        <div class="media">
                                            <div class="timeline-icon-success">
                                                <i data-feather="user"></i>
                                            </div>
                                            <div class="media-body">
                                                <span class="font-success">Order Received</span>
                                                <p>8 Days Ago</p>
                                            </div>
                                            <span class="pull-right text-muted">05 Sep</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 xl-100">
                            <div class="card btn-months">
                                <div class="card-header">
                                    <h5>This Month Revenue</h5>
                                    <div class="dashboard-btn-groups">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button class="btn btn-outline-light btn-js" type="button">Day</button>
                                            <button class="btn btn-outline-light btn-js" type="button">Week</button>
                                            <button class="btn btn-outline-light btn-js active" type="button">Month</button>
                                        </div>
                                    </div>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="revenue-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 xl-100">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Product Value</h5>
                                    <div class="chart-value-box pull-right">
                                        <div class="value-square-box-success"></div><span class="f-12 f-w-600">Physical</span>
                                        <div class="value-square-box-secondary ml-3"></div><span class="f-12 f-w-600">Digital</span>
                                    </div>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="market-chart"></div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 xl-100">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Latest Orders</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="user-status table-responsive latest-order-table">
                                        <table class="table table-bordernone">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Order ID</th>
                                                    <th scope="col">Order Total</th>
                                                    <th scope="col">Payment Method</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td class="digits">$120.00</td>
                                                    <td class="font-danger">Bank Transfers</td>
                                                    <td class="digits">On Way</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td class="digits">$90.00</td>
                                                    <td class="font-secondary">Ewallets</td>
                                                    <td class="digits">Delivered</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td class="digits">$240.00</td>
                                                    <td class="font-warning">Cash</td>
                                                    <td class="digits">Delivered</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td class="digits">$120.00</td>
                                                    <td class="font-danger">Direct Deposit</td>
                                                    <td class="digits">$6523</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td class="digits">$50.00</td>
                                                    <td class="font-primary">Bank Transfers</td>
                                                    <td class="digits">Delivered</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="order.html" class="btn btn-primary">View All Orders</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card btn-months">
                                <div class="card-header">
                                    <h5>Buy / Sell</h5>
                                    <div class="dashboard-btn-groups">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button class="btn btn-outline-light btn-js1" type="button">Day</button>
                                            <button class="btn btn-outline-light btn-js1" type="button">Week</button>
                                            <button class="btn btn-outline-light btn-js1 active" type="button">Month</button>
                                        </div>
                                    </div>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body sell-graph">
                                    <div class="flot-chart-placeholder" id="multiple-real-timeupdate"></div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 xl-50">
                            <div class="card customers-card">
                                <div class="card-header">
                                    <h5>New Customers</h5>
                                    <div class="chart-value-box pull-right">
                                        <div class="value-square-box-secondary"></div><span class="f-12 f-w-600">Customers</span>
                                    </div>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="apex-chart-container">
                                        <div id="customers"></div>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head7" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 xl-50">
                            <div class="card height-equal">
                                <div class="card-header">
                                    <h5>Empolyee Status</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="user-status table-responsive products-table">
                                        <table class="table table-bordernone mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Designation</th>
                                                    <th scope="col">Skill Level</th>
                                                    <th scope="col">Experience</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="bd-t-none u-s-tb">
                                                        <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="./assets/images/dashboard/user2.jpg" alt="" data-original-title="" title="">
                                                            <div class="d-inline-block">
                                                                <h6>John Deo <span class="text-muted digits">(14+
                                                                        Online)</span></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Designer</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress" style="height: 8px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="digits">2 Year</td>
                                                </tr>
                                                <tr>
                                                    <td class="bd-t-none u-s-tb">
                                                        <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="./assets/images/dashboard/man.png" alt="" data-original-title="" title="">
                                                            <div class="d-inline-block">
                                                                <h6>Mohsib lara<span class="text-muted digits">(99+
                                                                        Online)</span></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Tester</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress" style="height: 8px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="digits">5 Month</td>
                                                </tr>
                                                <tr>
                                                    <td class="bd-t-none u-s-tb">
                                                        <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="./assets/images/dashboard/user.png" alt="" data-original-title="" title="">
                                                            <div class="d-inline-block">
                                                                <h6>Hileri Soli <span class="text-muted digits">(150+
                                                                        Online)</span></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Designer</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress" style="height: 8px;">
                                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="digits">3 Month</td>
                                                </tr>
                                                <tr>
                                                    <td class="bd-t-none u-s-tb">
                                                        <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle blur-up lazyloaded" src="./assets/images/dashboard/designer.jpg" alt="" data-original-title="" title="">
                                                            <div class="d-inline-block">
                                                                <h6>Pusiz bia <span class="text-muted digits">(14+
                                                                        Online)</span></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Designer</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress" style="height: 8px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="digits">5 Year</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Top Selling Country</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-simple-left"></i></li>
                                            <li><i class="view-html fa fa-code"></i></li>
                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                            <li><i class="icofont icofont-error close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="jvector-map-height" id="world"></div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="table-responsive map-table">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Country</th>
                                                            <th>2018</th>
                                                            <th>2019</th>
                                                            <th>Change</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Bhopal</td>
                                                            <td>1,048</td>
                                                            <td>2,213</td>
                                                            <td>6.8%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Saudi Arbia</td>
                                                            <td>576</td>
                                                            <td>1,297</td>
                                                            <td>4.3%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kazakstan</td>
                                                            <td>879</td>
                                                            <td>1,985</td>
                                                            <td>7.0%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Canada</td>
                                                            <td>1,871</td>
                                                            <td>2,546</td>
                                                            <td>6.2%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brazil</td>
                                                            <td>957</td>
                                                            <td>1,975</td>
                                                            <td>5.6%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Russia</td>
                                                            <td>1,480</td>
                                                            <td>1,631</td>
                                                            <td>8.7%</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
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
            <?php include 'template/footer.php' ?>
            <!-- footer end-->
        </div>

    </div>

    <?php include 'template/script.php' ?>

</body>

</html>