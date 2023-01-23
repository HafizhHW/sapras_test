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
                        <li class="breadcrumb-item"><a href="<?php base_url('User') ?>"><?= $judul ?></a></li>
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
                <div id="flashData" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
                <div class="col-md-8">
                    <!-- general form elements -->
                    
                    <!-- <div id="flashData" data-flash="<?= $this->session->flashdata('error'); ?>"></div> -->

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Change Password</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <?php echo form_open_multipart('User/ChangePwd_act'); ?>
                        <div class="card-body">

                            <input type="hidden" name="akses" class="form-control" value="<?= $this->session->userdata("akses") ?>" readonly>
                            <input type="hidden" name="id" class="form-control" value="<?= $this->session->userdata("ses_id") ?>" readonly>

                            <div class="form-group">
                                <label class="control-label col-xs-3 required"> Current Password </label>
                                <div class="col-xs-8">
                                    <input type="password" id="current_password" name="current_password" class="form-control">

                                    <div class="alert-danger"><?php echo form_error('current_password'); ?></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3 required"> New Password </label>
                                <div class="col-xs-8">
                                    <input type="password" id="new_password1" name="new_password1" class="form-control">

                                    <div class="alert-danger"><?php echo form_error('new_password'); ?></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3 required"> Repeat Password </label>
                                <div class="col-xs-8">
                                    <input type="password" id="new_password2" name="new_password2" class="form-control">

                                    <div class="alert-danger"><?php echo form_error('new_password2'); ?></div>
                                </div>
                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <div class="btn float-right">

                                <button type="submit" class="btn btn-sm btn-success"><i class="fa-solid fa-floppy-disk"></i> Update Password</button>

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