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
                    <a href="<?php echo base_url('kp/cetak_pengajuankp')?>" class="btn btn-primary" target="_blank">Lembar Pengajuan KP</a>
                    <a href="<?php echo base_url('kp/cetak_form')?>" class="btn btn-primary" target="_blank">Form Konsultasi KP</a>
                    <br><br>
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-info alert-dismissable mt-20" role="alert">
                        <b> <?php echo $this->session->flashdata('success'); ?> </b>
                        </div>
                    <?php endif; ?> 
                    <div class="block">
                        <div class="block-header">
                            <h1 class="block-title" style="text-align: center; color: red;">Menunggu Persetujuan Admin Kerja Praktek</h1>
                        </div>
                        <div class="block-content block-content-full">
                            <table class="table">
                                <tr>
                                    <td width="30%">Nama</td>
                                    <td width="3%">:</td>
                                    <td width="67%"><strong><?php echo $data->nama_mhs ?></strong></td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td><strong><?php echo $data->nim ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Jumlah SKS Lulus</td>
                                    <td>:</td>
                                    <td><strong><?php echo $data->sks ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Indeks Prestasi Mahasiswa (IPK)</td>
                                    <td>:</td>
                                    <td><strong><?php echo $data->ipk ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Nama Perusahaan</td>
                                    <td>:</td>
                                    <td><strong><?php echo $data->perusahaan_nama ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Alamat Perusahaan</td>
                                    <td>:</td>
                                    <td><strong><?php echo $data->perusahaan_almt?></strong></td>
                                </tr>
                                <tr>
                                    <td>Jenis Perusahaan</td>
                                    <td>:</td>
                                    <td><strong><?php echo $data->perusahaan_jenis?></strong></td>
                                </tr>
                                <tr>
                                    <td>PIC</td>
                                    <td>:</td>
                                    <td><strong><?php echo $data->pic?></strong></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Mulai KP</td>
                                    <td>:</td>
                                    <td><strong><?php echo $data->tgl_mulai_kp?></strong></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Selesai KP</td>
                                    <td>:</td>
                                    <td><strong><?php echo $data->tgl_selesai_kp?></strong></td>
                                </tr>
                            </table>
                            <div class="row justify-content-center">
                                <div class="col-md-3">
                                    <a href="<?php echo base_url('backend/kp/editkp')?>" class="btn btn-primary">Edit</a>
                                    <!-- <button type="submit" class="btn btn-primary">Edit</button> -->
                                </div>
                            </div>
                        </div>
                    </div>    <!-- END Labels on top -->
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