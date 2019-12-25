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
                            <div class="col-md-8">
                                <!-- Default Elements -->
                                <div class="block">
                                    <div class="block-content">
                                        <form action="<?php echo base_url('backend/kp/updatekp') ?>" method="post">
                                            <h2 class="content-heading border-bottom mb-4 pb-2">Data Diri</h2>
                                                <div class="form-group">
                                                    <label for="Nama">Nama</label>
                                                    <input type="text" class="form-control" name="nama" value="<?php echo $edit->nama_mhs ?>" readonly="readonly">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Nim">NIM</label>
                                                    <input type="text" class="form-control" name="nim" value="<?php echo $edit->nim ?>" readonly="readonly">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" name="status_kp" value="PENDING">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" name="mahasiswa_id" value="<?php echo $edit->id_mahasiswa ?>">
                                                </div>
                                            <h2 class="content-heading border-bottom mb-4 pb-2">Data Akademik</h2>
                                                <div class="form-group">
                                                    <label for="sks">Jumlah SKS Lulus</label>
                                                    <input type="number" class="form-control" name="sks" value="<?php echo $edit->sks?>">
                                                    <div class="text-danger"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="IPK">IPK</label>
                                                    <input type="text" class="form-control" name="ipk" value="<?php echo $edit->ipk?>">
                                                </div>
                                            <h2 class="content-heading border-bottom mb-4 pb-2">Data Perusahaan</h2>
                                                <div class="form-group">
                                                    <label for="nama perusahaan">Nama Perusahaan</label>
                                                    <input type="text" class="form-control" name="perusahaan_nama" value="<?php echo $edit->perusahaan_nama?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat perusahaan">Alamat Perusahaan</label>
                                                    <input type="text" class="form-control" name="perusahaan_almt" value="<?php echo $edit->perusahaan_almt?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis usaha perusahaan">Jenis Usaha Perusahaan</label>
                                                    <input type="text" class="form-control" name="perusahaan_jenis" value="<?php echo $edit->perusahaan_jenis ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="PIC">PIC</label>
                                                    <input type="text" class="form-control" name="pic" value="<?php echo $edit->pic?>">
                                                </div>
                                            <h2 class="content-heading border-bottom mb-4 pb-2">Tanggal Pelaksanaan</h2>
                                                <div class="form-group">
                                                    <label for="Tanggal Mulai">Tanggal Mulai KP</label>
                                                    <input type="text" class="form-control bg-white" id="flatpickr" name="tgl_mulai_kp" value="<?php echo $edit->tgl_mulai_kp ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Tanggal Selesai">Tanggal Selesai KP</label>
                                                    <input type="text" class="form-control bg-white" id="flatpickr" name="tgl_selesai_kp" value="<?php echo $edit->tgl_selesai_kp?>">
                                                </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
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