<!doctype html>
<html lang="en" class="no-focus">
    <head>
        
        <?php $this->load->view('layouts/head.php') ?>
        <title>Portal Elektro - Pengajuan KP</title>
       
    </head>
    <body>
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
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-info alert-dismissable mt-20" role="alert">
                       <b> <?php echo $this->session->flashdata('success'); ?> </b>
                    </div>
                <?php endif; ?> 
                <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Daftar Mahasiswa <small>Teknik Elektro</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead>
                                <tr>
                                    <th class="d-none d-sm-table-cell text-center" style="width: 20px">No</th>
                                    <th class="d-none d-sm-table-cell text-center" style="width: 150px;">NIM</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center" style="width: 40%;">Pembimbing</th>
                                    <th class="text-center" style="width: 20%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                <?php foreach ($data as $row): ?>
                                <tr>
                                    <td class="d-none d-sm-table-cell text-center font-size-sm text-center"><?php echo $no++?></td>
                                    <td class="d-none d-sm-table-cell text-center font-size-sm text-center"><?php echo $row->nim?></td>
                                    <td class="font-w600 font-size-sm text-center">
                                        <a href="#"><?php echo $row->nama_mhs?></a>
                                    </td>
                                    <td class="font-size-sm text-center">
                                        <?php echo $row->nama_dosen?>
                                    </td>
                                    <td width="250" style="text-align: center;">
                                        <a href="<?php echo site_url('admin/adminkp/pembimbing/'.$row->nim) ?>" class="btn btn-sm btn-alt-warning mr-5 mb-5"><i class="fa fa-edit"></i> Update</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        </div>
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

        <!--Codebase JS Core-->
        <?php $this->load->view('layouts/js.php') ?>

    </body>
</html>