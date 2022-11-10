<style>
    .required:after {
        content: " *";
        color: red;
    }
</style>
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
                        <li class="breadcrumb-item"><a href="<?php base_url('Arsip') ?>"><?= $judul ?></a></li>
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
                    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <?php echo form_open_multipart('Auth/update_profile'); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label col-xs-3 required"> Nama </label>
                                <div class="col-xs-8">
                                    <input type="text" name="nama" class="form-control" value="<?= $this->session->userdata("ses_nama") ?>">
                                    <input type="hidden" name="akses" class="form-control" value="<?= $this->session->userdata("akses") ?>" readonly>
                                    <input type="hidden" name="id" class="form-control" value="<?= $this->session->userdata("ses_id") ?>" readonly>
                                    <div class="text-danger"><?php echo form_error('nama'); ?></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3 required"> Username </label>
                                <div class="col-xs-8">
                                    <input type="text" name="username" class="form-control" value="<?= $this->session->userdata("ses_username") ?>">
                                    <div class="text-danger"><?php echo form_error('username'); ?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3"> Password </label>
                                <div class="col-xs-8">
                                    <input type="password" name="password" class="form-control" value="">
                                    <div class="text-danger"><?php echo form_error('password'); ?></div>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label class="control-label col-xs-3 required">Current Password </label>
                                <div class="col-xs-8">
                                    <input type="password" name="pass" class="form-control" id="current_password">
                                    <div class="text-danger"><?php echo form_error('pass'); ?></div>
                                    <div id="message"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3 required">New Password </label>
                                <div class="col-xs-8">
                                    <input type="password" name="new_pass" class="form-control" id="new_password1">
                                    <div class="text-danger"><?php echo form_error('pass'); ?></div>
                                    <div id="message"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3 required">Repeat Password </label>
                                <div class="col-xs-8">
                                    <input type="password" name="pass" class="form-control" id="new_password2">
                                    <div class="text-danger"><?php echo form_error('pass'); ?></div>
                                    <div id="message"></div>
                                </div>
                            </div> -->

                            <!-- bisa untuk foto -->

                            <!-- <div class="form-group">
                                <label class="control-label col-xs-3"> Dokumen</label>
                                <div class="col-xs-8">
                                    <input type="file" name="foto" class="form-control" placeholder="Pilih File" id="file" accept=".pdf,.doc,.docx">
                                    <small class="text-danger">
                                        <div class="text-danger"><?php echo form_error('doc_arsip'); ?></div>

                                        <?php if ($project = ('foto')) {
                                            echo $this->session->flashdata('error');
                                        }
                                        ?>
                                    </small><br>


                                    <small>File type : jpg, jpeg, png</small><br>
                                    <small>Max size : 3Mb</small>
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