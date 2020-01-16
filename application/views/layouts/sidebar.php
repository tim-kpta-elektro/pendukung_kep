<!-- Sidebar Content -->
<div class="sidebar-content">
    <!-- Side Header -->
    <div class="content-header content-header-fullrow px-15">
        <!-- Mini Mode -->
        <div class="content-header-section sidebar-mini-visible-b">
            <!-- Logo -->
            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                <span class="text-dual-primary-dark">P</span><span class="text-primary">E</span>
            </span>
            <!-- END Logo -->
        </div>
        <!-- END Mini Mode -->

        <!-- Normal Mode -->
        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times text-danger"></i>
            </button>
            <!-- END Close Sidebar -->

            <!-- Logo -->
            <div class="content-header-item">
                <a class="link-effect font-w700" href="<?php echo base_url('dashboard') ?>">
                    <i class="si si-fire text-primary"></i>
                    <span class="font-size-xl text-dual-primary-dark">Portal</span><span class="font-size-xl text-primary">Elektro</span>
                </a>
            </div>
            <!-- END Logo -->
        </div>
        <!-- END Normal Mode -->
    </div>
    <!-- END Side Header -->

    <!-- Side User -->
    <div class="content-side content-side-full content-side-user px-10 align-parent">
        <!-- Visible only in mini mode -->
        <div class="sidebar-mini-visible-b align-v animated fadeIn">
            <img class="img-avatar img-avatar32" src="<?php echo base_url('assets/media/avatars/avatar10.jpg');?>" alt="">
        </div>
        <!-- END Visible only in mini mode -->

        <!-- Visible only in normal mode -->
        <div class="sidebar-mini-hidden-b text-center">
            <a class="img-link" href="be_pages_generic_profile.html">
                <img class="img-avatar" src="<?php echo base_url('assets/media/avatars/avatar10.jpg');?>" alt="">
            </a>
            <ul class="list-inline mt-10">
                <li class="list-inline-item">
                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#"><?php echo $_SESSION['username'];?></a>
                </li>
                <li class="list-inline-item">
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                        <i class="si si-drop"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="link-effect text-dual-primary-dark" href="<?php echo base_url('auth/logout') ?>">
                        <i class="si si-logout"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Visible only in normal mode -->
    </div>
    <!-- END Side User -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li>
                <a class="<?php if($this->uri->segment(1)=="dashboard"){echo "active";} ?>" href="<?php echo base_url('dashboard');?>">
                    <i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span>
                </a>
            </li>
            <?php if($this->session->userdata('level')=='2'):?>
            <li class="nav-main-heading">
                <span class="sidebar-mini-visible">KP</span><span class="sidebar-mini-hidden">Admin</span>
            </li>
            <li>
                <a class="<?php if($this->uri->segment(1)=="pembimbing"){echo "active";} ?>" href="<?php echo base_url('pembimbing');?>">
                    <i class="si si-cup"></i><span class="sidebar-mini-hide">Daftar Mahasiswa Elektro</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if($this->session->userdata('level')=='3'):?>
            <li class="nav-main-heading">
                <span class="sidebar-mini-visible">KP</span><span class="sidebar-mini-hidden">Kerja Praktek</span>
            </li>
            <li>
                <a class="<?php if($this->uri->segment(1)=="daftarmhs"){echo "active";} ?>" href="<?php echo base_url('daftarmhs');?>">
                    <i class="si si-cup"></i><span class="sidebar-mini-hide">Daftar Mahasiswa Elektro</span>
                </a>
            </li>
            <li>
                <a class="<?php if($this->uri->segment(1)=="requestkp"){echo "active";} ?>" href="<?php echo base_url('requestkp');?>">
                    <i class="si si-cup"></i><span class="sidebar-mini-hide">Request Pengajuan KP</span>
                </a>
            </li>
            <li>
                <a class="<?php if($this->uri->segment(1)=="balasankp"){echo "active";} ?>" href="<?php echo base_url('balasankp');?>">
                    <i class="si si-cup"></i><span class="sidebar-mini-hide">Permohonan KP</span>
                </a>
            </li>
            <li>
                <a class="<?php if($this->uri->segment(1)=="seminarkp"){echo "active";} ?>" href="<?php echo base_url('seminarkp');?>">
                    <i class="si si-cup"></i><span class="sidebar-mini-hide">Request Seminar KP</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if($this->session->userdata('level')=='1'):?>
            <li class="nav-main-heading">
                <span class="sidebar-mini-visible">KP</span><span class="sidebar-mini-hidden">Kerja Praktek</span>
            </li>
            <li>
                <a class="<?php if($this->uri->segment(1)=="pengajuankp"){echo "active";} ?>" href="<?php echo base_url('pengajuankp');?>">
                    <i class="si si-cup"></i><span class="sidebar-mini-hide">Pengajuan KP</span>
                </a>
            </li>
            <li class="<?php if($this->uri->segment(1)=="kp"){echo "open";} ?>">
                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-bulb"></i><span class="sidebar-mini-hide">Pelaksanaan Kerja Praktek</span></a>
                <ul>
                    <li>
                        <a class="<?php if($this->uri->segment(1)=="cetak_lmbrtugas"){echo "active";} ?>" href="<?php echo base_url('kp/cetak_lmbrtugas') ?>">Cetak Lembar Tugas KP</a>
                    </li>
                    <li>
                        <a class="<?php if($this->uri->segment(1)=="cetak_formnilai"){echo "active";} ?>" href="<?php echo base_url('kp/cetak_formnilai')?>">Cetak Form Nilai KP</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="<?php if($this->uri->segment(1)=="pengajuansemkp"){echo "active";} ?>" href="<?php echo base_url('pengajuansemkp')?>">
                    <i class="si si-cup"></i><span class="sidebar-mini-hide">Seminar KP</span>
                </a>
            </li>
            <?php endif; ?>
            <li class="nav-main-heading">
                <span class="sidebar-mini-visible">TA</span><span class="sidebar-mini-hidden">Tugas Akhir</span>
            </li>
            <?php if($this->session->userdata('level')=='1'):?>
            <li>
                <a href="<?php echo base_url('backend/ta');?>">
                    <i class="si si-cup"></i><span class="sidebar-mini-hide">Pengajuan TA</span>
                </a>
            </li>
            <li>
                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-cup"></i><span class="sidebar-mini-hide">Seminar Hasil</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url('backend/seminarta');?>">Pengajuan Seminar</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-cup"></i><span class="sidebar-mini-hide">Pendadaran</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url('backend/pendadaranta');?>">Pengajuan Pendadaran</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-bulb"></i><span class="sidebar-mini-hide">Berkas</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url('backend/laporan_ta/berita_acara');?>">Berita Acara</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('backend/laporan_ta/hadir_dosen');?>">Daftar Hadir Dosen</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('backend/laporan_ta/cetak_bukti');?>">Bukti Penyerahan Undangan Pendadaran </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('backend/laporan_ta/cetak_persetujuan');?>">Persetujuan Pendadaran </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('backend/laporan_ta/cetak_undangan');?>">Undangan Pendadaran </a>
                    </li>
                </ul>
            </li>
            <?php endif; ?>
        </ul>
    </div>
    <!-- END Side Navigation -->
</div>
<!-- Sidebar Content -->