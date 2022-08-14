<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $judul ?></h1>
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
            <div class="row">
                <div class="col-12">
                    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-8 col-md-8 col-sm-8">
                                    <h3 class="text-left">Data Project</h3>
                                    <!-- <span>
                                        <h3>Form edit Document blm diganti->Upload</h3>
                                    </span> -->
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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 20px" class="text-center">No</th>
                                        <th style="width: 100px; margin:0 auto; text-align:center;">Nama Project</th>
                                        <th style="width: 100px; margin:0 auto; text-align:center;">Tanggal Project</th>
                                        <th style="width: 100px; margin:0 auto; text-align:center;">Dokumen</th>
                                        <th style="width: 20px" class="text-center">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($project as $pro) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++ ?></td>
                                            <td class="text-center"><?= $pro->nm_project ?></td>
                                            <td class="text-center"><?= $pro->tgl_project ?></td>
                                            <td class="text-center">
                                                <?php if (!empty($pro->doc_project)) {
                                                    echo '<a href="' . base_url('Project/download/' . $pro->id_project) . 'Project/download/"' . $pro->id_project . ' class="btn btn-warning btn-sm float-center" title="unduh">
                                                    <i class="fa-solid fa-cloud-arrow-down"></i></a>';
                                                } else {
                                                    echo "Tidak Memiliki Dokumen";
                                                } ?>

                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-md ">

                                                    <a href="<?= base_url('Project/edit_project/' . $pro->id_project) ?>" class="btn btn-info" title="edit"><i class="fa-solid fa-edit"></i></a>

                                                    <a href="<?= base_url('Project/delete_project/' . $pro->id_project) ?>" class="btn btn-danger" title="hapus" id="btn-hapus"><i class="fa-solid fa-trash-can"></i></a>

                                                </div>

                                            </td>
                                        </tr>

                                    <?php endforeach ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

    </section>
    <!-- /.content -->