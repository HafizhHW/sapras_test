 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Simple Tables</h1>
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
             <!-- <div class="row">
                 <div class="col-6 col-md-6">
                     <div class="card">
                         <div class="card-header">
                             <div class="row">
                                 <div class="col-8 col-md-8 col-sm-8">
                                     <h3 class="text-left">Data Project</h3>
                                     <span>
                                        <h3>Form edit Document blm diganti->Upload</h3>
                                    </span>
                                 </div>
                                 <div class="col-4 col-md-4 col-sm-4  ">
                                     <?php if ($this->session->userdata('akses') == '1') { ?>
                                         <div class="btn-group btn-group-md float-right">
                                             <a class="btn btn-md btn-success mx-auto" data-toggle="" data-target="" href="<?= base_url('Project/add_project') ?>" title="tambah barang" role="button"><i class="fa-solid fa-file-circle-plus"></i></a>
                                         </div>
                                     <?php } ?>
                                 </div>
                             </div>
                         </div>
                         /.card-header
                         <div class="card-body">
                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th style="width: 10px">No</th>
                                         <th>Nama</th>
                                         <th style="width: 20px">Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($admin as $adm) : ?>
                                         <tr>
                                             <td><?= $no++ ?></td>
                                             <td><?= $adm->nama ?></td>
                                             <td>
                                                 <div class="btn-group btn-group-sm d-flex justify-content-center">
                                                     <a href="<?= base_url('User/delete_admin/' . $adm->id_admin) ?>" class="btn btn-danger" title="hapus"><i class="fa-solid fa-trash-can" onclick="return confirm('Apakah anda yakin menghapus data ini?')"></i></a>
                                                 </div>
                                             </td>
                                         </tr>
                                     <?php endforeach ?>
                                 </tbody>

                             </table>
                         </div>
                         /.card-body
                     </div>
                 </div>
             </div> -->
             <div class="row">
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

                             <table class="table table-bordered">
                                 <thead>
                                     <tr>
                                         <th style="width: 10px">No</th>
                                         <th>Nama</th>
                                         <th style="width: 20px">Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($admin as $adm) : ?>
                                         <tr>
                                             <td><?= $no++ ?></td>
                                             <td><?= $adm->nama ?></td>
                                             <td>
                                                 <div class="btn-group btn-group-sm d-flex justify-content-center">
                                                     <a href="<?= base_url('User/delete_admin/' . $adm->id_admin) ?>" class="btn btn-danger" title="hapus"><i class="fas fa-trash" onclick="return confirm('Apakah anda yakin menghapus data ini?')"></i></a>
                                                 </div>
                                             </td>
                                         </tr>
                                     <?php endforeach ?>
                                 </tbody>
                             </table>

                         </div>
                         <!-- /.card-body -->
                         <div class="card-footer clearfix">
                             <ul class="pagination pagination-sm m-0 float-right">
                                 <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                                 <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                             </ul>
                         </div>
                     </div>
                     <!-- /.card -->
                 </div>
                 <!-- /.col -->

                 <div class="col-md-6">
                     <div class="card">
                         <div class="card-header">
                             <div class="row">
                                 <div class="col-10 col-md-10 col-sm-10">
                                     <h5 class="text-left">Tebel User</h5>
                                 </div>
                                 <div class="col-2 col-md-2 col-sm-2 float-right ">
                                     <a class="btn btn-sm btn-success float-right  mx-auto" href="<?= base_url('User/add_user') ?>" role="button"><i class="fa-solid fa-file-circle-plus"></i></a>
                                 </div>
                             </div>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <table class="table table-bordered">
                                 <thead>
                                     <tr>
                                         <th style="width: 10px">No</th>
                                         <th>Nama</th>
                                         <th style="width: 20px">Aksi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($user as $usr) : ?>
                                         <tr>
                                             <td><?= $no++ ?></td>
                                             <td><?= $usr->nama ?></td>
                                             <td>
                                                 <div class="btn-group btn-group-sm d-flex justify-content-center">
                                                     <a href="<?= base_url('User/delete_user/' . $usr->id_user) ?>" class="btn btn-danger" title="hapus"><i class="fas fa-trash" onclick="return confirm('Apakah anda yakin menghapus data ini?')"></i></a>
                                                 </div>
                                             </td>
                                         </tr>
                                     <?php endforeach ?>
                                 </tbody>
                             </table>
                         </div>
                         <!-- /.card-body -->
                         <div class="card-footer clearfix">
                             <ul class="pagination pagination-sm m-0 float-right">
                                 <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                                 <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                             </ul>
                         </div>
                     </div>
                     <!-- /.card -->
                     <!-- /.card -->
                 </div>
                 <!-- /.col -->
             </div>
             <!-- /.row -->
         </div><!-- /.container-fluid -->
     </section>
     <section>
         <div class="container">
             <h1><span>Pagination belum diatur</span></h1>
         </div>

     </section>
     <!-- /.content -->