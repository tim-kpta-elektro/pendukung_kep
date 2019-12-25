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
                                <a class="{{ request()->is('/auth') ? ' active' : '' }}" href="<?php echo base_url('auth');?>">
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
            
            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->
                    </div>
                    <!-- END Left Section -->
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

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
                                    <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="<?php echo $jumlahmhs ?>">0</div>
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
                                    <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="<?php echo $mhsaktif ?>">0</div>
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
                                    <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="<?php echo $alumni ?>">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Alumni</div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #1 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #2 -->
                        <div class="col-md-12">
                            <div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                    <h3 class="block-title">Kerja Praktek</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                        <thead>
                                            <tr>
                                                <th class="d-none d-sm-table-cell text-center" style="width: 20px">No</th>
                                                <th style="width: 100px;" class="text-center">NIM</th>
                                                <th class="text-center">Nama</th>
                                                <th class="text-center">Tempat</th>
                                                <th class="d-none d-sm-table-cell text-center">Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                            <?php foreach ($listkp as $row): ?>
                                            <tr>
                                                <td class="d-none d-sm-table-cell text-center font-size-sm text-center"><?php echo $no++?></td>
                                                <td class="text-center font-size-sm text-center"><?php echo $row->nim?></td>
                                                <td class="font-w600 font-size-sm text-center">
                                                    <a href="#"><?php echo $row->nama_mhs?></a>
                                                </td>
                                                <td class="font-size-sm text-center">
                                                    <?php echo $row->perusahaan_nama?>
                                                </td>
                                                <td class="d-none d-sm-table-cell font-size-sm text-center">
                                                    <?php echo $row->perusahaan_almt?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END Row #2 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #3 -->
                        <div class="col-md-12">
                            <div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                    <h3 class="block-title">Seminar Kerja Praktek</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                        <thead>
                                            <tr>
                                                <th class="d-none d-sm-table-cell text-center" style="width: 20px">No</th>
                                                <th style="width: 100px;" class="text-center">NIM</th>
                                                <th class="text-center">Nama</th>
                                                <th class="d-none d-sm-table-cell text-center">Judul Seminar</th>
                                                <th class="d-none d-sm-table-cell text-center">Tanggal Seminar</th>
                                                <th class="d-none d-sm-table-cell text-center">Jam Mulai</th>
                                                <th class="d-none d-sm-table-cell text-center">Jam Selesai</th>
                                                <th class="text-center">Tempat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                            <?php foreach ($listseminar as $row): ?>
                                            <tr>
                                                <td class="d-none d-sm-table-cell text-center font-size-sm text-center"><?php echo $no++?></td>
                                                <td class="text-center font-size-sm text-center"><?php echo $row->nim?></td>
                                                <td class="font-w600 font-size-sm text-center">
                                                    <a href="#"><?php echo $row->nama_mhs?></a>
                                                </td>
                                                <td class="d-none d-sm-table-cell font-size-sm text-center">
                                                    <?php echo $row->judul_seminar?>
                                                </td>
                                                <td class="d-none d-sm-table-cell font-size-sm text-center">
                                                    <?php echo $row->tanggal_seminar?>
                                                </td>
                                                <td class="d-none d-sm-table-cell font-size-sm text-center">
                                                    <?php echo $row->jam_mulai?>
                                                </td>
                                                <td class="d-none d-sm-table-cell font-size-sm text-center">
                                                    <?php echo $row->jam_selesai?>
                                                </td>
                                                <td class="font-size-sm text-center">
                                                    <?php echo $row->nama_ruang?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END Row #3 -->
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