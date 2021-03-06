<!doctype html>
<html lang="en" class="no-focus">

<head>
    <title>Portal Elektro - Pengajuan TA</title>
    <?php $this->load->view('layouts/head.php') ?>

</head>

<body>

    <!-- Page Container -->
    <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
    <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-modern main-content-boxed">
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
            <div class="content">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h1 class="block-title" style="text-align: center; color:orange;">Pengajuan Berhasil Disimpan<br><b>Menunggu Persetujuan Admin Tugas Akhir<b></h1>
                    </div>
                    <div class="block-header block-header-default">
                        <p class="block-title" style="text-align: center; color:blue;">
                        Pembimbing 1 - 
                        <?php if($pembimbing1->status_pem1 == 'PENDING'){?>
                            <span class="badge badge-danger">BELUM DISETUJUI</span>
                        <?php } else if($pembimbing1->status_pem1 == 'SETUJU') {?>
                            <span class="badge badge-success">DISETUJUI</span>
                        <?php } ?> 
                        <br> Pembimbing 2 -  
                        <?php if($pembimbing2->status_pem2 == 'PENDING'){?>
                            <span class="badge badge-danger">BELUM DISETUJUI</span>
                        <?php } else if($pembimbing2->status_pem2 == 'SETUJU') {?>
                            <span class="badge badge-success">DISETUJUI</span>
                        <?php } ?> </p>
                    </div>
                </div>
                <a href="<?php echo base_url('tugasakhir/ta/cetak_pengajuan')?>" class="btn btn-alt-primary" target="_blank">Form Pendaftaran TA</a>
                <form action="<?php echo base_url('tugasakhir/ta/pengajuan') ?>" method="post">
                <h2 class="content-heading">Pengajuan Tugas Akhir</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Mahasiswa</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-wrench"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">NIM</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="example-text-input" name="nim" value="<?php echo $data->nim ?>" placeholder="masukkan nim" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Nama</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="example-text-input" name="nama" value="<?php echo $data->nama_mhs ?>" placeholder="masukkan nama" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Total SKS</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="example-text-input" name="sks" value="<?php echo $data->sks ?>" placeholder="Total SKS yang dicapai" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Indeks Prestasi Kumulatif</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="example-text-input" name="ipk" value="<?php echo $data->ipk ?>" placeholder="IPK terakhir" readonly>
                                        </div>
                                    </div>                                  
                            </div>
                        </div>
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Mata Kuliah Pilihan Pendukung</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-wrench"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="form-group">
                                    
                                    <div class="row">
                                        <div class="col-3">
                                            Kode MK
                                        </div>
                                        <div class="col-5">
                                            Nama MK
                                        </div>
                                        <div class="col-sm-2">
                                           Nilai
                                        </div>
                                        <div class="col-sm-2">
                                            Huruf
                                        </div>

                                        <?php
                                        foreach($matkul as $matkul){
                                        ?>
                                        <div class="col-3">
                                            <input type="text" class="form-control"  value="<?php echo $matkul->kode_matkul?>"  readonly><br>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control"  value="<?php echo $matkul->nama_matkul?>" readonly><br>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control"  value="<?php echo $matkul->ip?>" readonly><br>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" " value="<?php echo $matkul->huruf?>" readonly><br>
                                        </div>
                                        <?php
                                        }
                                        
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Tugas Akhir</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-wrench"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                    <div class="form-group">
                                        <label for="sks">Peminatan</label>
                                        <input type="text" class="form-control "  name="peminatan" Value="<?php echo $peminatan->nama_peminatan?>" readonly>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Judul</label>
                                        <div class="col-md-12">
                                            <textarea type="text" class="form-control" id="example-text-input" name="judul" rows="4" readonly><?php echo $ta->judul?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Abstrak</label>
                                        <div class="col-md-12">
                                            <textarea type="text" class="form-control" id="example-text-input" name="abstrak" rows="4" readonly><?php echo $ta->abstrak?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Tanggal Pengajuan</label>
                                        <div class="col-md-12"> 
                                            <input type="text" class="form-control"  name="tgl_pengajuan" value="<?php echo date("d-m-Y", strtotime($ta->tgl_pengajuan))?>" readonly>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Dosen Pembimbing</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-wrench"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                    <div class="form-group">
                                        <label for="sks">Pembimbing 1 Tugas Akhir</label>
                                        <input type="text" class="form-control "  name="tgl_pengajuan" Value="<?php echo $pembimbing1->nama_dosen?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="sks">Pembimbing 2 Tugas Akhir</label>
                                        <input type="text" class="form-control "  name="tgl_pengajuan" Value="<?php echo $pembimbing2->nama_dosen?>" readonly>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <?php $this->load->view('layouts/footer.php') ?>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!-- Onboarding Modal functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
    <?php //$this->load->view('layouts/modal.php') 
    ?>
    <!-- END Onboarding Modal -->

    <!--Codebase JS Core-->


    <?php $this->load->view('layouts/js.php') ?>
    <script>
            var example = flatpickr('#flatpickr',{
                dateFormat: 'Y-m-d'
            });
        </script>
</body>


</html>