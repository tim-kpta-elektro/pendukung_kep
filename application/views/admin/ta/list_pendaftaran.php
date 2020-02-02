<!doctype html>
<html lang="en" class="no-focus">

<head>
    <title>Portal Elektro - Pengajuan TA</title>

    <?php $this->load->view('layouts/head.php') ?>

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
    <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-modern main-content-boxed">
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
            <div class="content">
                <h2 class="content-heading">List Pendaftaran Tugas Akhir</h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Mahasiswa</h3>
                            </div>
                            <div class="block-content">
                                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th class="d-none d-sm-table-cell text-center" style="width: 3%">No</th>
                                                <th class="d-none d-sm-table-cell  text-center" style="width: 7%">NIM</th>
                                                <th class="text-center" style="width: 35%">Nama</th>
                                                <th class="text-center" style="width: 45%">Judul</th>
                                                <th class="text-center" style="width: 10%">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; ?>
                                            <?php foreach ($pendaftaran as $row): ?>
                                            <tr>
                                                <td class="d-none d-sm-table-cell text-center font-size-sm text-center"><?php echo $no++?></td>
                                                <td class="d-none d-sm-table-cell  text-center font-size-sm text-center"><?php echo $row->nim?></td>
                                                <td class="font-w600 font-size-sm text-center">
                                                    <a href="#"><?php echo $row->nama_mhs?></a>
                                                </td>
                                                <td class="font-size-sm text-center">
                                                    <?php echo $row->judul?>
                                                </td>
                                                <td class="font-size-sm text-center">
                                                    <a href="<?php echo site_url('admin/adminta/lihat_pendaftaran/'.$row->id_ta) ?>" class="btn btn-sm btn-alt-warning mr-5 mb-5"><i class="fa fa-edit"></i> Update</a>
                                                    <?php if($row->status_ta == 'SETUJU'){?>

                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <?php $this->load->view('layouts/footer.php') ?>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->


    <!--Codebase JS Core-->
    <?php $this->load->view('layouts/js.php') ?>
</body>

</html>