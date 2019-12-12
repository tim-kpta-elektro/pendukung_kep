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
            <img class="img-avatar img-avatar32" src="<?php echo base_url();?>assets/media/avatars/avatar15.jpg" alt="">
        </div>
        <!-- END Visible only in mini mode -->

        <!-- Visible only in normal mode -->
        <div class="sidebar-mini-hidden-b text-center">
            <a class="img-link" href="be_pages_generic_profile.html">
                <img class="img-avatar" src="<?php echo base_url();?>assets/media/avatars/avatar15.jpg" alt="">
            </a>
            <ul class="list-inline mt-10">
                <li class="list-inline-item">
                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html"><?php echo $_SESSION['username'];?></a>
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
            <li class="nav-main-heading">
                <span class="sidebar-mini-visible">KP</span><span class="sidebar-mini-hidden">Kerja Praktek</span>
            </li>
            <li>
                <a class="<?php if($this->uri->segment(1)=="pengajuankp"){echo "active";} ?>" href="<?php echo base_url('pengajuankp');?>">
                    <i class="si si-cup"></i><span class="sidebar-mini-hide">Pengajuan KP</span>
                </a>
            </li>
            <li class="{{ request()->is('kp/pelaksanaan/*') ? ' open' : '' }}">
                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-bulb"></i><span class="sidebar-mini-hide">Pelaksanaan Kerja Praktek</span></a>
                <ul>
                    <li>
                        <a class="{{ request()->is('kp/pelaksanaan/cetak_lmbr_tugas') ? ' active' : '' }}" href="#">Cetak Lembar Tugas KP</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('kp/pelaksanaan/cetak_form_nilai') ? ' active' : '' }}" href="#">Cetak Form Nilai KP</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="{{ request()->is('kp/seminar') ? ' active' : '' }}" href="#">
                    <i class="si si-cup"></i><span class="sidebar-mini-hide">Seminar KP</span>
                </a>
            </li>
            <li class="nav-main-heading">
                <span class="sidebar-mini-visible">VR</span><span class="sidebar-mini-hidden">Various</span>
            </li>
            <li class="{{ request()->is('examples/*') ? ' open' : '' }}">
                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-bulb"></i><span class="sidebar-mini-hide">Examples</span></a>
                <ul>
                    <li>
                        <a class="{{ request()->is('examples/plugin') ? ' active' : '' }}" href="#">Plugin</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('examples/blank') ? ' active' : '' }}" href="#">Blank</a>
                    </li>
                </ul>
            </li>
            <li class="nav-main-heading">
                <span class="sidebar-mini-visible">MR</span><span class="sidebar-mini-hidden">More</span>
            </li>
            <li>
                <a href="/">
                    <i class="si si-globe"></i><span class="sidebar-mini-hide">Landing</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- END Side Navigation -->
</div>
<!-- Sidebar Content -->