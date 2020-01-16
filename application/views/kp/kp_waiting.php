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
                        <div class="block-header block-header-default">
                            <h1 class="block-title" style="text-align: center; color: blue;">Menunggu jawaban permohonan Kerja Praktek!</h1>
                        </div>
                        <div class="block-content block-content-full">
                            <table class="table">
                                <tr>
                                    <td width="30%">Nama</td>
                                    <td width="3%">:</td>
                                    <td width="67%"><strong><?php echo $waiting->nama_mhs ?></strong></td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td><strong><?php echo $waiting->nim ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Jumlah SKS Lulus</td>
                                    <td>:</td>
                                    <td><strong><?php echo $waiting->sks ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Indeks Prestasi Mahasiswa (IPK)</td>
                                    <td>:</td>
                                    <td><strong><?php echo $waiting->ipk ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Nama Perusahaan</td>
                                    <td>:</td>
                                    <td><strong><?php echo $waiting->perusahaan_nama ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Alamat Perusahaan</td>
                                    <td>:</td>
                                    <td><strong><?php echo $waiting->perusahaan_almt?></strong></td>
                                </tr>
                                <tr>
                                    <td>Jenis Perusahaan</td>
                                    <td>:</td>
                                    <td><strong><?php echo $waiting->perusahaan_jenis?></strong></td>
                                </tr>
                                <tr>
                                    <td>PIC</td>
                                    <td>:</td>
                                    <td><strong><?php echo $waiting->pic?></strong></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Mulai KP</td>
                                    <td>:</td>
                                    <td><strong><?php echo $waiting->tgl_mulai_kp?></strong></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Selesai KP</td>
                                    <td>:</td>
                                    <td><strong><?php echo $waiting->tgl_selesai_kp?></strong></td>
                                </tr>
                            </table>
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