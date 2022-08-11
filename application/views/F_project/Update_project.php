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
                        <li class="breadcrumb-item"><a href="<?php base_url('Project') ?>"><?= $judul ?></a></li>
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
                            <h3 class="card-title">Edit Project</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php foreach ($project as $p) { ?>
                            <?php echo form_open_multipart('Project/update_act/' . $p->id_project); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="hidden" name="id_project" class="form-control" value="<?= $p->id_project ?>">
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3 required"> Nama Project </label>
                                    <div class="col-xs-8">
                                        <input type="text" name="nm_project" class="form-control" value="<?= $p->nm_project ?>">
                                        <div class="alert-danger"><?php echo form_error('nm_project'); ?></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3 required"> Tanggal Project </label>
                                    <div class="col-xs-8">
                                        <input type="date" name="tgl_project" class="form-control" value="<?= $p->tgl_project ?>">
                                        <div class="text-danger"><?php echo form_error('tgl_project'); ?></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3"> Dokumen</label>
                                    <div class="col-xs-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile03" name="doc_project" value="<?= $p->doc_project ?>">
                                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                        </div>
                                        <!-- <input type="file" name="doc_project" class="form-control" value="<?= $p->doc_project ?>" id="file" accept=".png,.jpg,.jpeg,.pdf,.doc,.docx,.xls,.xlsx"> -->
                                        <small class="text-danger">
                                            <div class="text-danger"><?php echo form_error('doc_project'); ?></div>

                                            <?php if ($project = ('doc_project')) {
                                                echo $this->session->flashdata('error');
                                            }
                                            ?>
                                        </small><br>


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