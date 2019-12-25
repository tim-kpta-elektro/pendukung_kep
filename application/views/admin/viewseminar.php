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
                    <!-- Labels on top -->
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">Seminar Kerja Praktek</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-md-3 col-lg-6">
                                    <!-- Form Labels on top - Default Style -->
                                    <form class="mb-5" action="<?php echo base_url('admin/adminkp/updateseminar')?>" method="POST">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="id_kp" value="<?php echo$data->id_kp?>">
                                        </div>
                                    <h2 class="content-heading border-bottom mb-4 pb-2">Data Diri</h2>
                                        <div class="form-group">
                                            <label for="Nama">Nama</label>
                                            <input type="text" class="form-control" name="nama" value="<?php echo$data->nama_mhs?>" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label for="Nim">NIM</label>
                                            <input type="text" class="form-control" name="nim" value="<?php echo$data->nim?>" readonly="readonly">
                                        </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="kp_id" value="<?php echo $data->id_kp ?>">
                                    </div>
                                    <h2 class="content-heading border-bottom mb-4 pb-2">Data Akademik</h2>
                                        <div class="form-group">
                                            <label for="sks">Jumlah SKS Lulus</label>
                                            <input type="number" class="form-control" name="sks" value="<?php echo$data->sks?>" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label for="IPK">IPK</label>
                                            <input type="text" class="form-control" name="ipk" value="<?php echo$data->ipk?>" readonly="readonly">
                                        </div>
                                    <h2 class="content-heading border-bottom mb-4 pb-2">Judul Laporan KP</h2>
                                        <div class="form-group">
                                            <label for="nama perusahaan">Judul Laporan KP</label>
                                            <input type="text" class="form-control" name="judul_laporan" value="<?php echo$data->judul_seminar?>" readonly="readonly">
                                        </div>
                                    <h2 class="content-heading border-bottom mb-4 pb-2">Tanggal Pelaksanaan</h2>
                                        <div class="form-group">
                                            <label for="Tanggal Mulai">Tanggal Seminar KP</label>
                                            <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="tgl_seminar" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php echo$data->tanggal_seminar?>" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                            <label for="Tanggal Mulai">Jam Mulai</label>
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker5" name="jam_mulai" value="<?php echo$data->jam_mulai?>" readonly="readonly" />
                                        </div>
                                        <div class="form-group">
                                            <label for="Tanggal Mulai">Jam Selesai</label>
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" name="jam_selesai" value="<?php echo$data->jam_selesai?>" readonly="readonly" />
                                        </div>
                                        <div class="form-group">
                                        <label for="acceptor">Ruang:</label>
                                        <input type="text" class="form-control" name="judul_laporan" value="<?php echo$data->nama_ruang?>" readonly="readonly">
                                        </div>
                                        <div class="form-group">
                                        <button type="submit" name="action" value="setuju" class="btn btn-primary">Setuju</button>
                                        <button type="submit" name="action" value="tolak" class="btn btn-danger">Tolak</button>
                                        </div>
                                    </form>
                                    <!-- END Form Labels on top - Default Style -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Labels on top -->
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