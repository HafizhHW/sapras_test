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
                    <?= $this->session->flashdata('pesan'); ?>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-8 col-md-8 col-sm-8">
                                    <h3 class="text-left">Tebel Transaksi</h3>
                                    <!-- <span>
                                        <h3>Form edit Document blm diganti->Upload</h3>
                                    </span> -->
                                </div>
                                <div class="col-4 col-md-4 col-sm-4  ">
                                    <div class="btn-group btn-group-md float-right">
                                        <a class="btn btn-md btn-success mx-auto" data-toggle="" data-target="" href="<?= base_url('Transaksi/add_transaksi') ?>" title="tambah barang" role="button"><i class="fa-solid fa-file-circle-plus"></i></a>
                                        <a class="btn btn-md btn-info mx-auto" href="" onclick="window.open('pdf')" title="cetak"><i class="fa-solid fa-print"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 20px" class="text-center">No</th>
                                        <th style="width: 100px; margin:0 auto; text-align:center;">Nama Barang</th>
                                        <th class="text-center">Jumlah Barang</th>
                                        <th style="width: 100px; margin:0 auto; text-align:center;">Tanggal Transaksi</th>
                                        <th class="text-center">Nama Penerima</th>
                                        <th class="text-center">Keterangan</th>
                                        <th class="text-center">Admin</th>
                                        <th style="width: 20px" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($join as $trs) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++ ?></td>
                                            <td class="text-center"><?= $trs->nm_barang ?></td>
                                            <td class="text-center"><?= $trs->jml_barang ?>&nbsp;<?= $trs->unit ?></td>
                                            <td class="text-center"><?= $trs->tgl_transaksi ?></td>
                                            <td class="text-center"><?= $trs->nm_penerima ?></td>
                                            <td class="text-center"><?= $trs->keterangan ?></td>
                                            <td class="text-center"><?= $trs->nama  ?></td>

                                            <td class="text-center">
                                                <div class="btn-group btn-group-md ">
                                                    <!-- <button class="btn btn-success" title="edit" data-toggle="modal" data-target="#tambah_barang<?= $brg->id_barang ?>"><i class="fas fa-edit"></i></button> -->
                                                    <a href="<?= base_url('Transaksi/edit_transaksi/' . $trs->id_transaksi) ?>" class="btn btn-info" title="edit"><i class="fa-solid fa-edit"></i></a>

                                                    <a href="<?= base_url('Transaksi/delete_act/' . $trs->id_transaksi) ?>" class="btn btn-danger" title="hapus"><i class="fa-solid fa-trash-can" onclick="return confirm('Apakah anda yakin menghapus data ini?')"></i></a>

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