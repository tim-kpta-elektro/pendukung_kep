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
                    <!-- Bootstrap Design -->
                    <h2 class="content-heading">Pengajuan Kerja Praktek</h2>
                        <div class="card-header">
                            
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <!-- Default Elements -->
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Form Pengajuan KP</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-md-3 col-lg-6">
                                        <form action="<?php echo base_url('kerjapraktek/kp/store') ?>" method="post">
                                            <h2 class="content-heading border-bottom mb-4 pb-2">Data Diri</h2>
                                                <div class="form-group">
                                                    <label for="Nama">Nama</label>
                                                    <input type="text" class="form-control" name="nama" value="<?php echo $data->nama_mhs ?>" readonly="readonly">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Nim">NIM</label>
                                                    <input type="text" class="form-control" name="nim" value="<?php echo $data->nim ?>" readonly="readonly">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" name="status_kp" value="PENDING">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" name="mahasiswa_id" value="<?php echo $data->id_mahasiswa ?>">
                                                </div>
                                            <h2 class="content-heading border-bottom mb-4 pb-2">Data Akademik</h2>
                                                <div class="form-group">
                                                    <label for="sks">Jumlah SKS Lulus</label>
                                                    <input type="number" class="form-control" name="sks" placeholder="Masukkan Jumlah SKS Anda..">
                                                    <div class="text-danger"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="IPK">IPK</label>
                                                    <input type="text" class="form-control" name="ipk" placeholder="Masukkan IPK Anda..">
                                                </div>
                                            <h2 class="content-heading border-bottom mb-4 pb-2">Data Perusahaan</h2>
                                                <div class="form-group">
                                                    <label for="nama perusahaan">Nama Perusahaan</label>
                                                    <input type="text" class="form-control" name="perusahaan_nama" placeholder="Masukkan Nama Perusahaan..">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat perusahaan">Alamat Perusahaan</label>
                                                    <input type="text" class="form-control" name="perusahaan_almt" placeholder="Masukkan Alamat Perusahaan..">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis usaha perusahaan">Jenis Usaha Perusahaan</label>
                                                    <input type="text" class="form-control" name="perusahaan_jenis" placeholder="Masukkan Jenis Usaha Perusahaan..">
                                                </div>
                                                <div class="form-group">
                                                    <label for="PIC">PIC (Jabatan)</label>
                                                    <input type="text" class="form-control" name="pic" placeholder="Masukkan PIC Perusahaan..">
                                                </div>
                                            <h2 class="content-heading border-bottom mb-4 pb-2">Tanggal Pelaksanaan</h2>
                                                <div class="form-group">
                                                    <label for="Tanggal Mulai">Tanggal Mulai KP</label>
                                                    <input type="text" class="form-control bg-white" id="flatpickr" name="rencana_mulai_kp" placeholder="Y-m-d">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Tanggal Selesai">Tanggal Selesai KP</label>
                                                    <input type="text" class="form-control bg-white" id="flatpickr" name="rencana_selesai_kp" placeholder="Y-m-d">
                                                </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Default Elements -->
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
        <script>
            var example = flatpickr('#flatpickr',{
                dateFormat: 'Y-m-d'
            });
        </script>

    </body>
</html>