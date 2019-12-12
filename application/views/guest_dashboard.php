<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <?php $this->load->view('layouts/head.php') ?>
        <title>Portal Elektro</title>
    </head>
    <body>

        <!-- Page Container -->
        <div id="page-container" class="sidebar-mini sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed">
            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">p</span><span class="text-primary">e</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <a class="link-effect font-w700" href="<?php echo base_url() ?>">
                                    <i class="si si-fire text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">Portal</span><span class="font-size-xl text-primary">Elektro</span>
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li class="{{ request()->is('/*') ? ' open' : '' }}">
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-bulb"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                <ul>
                                    <li>
                                        <a class="{{ request()->is('examples/plugin') ? ' active' : '' }}" href="#">Kerja Praktek</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('examples/blank') ? ' active' : '' }}" href="#">Tugas Akhir</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="{{ request()->is('/login') ? ' active' : '' }}" href="<?php echo base_url();?>login">
                                    <i class="si si-cup"></i><span class="sidebar-mini-hide">Login</span>
                                </a>
                            </li>
                            <li class="nav-main-heading">
                                <span class="sidebar-mini-visible">P</span><span class="sidebar-mini-hidden">Panduan</span>
                            </li>
                            <li>
                                <a class="{{ request()->is('kp/seminar') ? ' active' : '' }}" href="#">
                                    <i class="si si-cup"></i><span class="sidebar-mini-hide">Kerja Praktek</span>
                                </a>
                            </li>
                            <li>
                                <a class="{{ request()->is('kp/seminar') ? ' active' : '' }}" href="#">
                                    <i class="si si-cup"></i><span class="sidebar-mini-hide">Tugas Akhir</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Hero -->
                <div class="bg-image bg-image-bottom" style="background-image: url('assets/media/photos/photo37@2x.jpg');">
                    <div class="bg-primary-dark-op">
                        <div class="content content-top text-center overflow-hidden">
                            <div class="pt-50 pb-20">
                                <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Dashboard</h1>
                                <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Welcome to Portal Elektro!</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-pop text-right bg-primary" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-bar-chart fa-3x text-primary-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="8900">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Pengunjung</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-pop text-right bg-earth" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-trophy fa-3x text-earth-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="2600">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Total Mahasiswa</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-pop text-right bg-elegance" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-envelope-letter fa-3x text-elegance-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="260">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Mahasiswa Aktif</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-pop text-right bg-corporate" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-fire fa-3x text-corporate-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="4252">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Alumni</div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #1 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #2 -->
                        <div class="col-md-6">
                            <div class="block">
                                <div class="block-header bg-primary-lighter">
                                    <h3 class="block-title">
                                        Sales <small>This week</small>
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="pull-all pt-30">
                                        <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                        <canvas class="js-chartjs-dashboard-lines"></canvas>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="row items-push text-center">
                                        <div class="col-12 col-sm-4">
                                            <div class="font-w600 text-success">
                                                <i class="fa fa-caret-up"></i> +6%
                                            </div>
                                            <div class="font-size-h4 font-w600">35.2</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Average</div>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <div class="font-w600 text-success">
                                                <i class="fa fa-caret-up"></i> +14%
                                            </div>
                                            <div class="font-size-h4 font-w600">960</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <div class="font-w600 text-danger">
                                                <i class="fa fa-caret-down"></i> -1%
                                            </div>
                                            <div class="font-size-h4 font-w600">263</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block">
                                <div class="block-header bg-earth-lighter">
                                    <h3 class="block-title">
                                        Earnings <small>This week</small>
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="pull-all pt-30">
                                        <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                        <canvas class="js-chartjs-dashboard-lines2"></canvas>
                                    </div>
                                </div>
                                <div class="block-content bg-white">
                                    <div class="row items-push text-center">
                                        <div class="col-6 col-sm-4">
                                            <div class="font-w600 text-success">
                                                <i class="fa fa-caret-up"></i> +8%
                                            </div>
                                            <div class="font-size-h4 font-w600">$ 8,200</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                            <div class="font-w600 text-danger">
                                                <i class="fa fa-caret-down"></i> -9%
                                            </div>
                                            <div class="font-size-h4 font-w600">$ 1,318</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="font-w600 text-success">
                                                <i class="fa fa-caret-up"></i> +39%
                                            </div>
                                            <div class="font-size-h4 font-w600">$ 4,850</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Balance</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row #2 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #3 -->
                        <div class="col-md-6">
                            <a class="block" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <i class="si si-game-controller fa-2x text-body-bg-dark"></i>
                                    <div class="row pt-10 pb-30 text-center">
                                        <div class="col-6 border-r">
                                            <div class="font-size-h3 font-w600">190</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Games</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="font-size-h3 font-w600">870</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Subscriptions</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="block" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="text-right">
                                        <i class="si si-wallet fa-2x text-body-bg-dark"></i>
                                    </div>
                                    <div class="row pt-10 pb-30 text-center">
                                        <div class="col-6 border-r">
                                            <div class="font-size-h3 font-w600">$840</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Today</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="font-size-h3 font-w600">$4,490</div>
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Last Week</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #3 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #4 -->
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="si si-earphones fa-3x text-success"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">4.8k Songs</div>
                                        <div class="text-muted">Your library is growing!</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                                                <i class="fa fa-shopping-bag mr-5"></i> Get more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="si si-diamond fa-3x text-warning"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">7580 Points</div>
                                        <div class="text-muted">Nice, you are doing great!</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-warning" href="javascript:void(0)">
                                                <i class="fa fa-check mr-5"></i> Redeem them now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="si si-grid fa-3x text-info"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">2 Grid Servers</div>
                                        <div class="text-muted">Currently active.</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-info" href="javascript:void(0)">
                                                <i class="fa fa-plus mr-5"></i> Add More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row #4 -->
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="#" target="_blank">Yudhi Kusuma</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.0</a> &copy; <span class="js-year-copy">2017</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core
        -->
        <?php $this->load->view('layouts/js.php') ?>

    </body>
</html>