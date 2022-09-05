 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Administrator</h1>
                 </div>
                 <div class="col-sm-6">
                     <!-- <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="<?php base_url('Barang') ?>"><?= $judul ?></a></li>
                         <li class="breadcrumb-item active"><?= $title ?></li>
                     </ol> -->
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->

     <section class="content">
         <div class="container">
             <div class="row justify-content-center text-center">

                 <div class="col-lg-4 col-md-6 col-8 mb-3 ">
                     <!-- <div class="col-md-4 mb-3"> -->
                     <div class="card p-5" style="width: 18rem; height:22rem;background-color:transparent;">
                         <a href="<?= base_url('User/ViewAdmin') ?>">
                             <img src="<?php echo base_url(); ?>assets\image\management.png" class="card-img-top" alt="..." title="admin">
                         </a>
                         <div class="card-body ">
                             <h5 class="card-text">Data Admin</h5>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 col-8 mb-3">
                     <!-- <div class="col-md-4  mb-3"> -->
                     <div class="card p-5" style="width: 18rem; height:22rem; background-color:transparent;">
                         <a href="<?= base_url('User/ViewUser') ?>">
                             <img src="<?php echo base_url(); ?>assets\image\businessman.png" class="card-img-top" alt="..." title="user">
                         </a>
                         <div class="card-body ">
                             <h5 class="card-text">Data Pengguna</h5>
                         </div>
                     </div>

                 </div>

                 <div class="col-lg-4 col-md-6 col-8 mb-3">
                     <!-- <div class="col-md-4  mb-3"> -->
                     <div class="card p-5" style="width: 18rem; height:22rem ;background-color:transparent;">
                         <a href="<?= base_url('User/ViewTempat') ?>">
                             <img src="<?php echo base_url(); ?>assets\image\location-pin.png" class="card-img-top" alt="..." style="height:215px" title="tempat">
                         </a>
                         <div class="card-body ">
                             <h5 class="card-text">Data Tempat Penyimpanan</h5>
                         </div>
                     </div>

                 </div>
             </div>

         </div>

     </section>
     <!-- /.content -->