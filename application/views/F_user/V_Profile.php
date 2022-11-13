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
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>

                    <table class="table table-bordered border-2 border-dark bg-white">
                        <div class="float-right" style="margin: bottom -3px, top -3px;"><a href="<?= base_url() ?>" class="btn btn-info" title="edit"><i class="fa-solid fa-edit"></i></a></div>

                        <tr style="border:none">
                            <th style="width: 10px;border:none">Nama</th>
                            <th style="width: 0px;border:none">:</th>

                            <td style="border:none"><?= $this->session->userdata("ses_nama") ?></td>


                        </tr>
                        <tr style="border:none">
                            <th style="width: 10px;border:none">Username</th>
                            <th style="width: 0spx;border:none">:</th>

                            <td style="border:none"><?= $this->session->userdata("ses_username") ?></td>

                        </tr>




                    </table>


                </div>


                <!-- /.card-body -->


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