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
                    <!-- <?= $this->session->flashdata('pesan'); ?> -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Barang</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <?php echo form_open_multipart('Barang/add_act'); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label col-xs-3 required"> Nama Barang </label>
                                <div class="col-xs-8">
                                    <input type="text" name="nm_barang" class="form-control" placeholder="Nama Barang">
                                    <div class="alert-danger"><?php echo form_error('nm_barang'); ?></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3"> No Seri </label>
                                <div class="col-xs-8">
                                    <input type="text" name="no_seri" class="form-control" placeholder="No Seri">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <label class="control-label col-xs-3 required"> Jumlah Barang </label>
                                        <div class="col-xs-8">
                                            <input type="text" name="jml_barang" class="form-control" placeholder="Jumlah Barang">
                                            <div class="alert-danger"><?php echo form_error('jml_barang'); ?></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label col-xs-3"> Unit </label>
                                        <div class="col-xs-8">
                                            <input type="text" name="unit" class="form-control" placeholder="unit">
                                            <div class="alert-danger"><?php echo form_error('unit'); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3 required"> Jenis Barang </label>
                                <div class="col-xs-8">
                                    <input type="text" name="kat_barang" class="form-control" placeholder="Jenis Barang">
                                    <div class="alert-danger"><?php echo form_error('kat_barang'); ?></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3"> Jenis Anggaran </label>
                                <div class="col-xs-8">
                                    <input type="text" name="kat_anggaran" class="form-control" placeholder="Jenis Anggaran">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3 required"> Tahun Pengadaan </label>
                                <div class="col-xs-8">
                                    <input type="date" name="thn_pengadaan" class="form-control" placeholder="Tahun Pengadaan">
                                    <div class="alert-danger"><?php echo form_error('thn_pengadaan'); ?></div>
                                </div>
                            </div>

                            <label class="control-label col-xs-3 required"> Penempatan </span></label>
                            <div class="input-group">

                                <select class="custom-select" id="inputGroupSelect04" name="id_tempat">
                                    <option value="">Pilih Tempat</option>
                                    <?php foreach ($tempat as $t) {
                                        echo "<option value=" . $t->id_tempat . ">" . $t->nm_tempat . "</option>";
                                    } ?>
                                </select>

                                <?php if ($this->session->userdata('akses') == '1') { ?>
                                    <div class="input-group-append">
                                        <a class="btn btn-primary" href="<?php echo base_url('User/add_tempat') ?>" title="tambah tempat"> <i class="fa-solid fa-plus fa-xl"></i></a>
                                        <!-- <button class="btn btn-primary" type="button" title="tambah tempat"> <i class="fa-solid fa-plus fa-xl"></i></button> -->
                                    </div>
                                <?php } ?>


                            </div>

                            <label class="control-label col-xs-3 required pt-3"> Jurusan </span></label>
                            <div class="input-group">

                                <select class="custom-select" id="inputGroupSelect04" name="id_jurusan">
                                    <option value="">Pilih Jurusan</option>
                                    <?php foreach ($jurusan as $j) {
                                        echo "<option value=" . $j->id_jurusan . ">" . $j->nm_jurusan . "</option>";
                                    } ?>
                                </select>

                                <?php if ($this->session->userdata('akses') == '1') { ?>
                                    <div class="input-group-append">
                                        <a class="btn btn-primary" href="<?php echo base_url('User/add_tempat') ?>" title="tambah tempat"> <i class="fa-solid fa-plus fa-xl"></i></a>
                                        <!-- <button class="btn btn-primary" type="button" title="tambah tempat"> <i class="fa-solid fa-plus fa-xl"></i></button> -->
                                    </div>
                                <?php } ?>


                            </div>
                            <!--  -->

                            <!-- <div class="form-group">
                                <label class="control-label col-xs-3 required"> Penempatan </span></label>
                                <div class="col-xs-8">
                                    <input type="text" name="penempatan" class="form-control" placeholder="Penempatan">
                                    <div class="alert-danger"><?php echo form_error('penempatan'); ?></div>
                                </div>
                            </div> -->

                            <div class="form-group mt-3">
                                <label class="control-label col-xs-3"> Dokumen</label>
                                <div class="col-xs-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile03" name="doc_barang">
                                        <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                    </div>
                                    <!-- <input type="file" name="doc_barang" class="form-control" placeholder="Pilih File" id="file" accept=".png,.jpg,.jpeg,.pdf,.doc,.docx,.xls,.xlsx"> -->
                                    <small class="text-danger">
                                        <div class="alert-danger"><?php echo form_error('doc_barang'); ?></div>

                                        <?php if ($barang = ('doc_barang')) {
                                            echo $this->session->flashdata('error');
                                        }
                                        ?>
                                    </small><br>


                                    <small>File type : pdf, doc, docx, xls, xlsx, jpg, jpeg, png</small><br>
                                    <small>Max size : 3Mb</small>
                                </div>
                            </div>

                            <!-- <script type="text/javascript">
                                function validation(thisform) {
                                    with(thisform) {
                                        if (validateFileExtension(file, "valid_msg", "pdf/office/image files are only allowed!",
                                                new Array("jpg", "pdf", "jpeg", "gif", "png", "doc", "docx", "xls", "xlsx", "ppt", "txt")) == false) {
                                            return false;
                                        }
                                        if (validateFileSize(file, 3145728, "valid_msg", "Document size should be less than 3MB !") == false) {
                                            return false;
                                        }
                                    }
                                }
                            </script> -->

                            <!-- <script type="text/javascript">
                                var uploadField = document.getElementById("file");
                                uploadField.onchange = function() {
                                    if (this.files[0].size > 3000000) { // ini untuk ukuran 800KB, 1000000 untuk 1 MB.
                                        alert("Maaf. File Terlalu Besar ! Maksimal Upload 3 MB");
                                        this.value = "";
                                    };
                                };
                            </script> -->

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
                                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Reset</button> -->
                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa-solid fa-arrow-rotate-left"></i>Reset</button>
                                <button type="submit" class="btn btn-sm btn-success"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                                <!-- <a class="btn btn-sm btn-danger" type="reset"><i class="fa-solid fa-arrow-rotate-left"></i> Reset </a>
                                        <a class="btn btn-sm btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i> Simpan </a> -->
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                        <!-- <?php echo $this->session->flashdata('error'); ?> -->

                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->