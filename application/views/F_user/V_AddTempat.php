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
                        <li class="breadcrumb-item"><a href="<?= base_url('User/ViewTempat') ?>"><?= $judul ?></a></li>
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

                    <!-- <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div> -->

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Tempat Penyimpanan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <?php echo form_open_multipart('User/addTempat_Act'); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label col-xs-3 required"> Nama Tempat </label>
                                <div class="col-xs-8">
                                    <input type="text" name="nm_tempat" class="form-control" placeholder="Nama Tempat Penyimpanan">
                                    <div class="text-danger"><?php echo form_error('nm_tempat'); ?></div>
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