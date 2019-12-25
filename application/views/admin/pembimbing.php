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
                        <h3 class="block-title">Pemilihan Pembimbing</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-md-3 col-lg-6">
                                <!-- Form Labels on top - Default Style -->
                                <form class="mb-5" action="<?php echo base_url('admin/adminkp/updatepem')?>" method="POST">
                                    <div class="form-group">
                                    <label for="pem_kp">Pembimbing Kerja Praktek</label>
                                    <select class="form-control selectpicker" name="pem_kp" id="pem_kp" onchange="autofill()" data-live-search="true">
                                    <option value="">Pilih Pembimbing</option>
                                    <?php foreach ($lsdosen as $lsdosens): ?>
                                        <option name="dosen" value="<?php echo  $lsdosens->id_dosen ?>"><?php echo $lsdosens->nama_dosen?></option>
                                    <?php endforeach; ?>
                                    </select>
                                    </div>
                                <h2 class="content-heading border-bottom mb-4 pb-2">Data Diri</h2>
                                    <div class="form-group">
                                        <label for="Nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" value="<?php echo $data->nama_mhs?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label for="Nim">NIM</label>
                                        <input type="text" class="form-control" name="nim" value="<?php echo $data->nim?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label for="Nim">Angkatan</label>
                                        <input type="text" class="form-control" name="angkatan" value="<?php echo $data->angkatan?>" readonly="readonly">
                                    </div>
                                <h2 class="content-heading border-bottom mb-4 pb-2">Data Akademik</h2>
                                    <div class="form-group">
                                        <label for="sks">Jumlah SKS Lulus</label>
                                        <input type="text" class="form-control" name="sks" value="<?php echo $data->sks?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label for="IPK">IPK</label>
                                        <input type="text" class="form-control" name="ipk" value="<?php echo $data->ipk?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama perusahaan">Pembimbing Akademik</label>
                                        <input type="text" class="form-control" name="pem_akademik" value="<?php echo $data->nama_dosen?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama perusahaan">Status Mahasiswa</label>
                                        <input type="text" class="form-control" name="status_mhs" value="<?php echo $data->status_mhs?>" readonly="readonly">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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