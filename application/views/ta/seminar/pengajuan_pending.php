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
                        <h1 class="block-title" style="text-align: center; color: orange;">Pengajuan Seminar Hasil Berhasil Disimpan<br><b>Menunggu Persetujuan Admin Tugas Akhir<b></h1>
                    </div>
                </div>
                <form action="<?php echo base_url('tugasakhir/seminarta/pengajuan') ?>" method="post">
                <h2 class="content-heading">Pengajuan Seminar Hasil</h2>
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
                                            <input type="text" class="form-control" name="nim" value="<?php echo $data->nim ?>" placeholder="masukkan nim" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Nama</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="nama" value="<?php echo $data->nama_mhs ?>" placeholder="masukkan nama" readonly>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" value="PENDING" name="status_seminar" hidden>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Total SKS</label>
                                        <div class="col-md-12">
                                            <input type="number" step="1" min="0" class="form-control" name="sks" value="<?php echo $data->sks ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Indeks Prestasi Kumulatif</label>
                                        <div class="col-md-12">
                                            <input type="number" step="0.01" min="0" max="4" class="form-control" value="<?php echo $data->ipk ?>" name="ipk" readonly>
                                        </div>
                                    </div>                                  
                            </div>
                        </div>
                        <div class="block">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Seminar Hasil</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option">
                                        <i class="si si-wrench"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="block-content block-content-full">
                                <div class="form-group row">
                                    <label class="col-12" for="example-text-input">Tanggal Seminar</label>
                                    <div class="col-md-12"> 
                                        <input type="text" class="form-control" name="tanggal" value="<?php echo($pending->tanggal)?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jam mulai">Jam Mulai Seminar</label>
                                    <input type="text" class="form-control" name="jam_mulai"  value="<?php echo($pending->jam_mulai)?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="jam selesai">Jam Selesai Seminar</label>
                                    <input type="text" class="form-control" name="jam_selesai"  value="<?php echo($pending->jam_selesai)?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="acceptor">Ruang:</label>
                                    <select class="form-control" name="tempat" id="" disabled>
                                        <option selected="selected" disabled><?php echo($pending->nama_ruang)?></option>
                                        <?php foreach ($ruang as $ruangs): ?>
                                            <option name="ruang_id" value="<?php echo $ruangs->id_ruang ?>"><?php echo $ruangs->nama_ruang?></option>
                                        <?php endforeach; ?>
                                    </select>
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
                                    <input type="text" class="form-control" value="<?php echo $ta_setuju->id_ta?>" name="id_ta" hidden>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Judul</label>
                                        <div class="col-md-12">
                                            <textarea type="text" class="form-control" id="example-text-input" name="judul" rows="4" readonly><?php echo $ta_setuju->judul?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Abstrak</label>
                                        <div class="col-md-12">
                                            <textarea type="text" class="form-control" id="example-text-input" name="abstrak" rows="4" readonly><?php echo $ta_setuju->abstrak?></textarea>
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