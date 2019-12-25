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
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Pengajuan Kerja Praktek</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-md-3 col-lg-6">
                                <!-- Form Labels on top - Default Style -->
                                <form class="mb-5" action="<?php echo base_url('admin/adminkp/updatekp'); ?>" method="POST">
                                <h2 class="content-heading border-bottom mb-4 pb-2">Data Diri</h2>
                                    <div class="form-group">
                                        <label for="Nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" value="<?php echo $data->nama_mhs?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label for="Nim">NIM</label>
                                        <input type="text" class="form-control" name="nim" value="<?php echo $data->nim?>" readonly="readonly">
                                    </div>
                                <h2 class="content-heading border-bottom mb-4 pb-2">Data Akademik</h2>
                                    <div class="form-group">
                                        <label for="sks">Jumlah SKS Lulus</label>
                                        <input type="number" class="form-control" name="sks" value="<?php echo $data->sks?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label for="IPK">IPK</label>
                                        <input type="text" class="form-control" name="ipk" value="<?php echo $data->ipk?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="mahasiswa_id" value="<?php echo $data->id_mahasiswa ?>">
                                    </div>
                                <h2 class="content-heading border-bottom mb-4 pb-2">Data Perusahaan</h2>
                                    <div class="form-group">
                                        <label for="nama perusahaan">Nama Perusahaan</label>
                                        <input type="text" class="form-control" name="perusahaan_nama" value="<?php echo $data->perusahaan_nama?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat perusahaan">Alamat Perusahaan</label>
                                        <input type="text" class="form-control" name="perusahaan_almt" value="<?php echo $data->perusahaan_almt?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis usaha perusahaan">Jenis Usaha Perusahaan</label>
                                        <input type="text" class="form-control" name="perusahaan_jenis" value="<?php echo $data->perusahaan_jenis?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label for="PIC">PIC</label>
                                        <input type="text" class="form-control" name="pic" value="<?php echo $data->pic?>" readonly="readonly">
                                    </div>
                                <h2 class="content-heading border-bottom mb-4 pb-2">Tanggal Pelaksanaan</h2>
                                    <div class="form-group">
                                    <label for="Tanggal Mulai">Tanggal Dimulai KP</label>
                                        <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="tgl_mulai_kp" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php echo $data->tgl_mulai_kp?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                    <label for="Tanggal Mulai">Tanggal Selesai KP</label>
                                        <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="tgl_selesai_kp" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php echo $data->tgl_selesai_kp?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                    <!-- <a class="btn btn-primary" href=" echo url('/kp/kerjapraktek/update')?>">SETUJUI</a>
                                    <a class="btn btn-danger" href=" echo url('/kp/kerjapraktek/tolak')?>">TOLAK</a> -->
                                    <button type="submit" name="action" value="setuju" class="btn btn-primary">Setuju</button>
                                    <button type="submit" name="action" value="tolak" class="btn btn-danger">Tolak</button>
                                    </div>
                                </form>
                                <!-- END Form Labels on top - Default Style -->
                            </div>
                        </div>
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