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
            <div class="row justify-content-center">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <?= $this->session->flashdata('pesan'); ?>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Barang</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php foreach ($barang as $brg) { ?>
                            <?php echo form_open_multipart('Barang/update_act/' . $brg->id_barang); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="hidden" name="id_barang" class="form-control" value="<?= $brg->id_barang ?>">
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3 required"> Nama Barang </label>
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
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <label class="control-label col-xs-3 required"> Jumlah Barang </label>
                                            <div class="col-xs-8">
                                                <input type="text" name="jml_barang" class="form-control" value="<?= $brg->jml_barang ?>">
                                                <div class="alert-danger"><?php echo form_error('jml_barang'); ?></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label col-xs-3"> Unit </label>
                                            <div class="col-xs-8">
                                                <input type="text" name="unit" class="form-control" value="<?= $brg->unit ?>">
                                                <div class="alert-danger"><?php echo form_error('unit'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3 required"> Jenis Barang </label>
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
                                    <label class="control-label col-xs-3 required"> Tahun Pengadaan </label>
                                    <div class="col-xs-8">
                                        <input type="date" name="thn_pengadaan" class="form-control" value="<?= $brg->thn_pengadaan ?>">
                                        <div class="alert-danger"><?php echo form_error('thn_pengadaan'); ?></div>
                                    </div>
                                </div>

                                <label class="control-label col-xs-3 required"> Penempatan </span></label>
                                <div class="input-group">

                                    <select class="custom-select" id="inputGroupSelect04" name="id_tempat" required>
                                        <option value="<?= $brg->id_tempat ?>">Pilih Tempat</option>
                                        <?php foreach ($tempat as $t) {
                                            echo "<option value=" . $t->id_tempat . ">" . $t->nm_tempat . "</option>";
                                        } ?>

                                    </select>

                                    <?php if ($this->session->userdata('akses') == '1') { ?>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" title="tambah tempat"> <i class="fa-solid fa-plus fa-xl"></i></button>
                                        </div>
                                    <?php } ?>


                                </div>

                                <label class="control-label col-xs-3 required"> Jurusan </span></label>
                                <div class="input-group">

                                    <select class="custom-select" id="inputGroupSelect04" name="id_jurusan" required>
                                        <option value="<?= $brg->id_jurusan ?>">Pilih Jurusan</option>
                                        <?php foreach ($jurusan as $j) {
                                            echo "<option value=" . $j->id_jurusan . ">" . $j->nm_jurusan . "</option>";
                                        } ?>

                                    </select>

                                    <?php if ($this->session->userdata('akses') == '1') { ?>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" title="tambah tempat"> <i class="fa-solid fa-plus fa-xl"></i></button>
                                        </div>
                                    <?php } ?>


                                </div>

                                <div class="form-group mt-3">
                                    <label class="control-label col-xs-3"> Dokumen</label>
                                    <div class="col-xs-8">
                                        <!-- <input type="hidden" name="old_doc_barang" class="form-control" value="<?= $brg->doc_barang ?>"> -->
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile03" name="doc_barang">
                                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                        </div>
                                        <!-- <input type="file" name="doc_barang" class="form-control"> -->
                                        <div class="alert-danger"><?php echo form_error('doc_barang'); ?></div>
                                        <?php echo $this->session->flashdata('error'); ?>
                                        <small>File type : pdf, doc, docx, xls, xlsx, jpg, jpeg, png</small><br>
                                        <small>Max size : 3Mb</small>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                <label for="exampleInputFile">Dokumen</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="doc_barang" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div> -->

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <div class="btn float-right">
                                    <button type="submit" class="btn btn-sm btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                            <!-- </form> -->
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