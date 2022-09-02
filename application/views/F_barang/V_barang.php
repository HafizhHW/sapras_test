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

                    <!-- <?php if ($this->session->flashdata('success')) : ?>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Selamat Datang',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        </script>
                    <?php endif; ?> -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-8 col-md-8 col-sm-8">
                                    <h3 class="text-left">Tebel Barang</h3>
                                    <!-- <span>
                                        <h3>Form edit Document blm diganti->Upload</h3>
                                    </span> -->
                                </div>
                                <div class="col-4 col-md-4 col-sm-4  ">
                                    <div class="btn-group btn-group-md float-right">
                                        <a class="btn btn-md btn-success mx-auto" data-toggle="" data-target="" href="<?= base_url('Barang/Add_barang') ?>" title="tambah barang" role="button"><i class="fa-solid fa-file-circle-plus"></i></a>
                                        <a class="btn btn-md btn-info mx-auto" href="" onclick="window.open('Barang/pdf')" title="cetak"><i class="fa-solid fa-print"></i></a>
                                        <!-- <div class="btn-group float-right">
                                            <button type="button" class="btn btn-info btn-md dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="cetak" target="_blank">
                                                <i class="fa-solid fa-print"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="<?= base_url('Barang/print') ?>">Cetak Barang</a>
                                                <a class="dropdown-item" href="" onclick="window.open('print')">Cetak Barang</a>
                                                <a class="dropdown-item" href="" onclick="window.print('Barang/print')">Cetak Barang</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="" onclick="window.open('pdf')">Export Barang</a>
                                                <a class="dropdown-item" href="<?= base_url('Barang/pdf') ?>">Export Barang</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col col-md-3">
                                    <?php if ($this->session->userdata('akses') == '1') { ?>
                                        <div class="input-group">

                                            <select class="custom-select" id="inputGroupSelect04" name="id_tempat">
                                                <option value="">Pilih Tempat</option>
                                                <?php foreach ($tempat as $t) {
                                                    echo "<option value=" . $t->id_tempat . ">" . $t->nm_tempat . "</option>";
                                                } ?>
                                            </select>



                                        </div>
                                        <!-- <div class="input-group-append"> -->

                                        <!-- </div> -->
                                </div>
                                <div class="col col-md-2">
                                    <a href="<?= base_url('Barang/filter/') ?>" class="btn btn-outline-success" title="search"><i class="fa-solid fa-magnifying-glass"></i></a>
                                    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button> -->
                                </div>
                            <?php } ?>

                            </div>

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 20px" class="text-center">No</th>
                                        <th style="width: 100px" class="text-center">Nama Barang</th>
                                        <th style="width: 100px" class="text-center"> No Seri</th>
                                        <th class="text-center">Jumlah Barang</th>
                                        <th class="text-center">Jenis Barang</th>
                                        <th class="text-center">Jenis Anggaran</th>
                                        <th class="text-center">Tahun Pengadaan</th>
                                        <th class="text-center">Penempatan</th>
                                        <th class="text-center">Dokumen</th>
                                        <th style="width: 20px" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($join as $brg) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++ ?></td>
                                            <td><?= $brg->nm_barang ?></td>
                                            <td class="text-center"><?= $brg->no_seri ?></td>
                                            <td class="text-center"><?= $brg->jml_barang ?>&nbsp;<?= $brg->unit ?></td>
                                            <td class="text-center"><?= $brg->kat_barang ?></td>
                                            <td class="text-center"><?= $brg->kat_anggaran ?></td>
                                            <td class="text-center"><?= $brg->thn_pengadaan ?></td>
                                            <td class="text-center"><?= $brg->nm_tempat ?></td>
                                            <!-- <td class="text-center">
                                                <a href="<?php echo base_url() . 'Barang/download/' . $brg->id_barang; ?>" class="btn btn-warning btn-sm float-center" title="unduh"><i class="fa-solid fa-cloud-arrow-down"></i></a>
                                            </td> -->
                                            <td class="text-center">
                                                <?php if (!empty($brg->doc_barang)) {
                                                    echo '<a href="' . base_url('Barang/download/' . $brg->id_barang) . 'Barang/download/"' . $brg->id_barang . ' class="btn btn-warning btn-sm float-center" title="unduh">
                                                    <i class="fa-solid fa-cloud-arrow-down"></i></a>';
                                                } else {
                                                    echo "Tidak Memiliki Dokumen";
                                                } ?>

                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-md ">
                                                    <!-- <button class="btn btn-success" title="edit" data-toggle="modal" data-target="#tambah_barang<?= $brg->id_barang ?>"><i class="fas fa-edit"></i></button> -->
                                                    <a href="<?= base_url('Barang/edit_barang/' . $brg->id_barang) ?>" class="btn btn-info" title="edit"><i class="fa-solid fa-edit"></i></a>

                                                    <!-- <a href="<?= base_url('Barang/delete_brg/' . $brg->id_barang) ?>" class="btn btn-danger" title="hapus"><i class="fa-solid fa-trash-can" onclick="return confirm('Apakah anda yakin menghapus data ini?')"></i></a> -->
                                                    <a href="<?= base_url('Barang/delete_brg/' . $brg->id_barang) ?>" class="btn btn-danger" title="hapus" id="btn-hapus"><i class="fa-solid fa-trash-can"></i></a>

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

        <!-- === MODAL TAMBAH BARANG ==== -->
        <!-- <?php foreach ($barang as $brg) { ?>
            <div class="modal fade" id="tambah_barang<?= $brg->id_barang ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Barang</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('Barang/update/' . $brg->id_barang) ?>" method="POST">
                                <? //php echo form_open_multipart('Barang/add_cust'); 
                                ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="control-label col-xs-3"> Nama Barang * </label>
                                        <div class="col-xs-8">
                                            <input type="text" name="nm_barang" class="form-control" value="<?= $brg->nm_barang ?>">
                                            <div class="alert-danger"><?php echo form_error('nm_barang'); ?></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-3"> No Seri </label>
                                        <div class="col-xs-8">
                                            <input type="text" name="no_seri" class="form-control" value="<?= $brg->no_seri ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-3"> Jumlah Barang *</label>
                                        <div class="col-xs-8">
                                            <input type="text" name="jml_barang" class="form-control" value="<?= $brg->jml_barang ?>">
                                            <div class="alert-danger"><?php echo form_error('jml_barang'); ?></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-3"> Jenis Barang *</label>
                                        <div class="col-xs-8">
                                            <input type="text" name="kat_barang" class="form-control" value="<?= $brg->kat_barang ?>">
                                            <div class="alert-danger"><?php echo form_error('kat_barang'); ?></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-3"> Jenis Anggaran </label>
                                        <div class="col-xs-8">
                                            <input type="text" name="kat_anggaran" class="form-control" value="<?= $brg->kat_anggaran ?>">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-3"> Tahun Pengadaan *</label>
                                        <div class="col-xs-8">
                                            <input type="date" name="thn_pengadaan" class="form-control" value="<?= $brg->thn_pengadaan ?>">
                                            <div class="alert-danger"><?php echo form_error('thn_pengadaan'); ?></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-3"> Penempatan *</label>
                                        <div class="col-xs-8">
                                            <input type="text" name="penempatan" class="form-control" value="<?= $brg->penempatan ?>">
                                            <div class="alert-danger"><?php echo form_error('penempatan'); ?></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Dokumen</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="doc_barang" class="custom-file-input" id="exampleInputFile" value="<?= $brg->doc_barang ?>">
                                                <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                /.card-body

                                <div class="card-footer">
                                    <div class="btn float-right">

                                        <button type="submit" class="btn btn-sm btn-success"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>

                                    </div>
                                </div>
                                <?php echo form_close()
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            /.modal-dialog
        <?php } ?> -->
        <!-- === END MODAL TAMBAH BARANG === -->
    </section>
    <!-- /.content -->