<!doctype html>
<html lang="en" class="no-focus">
    <head>
        
        <?php $this->load->view('layouts/head.php') ?>
        <title>Portal Elektro - Pengajuan Seminar KP</title>
       
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
                    <h2 class="content-heading">Seminar Kerja Praktek</h2>
                        <div class="card-header">

                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <!-- Default Elements -->
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Form Seminar KP</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-md-3 col-lg-6">
                                        <form action="<?php echo base_url('backend/semkp/store')?>" method="post">
                                            
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
                                                    <input type="hidden" class="form-control" name="kp_id" value="<?php echo $data->id_kp?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" name="status_seminarkp" value="PENDING">
                                                </div>
                                            <h2 class="content-heading border-bottom mb-4 pb-2">Data Akademik</h2>
                                                <div class="form-group">
                                                    <label for="sks">Jumlah SKS Lulus</label>
                                                    <input type="number" class="form-control" name="sks" placeholder="Masukkan Jumlah SKS Anda..">
                                                </div>
                                                <div class="form-group">
                                                    <label for="IPK">IPK</label>
                                                    <input type="text" class="form-control" name="ipk" placeholder="Masukkan IPK Anda..">
                                                </div>
                                            <h2 class="content-heading border-bottom mb-4 pb-2">Laporan Kerja Praktek</h2>
                                                <div class="form-group">
                                                    <label for="judul_seminar">Judul Laporan KP</label>
                                                    <input type="text" class="form-control <?php echo form_error('judul_seminar') ? 'is-invalid':'' ?>" name="judul_seminar" placeholder="Masukkan Laporan KP">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('judul_seminar'); ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal seminar">Tanggal Seminar KP</label>
                                                    <input type="text" class="form-control bg-white" name="tanggal_seminar" id="flatpickr2" placeholder="Masukkan Tanggal Seminar KP">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jam mulai">Jam Mulai Seminar</label>
                                                    <input type="text" class="form-control bg-white" name="jam_mulai" id="flatpickr" placeholder="Masukkan Jam Seminar Dimulai">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jam selesai">Jam Selesai Seminar</label>
                                                    <input type="text" class="form-control bg-white" name="jam_selesai" id="flatpickr" placeholder="Masukkan Jam Seminar">
                                                </div>
                                                <div class="form-group">
                                                    <label for="acceptor">Ruang:</label>
                                                    <select class="form-control selectpicker" name="ruang_id" id="ruang_id" onchange="autofill()" data-live-search="true">
                                                    <option>Pilih Ruang</option>
                                                    <?php foreach ($ruang as $ruangs): ?>
                                                        <option name="ruang_id" value="<?php echo $ruangs->id_ruang ?>"><?php echo $ruangs->nama_ruang?></option>
                                                    <?php endforeach; ?>
                                                    </select>
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
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true
        });
        </script>
        <script>
            var example2 = flatpickr('#flatpickr2',{
                dateFormat: 'Y-m-d'
            });
        </script>

    </body>
</html>