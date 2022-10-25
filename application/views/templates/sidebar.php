<body class="hold-transition sidebar-mini">
    <style>
        .required:after {
            content: " *";
            color: red;
        }
    </style>
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-item dropdown no-arrow ">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $this->session->userdata("ses_nama")
                            ?>
                            <i class="fas fa-user-circle fa-fw"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                            <a class="dropdown-item <? //php echo $this->uri->segment(1) == 'user' ? 'active' : '' 
                                                    ?>" href="<?php echo base_url('Auth/set_profile')
                                                                ?>">
                                <i class="fas fa-fw fa-user-tie"></i> Profile</a>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="<?php echo base_url('Auth/Logout') ?>" id="btn-logout">
                                <i class="fas fa-fw fa-sign-out-alt"></i> Logout</a>
                        </div>
                    </a>

                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('#') ?>" class="brand-link">
                <img src="<?= base_url('assets/image/smkn1icon.ico') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SMKN 1 GnR</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets/template/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div> -->

                <!-- SidebarSearch Form -->
                <!-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <!-- <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Starter Pages
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Active Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inactive Page</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-fw fa-database""></i>
                                <p>
                                    Data Barang
                                    <i class=" right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('Barang') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'Barang') echo 'active' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Semua Barang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/flot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TKJ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/flot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>MM</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TKR</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/uplot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TM</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/uplot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>AK</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/uplot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>AP</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="<?php echo base_url('Barang')
                                        ?>" class="nav-link <?php if ($this->uri->segment(1) == 'Barang') echo 'active' ?>">
                                <i class="fas fa-fw fa-database"></i>
                               
                                <p>
                                    Data Barang
                                    
                                </p>
                            </a>
                        </li> -->

                        <?php if ($this->session->userdata('akses') == '1') { ?>

                            <li class="nav-item">
                                <a href="<?php echo base_url('BarangRusak')
                                            ?>" class="nav-link <?php if ($this->uri->segment(1) == 'BarangRusak') echo 'active' ?>">
                                    <i class="fas fa-fw fa-database"></i>
                                    <!-- <i class="fas fa-fw fa-archive"></i> -->
                                    <p>
                                        Data Barang Rusakk
                                        <!-- <span class="right badge badge-danger">New</span> -->
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="<?php echo base_url('Transaksi') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'Transaksi') echo 'active' ?>">
                                    <i class="fas fa-fw fa-file-invoice"></i>
                                    <p>
                                        Transaksi Barang
                                        <!-- <span class="right badge badge-danger">New</span> -->
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="<?php echo base_url('User') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'User') echo 'active' ?>">
                                    <i class="fas fa-fw fa-users-cog"></i>
                                    <!-- <i class="fa-regular fa-users-gear"></i> -->

                                    <p>
                                        Admin
                                        <!-- <span class="right badge badge-danger">New</span> -->
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="<?php echo base_url('Project') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'Project') echo 'active' ?>">
                                    <!-- <i class="fas fa-fw fa-users"></i> -->
                                    <i class="fas fa-fw fa-project-diagram"></i>

                                    <p>
                                        Pilot Project
                                        <!-- <span class="right badge badge-danger">New</span> -->
                                    </p>
                                </a>
                            </li>
                        <?php } ?>

                        <li class="nav-item">
                            <a href="<?php echo base_url('Arsip') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'Arsip') echo 'active' ?>">
                                <!-- <i class="fas fa-fw fa-users"></i> -->
                                <i class="fas fa-fw fa-archive"></i>

                                <p>
                                    Dokumen
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url('Auth/Logout') ?>" class="nav-link" id="btn-logout">
                                <!-- <i class="fas fa-fw fa-users"></i> -->
                                <i class="fas fa-fw fa-sign-out-alt"></i>

                                <p>
                                    Logout
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>