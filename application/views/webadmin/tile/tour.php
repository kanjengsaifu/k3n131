<!DOCTYPE html>
<html>

    <!-- Mirrored from coderthemes.com/ubold_1.5/menu_2/components-tour.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 May 2016 11:39:10 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Description">
        <meta name="author" content="STUDIO IT">
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/webadmin/' ?>assets/images/it.png">
        <title>Intro - KPI</title>

        <!-- Tour css -->
        <link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/hopscotch/css/hopscotch.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() . 'assets/webadmin/' ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/modernizr.min.js"></script>
    </head>
    <body>
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">
                    <!-- Logo container-->
                    <div class="logo" id="logo-tour">
                        <a href="<?php echo site_url('common/dash') ?>" class="logo"><span>L<i class="md md-album"></i>GO HERE</span></a>
                    </div>
                    <!-- End Logo container-->
                    <div class="menu-extras">
                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li>
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                            <li class="dropdown" id="setting-tour">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><i class="icon-options"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                    <li><a href="#"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                    <li><a href="#"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End topbar -->
            <!-- Navbar Start -->
            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li  id="menu-tour">
                                <a href="<?php echo site_url('common/dash');?>"><i class="md md-dashboard"></i>Dashboard</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="md md-layers"></i>Master</a>
                                <ul class="submenu">
                                    <li>
                                        <span>Master</span>
                                    </li>
                                    <li><a href="#">Master</a></li>
                                    <li><a href="#">Master</a></li>
                                    <li><a href="#">Master</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="md md-color-lens"></i>Transaksi</a>
                                <ul class="submenu">
                                    <li>
                                        <span>Transaksi</span>
                                    </li>
                                    <li><a href="#">Transaksi</a></li>
                                    <li><a href="#">Transaksi</a></li>
                                    <li><a href="#">Transaksi</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="md md-assignment"></i>Report</a>
                                <ul class="submenu">
                                    <li>
                                        <span>Report</span>
                                    </li>
                                    <li><a href="#">Report</a></li>
                                    <li><a href="#">Report</a></li>
                                    <li><a href="#">Report</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="md md-folder-special"></i>Utility</a>
                                <ul class="submenu">
                                    <li>
                                        <span>Utility</span>
                                    </li>
                                    <li><a href="#">Log</a></li>
                                    <li><a href="#">Listcode</a></li>
                                    <li><a href="#">Backup db</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End navigation menu -->
                    </div>
                </div>
            </div>
        </header>
        <div class="wrapper">
            <div class="container">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title" id="pagetitle-tour">Tour</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Beranda</a>
                            </li>
                            <li>
                                <a href="#">Components</a>
                            </li>
                            <li class="active">
                                Tour
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- Page-Title -->
                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6" id="footer-tour">
                                <?php echo date('Y') ?> © STUDIO IT.
                            </div>
                            <div class="col-xs-6">
                                <ul class="pull-right list-inline m-b-0">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('common/dash/tour') ?>">Help</a>
                                    </li>
                                    <li>
                                        <a href="#">Dashboard</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->
            </div> <!-- end container -->
        </div>
        <!-- End wrapper -->
        <!-- jQuery  -->
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/detect.js"></script>
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/fastclick.js"></script>
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/wow.min.js"></script>
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.scrollTo.min.js"></script>
        <!-- Tour page js -->
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/plugins/hopscotch/js/hopscotch.min.js"></script>
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url() . 'assets/webadmin/' ?>assets/js/jquery.app.js"></script>
        <script>
            $(document).ready(function () {
                var placementRight = 'right';
                var placementLeft = 'left';

                // Define the tour!
                var tour = {
                    id: "my-intro",
                    steps: [
                        {
                            target: "logo-tour",
                            title: "Logo Here",
                            content: "Place your logo website",
                            placement: placementRight,
                            yOffset: 10
                        },
                        {
                            target: 'search-tour',
                            title: "Small navigation button",
                            content: "Click on the button and make sidebar navigation small.",
                            placement: 'bottom'
                        },
                        {
                            target: 'setting-tour',
                            title: "Option Menu",
                            content: "You can find anoter menu in here..",
                            placement: 'left'
                        },
                        {
                            target: 'menu-tour',
                            title: "navigation",
                            content: "Website Navigation for access your content..",
                            placement: 'bottom'
                        },
                        {
                            target: 'page-title-tour',
                            title: "User settings",
                            content: "You can edit info here.",
                            placement: 'left',
                            zindex: 999
                        },
                        {
                            target: 'pagetitle-tour',
                            title: "Page Title here",
                            content: "This info your current place..",
                            placement: 'bottom',
                            zindex: 999
                        },
                        {
                            target: 'footer-tour',
                            title: "Footer",
                            content: "This about your website..",
                            placement: 'top'
                        }
                    ],
                    showPrevButton: true
                };

                // Start the tour!
                hopscotch.startTour(tour);
            });
        </script>
    </body>
    <!-- Mirrored from coderthemes.com/ubold_1.5/menu_2/components-tour.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 May 2016 11:39:12 GMT -->
</html>