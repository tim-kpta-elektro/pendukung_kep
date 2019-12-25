<!doctype html>
<html lang="en" class="no-focus">
    <head>
        
        <?php $this->load->view('layouts/head.php') ?>
        <title>Portal Elektro</title>
       
    </head>
    <body>

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o enable-cookies sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-modern main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <?php $this->load->view('layouts/aside.php') ?>
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <nav id="sidebar">
                <?php $this->load->view('layouts/sidebar.php') ?>
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <?php $this->load->view('layouts/navbar.php') ?>
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-bag fa-2x text-primary-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="1500">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Pengunjung</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-wallet fa-2x text-earth-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-earth" data-toggle="countTo" data-speed="1000" data-to="<?php echo $jumlahmhs ?>">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Jumlah Mahasiswa</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-envelope-open fa-2x text-elegance-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="<?php echo $mhsaktif ?>">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Mahasiswa Aktif</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-users fa-2x text-pulse"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-pulse" data-toggle="countTo" data-speed="1000" data-to="<?php echo $alumni ?>">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Alumni</div>
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
                <?php $this->load->view('layouts/footer.php')?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Onboarding Modal functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
            <?php //$this->load->view('layouts/modal.php') ?>
        <!-- END Onboarding Modal -->


        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
        <?php $this->load->view('layouts/js.php') ?>

    </body>
</html>