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
                    <!-- Labels on top -->
                    <a href="<?php echo base_url('semkp/cetak_pengajuansemkp') ?>" class="btn btn-primary" target="_blank">Lembar Pengajuan Seminar KP</a>
                    <br><br>
                    <div class="block">
                        <div class="block-header">
                            <h1 class="block-title" style="text-align: center; color: red;">Menunggu Persetujuan Admin Kerja Praktek</h1>
                        </div>
                        <div class="block-content block-content-full">
                            <table class="table">
                                <tr>
                                    <td width="30%">Nama</td>
                                    <td width="3%">:</td>
                                    <td width="67%"><strong><?php echo $pending->nama_mhs?></strong></td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td><strong><?php echo $pending->nim?></strong></td>
                                </tr>
                                <tr>
                                    <td>Jumlah SKS Lulus</td>
                                    <td>:</td>
                                    <td><strong><?php echo $pending->sks?></strong></td>
                                </tr>
                                <tr>
                                    <td>Indeks Prestasi Mahasiswa (IPK)</td>
                                    <td>:</td>
                                    <td><strong><?php echo $pending->ipk?></strong></td>
                                </tr>
                                <tr>
                                    <td>Nama Perusahaan</td>
                                    <td>:</td>
                                    <td><strong><?php echo $pending->perusahaan_nama?></strong></td>
                                </tr>
                                <tr>
                                    <td>Judul Seminar</td>
                                    <td>:</td>
                                    <td><strong><?php echo $pending->judul_seminar?></strong></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Seminar</td>
                                    <td>:</td>
                                    <td><strong><?php echo $pending->tanggal_seminar?></strong></td>
                                </tr>
                                <tr>
                                    <td>Jam Mulai Seminar</td>
                                    <td>:</td>
                                    <td><strong><?php echo $pending->jam_mulai?></strong></td>
                                </tr>
                                <tr>
                                    <td>Jam Selesai Seminar</td>
                                    <td>:</td>
                                    <td><strong><?php echo $pending->jam_selesai?></strong></td>
                                </tr>
                                <tr>
                                    <td>Ruang Seminar</td>
                                    <td>:</td>
                                    <td><strong><?php echo $pending->nama_ruang?></strong></td>
                                </tr>
                            </table>
                            <div class="row justify-content-center">
                                <div class="col-md-3">
                                    <a href="<?php echo base_url('#') ?>" class="btn btn-primary">Edit</a>
                                    <!-- <button type="submit" class="btn btn-primary">Edit</button> -->
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