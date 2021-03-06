<!doctype html>
<html lang="en" class="no-focus">

<head>
    <?php $this->load->view('layouts/head.php') ?>
    <title>Portal Elektro - Pengajuan TA</title>

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css"> -->
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
                                            <input type="text" class="form-control" name="nim" value="<?php echo $data->nim ?>" placeholder="masukkan nim" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Nama</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="nama" value="<?php echo $data->nama_mhs ?>" placeholder="masukkan nama" disabled="">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" value="PENDING" name="status_ta" hidden>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Total SKS</label>
                                        <div class="col-md-12">
                                            <input type="number" step="1" min="0" class="form-control" name="sks" placeholder="Total SKS yang dicapai">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Indeks Prestasi Kumulatif</label>
                                        <div class="col-md-12">
                                            <input type="number" step="0.01" min="0" max="4" class="form-control" name="ipk" placeholder="IPK terakhir">
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
                                        
                                        for ($i = 0; $i <= 2; $i++){
                                        ?>
                                        <div class="col-3">
                                            <input type="text" class="form-control" name="kode_mk<?php print($i)?>" id="kode_mk<?php print($i)?>" placeholder="Kode"><br>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-control selectpicker" name="mk<?php print($i)?>" id="mk<?php print($i)?>" onchange="autofill()" data-live-search="true">
                                                <option value="">Pilih Mata Kuliah</option>
                                                <?php foreach ($mk as $mks): ?>
                                                    <option name="mata_kuliah" value="<?php echo  $mks->nama ?>"><?php echo $mks->nama?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <br>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="float" class="form-control" name="nilai_mk<?php print($i)?>" ><br>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="huruf_mk<?php print($i)?>" ><br>
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
                                        <select class="form-control selectpicker" name="kode_peminatan" id="kode_peminatan" data-live-search="true">
                                            <option value="">Pilih Peminatan</option>
                                            <?php foreach ($peminatan as $peminatans): ?>
                                                <option name="peminatan" value="<?php echo  $peminatans->id ?>"><?php echo $peminatans->nama_peminatan?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Judul</label>
                                        <div class="col-md-12">
                                            <textarea type="text" class="form-control" id="example-text-input" name="judul" rows="4" placeholder="Masukkan judul"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Abstrak</label>
                                        <div class="col-md-12">
                                            <textarea type="text" class="form-control" id="example-text-input" name="abstrak" rows="6" placeholder="Deskripsi singkat"></textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label class="col-12" for="example-text-input">Tanggal Pengajuan</label>
                                        <div class="col-md-12"> 
                                            <input type="text" class="form-control bg-white" id="flatpickr" name="tgl_pengajuan" placeholder="Y-m-d">
                                        </div>
                                    </div> -->
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
                                        <select class="form-control selectpicker" name="pembimbing1" id="pembimbing1" data-live-search="true">
                                            <option value="">Pilih Pembimbing</option>
                                            <?php foreach ($dosens as $dosen): ?>
                                                <option name="dosen" value="<?php echo  $dosen->id_dosen ?>"><?php echo $dosen->nama_dosen?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="sks">Pembimbing 2 Tugas Akhir</label>
                                        <select class="form-control selectpicker" name="pembimbing2" id="pembimbing2" data-live-search="true">
                                            <option value="">Pilih Pembimbing</option>
                                            <?php foreach ($dosens as $dosen): ?>
                                                <option name="dosen" value="<?php echo  $dosen->id_dosen ?>"><?php echo $dosen->nama_dosen?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12 ml-auto">
                                            <button type="submit" class="btn btn-alt-primary">Daftar</button>
                                        </div>
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
    <script type="text/javascript">
        function autofill(){
            var mk=$('#mk0').val();
            $.ajax({
            url: "<?php echo base_url('tugasakhir/ta/fill_form')?>",
            data: 'kode='+mk,
            success:function(data){
                var json=data,
                obj=JSON.parse(json);
                $("#kode_mk0").val(obj.kode);
            }
            });
        }
    </script>
</body>


</html>