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
                        <li class="breadcrumb-item"><a href="<?= base_url('Arsip') ?>"><?= $judul ?></a></li>
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
                            <h3 class="card-title">Tambah Dokumen</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <?php echo form_open_multipart('Arsip/add_act'); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label col-xs-3 required"> Nama Dokumen </label>
                                <div class="col-xs-8">
                                    <input type="text" name="nm_arsip" class="form-control" placeholder="">
                                    <div class="text-danger"><?php echo form_error('nm_arsip'); ?></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3"> Dokumen</label>
                                <div class="col-xs-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile03" name="doc_arsip">
                                        <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                    </div>
                                    <!-- <input type="file" name="doc_arsip" class="form-control" placeholder="Pilih File" id="file" accept=".pdf,.doc,.docx"> -->
                                    <small class="text-danger">
                                        <div class="text-danger"><?php echo form_error('doc_arsip'); ?></div>

                                        <?php if ($project = ('doc_arsip')) {
                                            echo $this->session->flashdata('error');
                                        }
                                        ?>
                                    </small><br>


                                    <small>File type : pdf, doc, docx, xls, xlsx, jpg, jpeg, png</small><br>
                                    <small>Max size : 3Mb</small>
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

                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->