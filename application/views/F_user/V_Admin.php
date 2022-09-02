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
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="<?php base_url('Barang') ?>"><?= $judul ?></a></li>
                         <li class="breadcrumb-item active"><?= $title ?></li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>
             <div class="row d-flex justify-content-center">
                 <div class="col-md-6">
                     <div class="card">
                         <div class="card-header">
                             <div class="row">
                                 <div class="col-10 col-md-10 col-sm-10">
                                     <h5 class="text-left">Tebel Admin</h5>
                                 </div>
                                 <div class="col-2 col-md-2 col-sm-2 float-right ">
                                     <a class="btn btn-sm btn-success float-right  mx-auto" href="<?= base_url('User/add_admin') ?>" role="button" title="tambah"><i class="fa-solid fa-file-circle-plus"></i></a>
                                 </div>
                             </div>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <table id="example1" class="table table-bordered table-striped">
                                 <!-- <table class="table table-bordered"> -->
                                 <thead>
                                     <tr>
                                         <th style="width: 10px">No</th>
                                         <th>Nama</th>
                                         <th>Username</th>
                                         <th style="width: 20px">Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($admin as $adm) : ?>
                                         <tr>
                                             <td><?= $no++ ?></td>
                                             <td><?= $adm->nama ?></td>
                                             <td><?= $adm->username ?></td>
                                             <td>
                                                 <div class="btn-group btn-group-sm d-flex justify-content-center">
                                                     <a href="<?= base_url('User/delete_admin/' . $adm->id_admin) ?>" class="btn btn-danger" title="hapus" id="btn-hapus"><i class="fas fa-trash"></i></a>
                                                 </div>
                                             </td>
                                         </tr>
                                     <?php endforeach ?>
                                 </tbody>
                             </table>

                         </div>

                         <!-- /.card-body -->
                         <div class="card-footer clearfix">
                             <div class="row">
                                 <div class="col">
                                     <!-- Tampilkan pagination -->
                                     <!-- <?php echo $pagination1; ?> -->
                                     <!-- <?php echo $this->pagination->create_links(); ?> -->
                                 </div>
                             </div>
                             <!-- <ul class="pagination pagination-sm m-0 float-right">
                                 <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                                 <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                             </ul> -->
                         </div>
                     </div>
                     <!-- /.card -->
                 </div>
                 <!-- /.col -->
             </div>

         </div><!-- /.container-fluid -->
     </section>

     <!-- /.content -->