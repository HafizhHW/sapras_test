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
                        <li class="breadcrumb-item"><a href="<?php base_url('BarangRusak') ?>"><?= $judul ?></a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <!-- <?= $this->session->flashdata('pesan'); ?> -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Barang Rusak</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php foreach ($brgR as $br) { ?>
                            <?php echo form_open_multipart('BarangRusak/edit_act/' . $br->id_br); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3 required"> Nama Barang </label>
                                    <div class="col-xs-8">
                                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="id_barang">
                                            <?php foreach ($barang as $b) {
                                                echo "<option value=" . $b->id_barang . ">" . $b->nm_barang . "</option>";
                                            } ?>
                                        </select>
                                        <div class="alert-danger"><?php echo form_error('id_barang'); ?></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3 required"> Jumlah Barang </label>
                                    <div class="col-xs-8">
                                        <input type="text" name="jml_barang" class="form-control" value="<?= $br->jml_barang ?>">
                                        <div class="alert-danger"><?php echo form_error('jml_barang'); ?></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3 required"> Penempatan </label>
                                    <div class="col-xs-8">
                                        <select class="custom-select" id="inputGroupSelect04" name="id_tempat">
                                            <?php foreach ($tempat as $t) {
                                                echo "<option value=" . $t->id_tempat . ">" . $t->nm_tempat . "</option>";
                                            } ?>
                                        </select>
                                        <div class="alert-danger"><?php echo form_error('id_tempat'); ?></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3 required"> Keterangan </label>
                                    <div class="col-xs-8">
                                        <input type="text" name="keterangan" class="form-control" value="<?= $br->keterangan ?>">
                                        <div class="alert-danger"><?php echo form_error('keterangan'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <div class="btn float-right">
                                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Reset</button> -->
                                    <button type="reset" class="btn btn-sm btn-warning"><i class="fa-solid fa-arrow-rotate-left"></i>Reset</button>
                                    <button type="submit" class="btn btn-sm btn-success"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                                    <!-- <a class="btn btn-sm btn-danger" type="reset"><i class="fa-solid fa-arrow-rotate-left"></i> Reset </a>
                                        <a class="btn btn-sm btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i> Simpan </a> -->
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                            <?php echo $this->session->flashdata('error'); ?>
                        <?php } ?>

                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->