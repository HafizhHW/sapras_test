<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>View Testing</title>
</head>

<body>
    <h3>View Testing</h3>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- pesan disini -->
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
                                        <a class="btn btn-md btn-success mx-auto" data-toggle="" data-target="" href="<?= base_url('Testing/add_test') ?>" title="tambah barang" role="button"><i class="fa-solid fa-file-circle-plus"></i></a>
                                        <!-- <a class="btn btn-md btn-info mx-auto" href="" onclick="window.open('pdf')" title="cetak"><i class="fa-solid fa-print"></i></a> -->
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

                            <!-- <? //= $this->session->flashdata('pesan'); 
                                    ?> -->
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 20px" class="text-center">No</th>
                                        <th style="width: 100px" class="text-center">Judul</th>
                                        <th style="width: 100px" class="text-center"> Dokumen</th>
                                        <th style="width: 20px" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($test as $test) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++ ?></td>
                                            <td class="text-center"><?= $test->judul ?></td>
                                            <td class="text-center">

                                                <img src="<?= base_url('assets/File/' . $test->doc) ?>" style="width: 100px">
                                                <!-- <?php if (!empty($test->doc)) {
                                                            echo '<a href="' . base_url() . 'Barang/download/"' . $test->id . ' class="btn btn-warning btn-sm float-center" title="unduh">
                                                    <i class="fa-solid fa-cloud-arrow-down"></i></a>';
                                                        } else {
                                                            echo "Tidak Memiliki Dokumen";
                                                        } ?> -->

                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-md ">

                                                    <a href="<?= base_url('Testing/edit_test/' . $test->id) ?>" class="btn btn-info" title="edit"><i class="fa-solid fa-edit"></i></a>

                                                    <a href="<?= base_url('Testing/delete_test/' . $test->id) ?>" class="btn btn-danger" title="hapus"><i class="fa-solid fa-trash-can" onclick="return confirm('Apakah anda yakin menghapus data ini?')"></i></a>

                                                </div>

                                            </td>
                                        </tr>

                                    <?php endforeach ?>
                                </tbody>
                                <?php if ($doc = '') {
                                    echo $this->session->flashdata('pesan');
                                } else {
                                    echo $this->session->flashdata('error');
                                }
                                ?>
                                <!-- <? //php echo $this->session->flashdata('error'); 
                                        ?>
                                <? //php echo $error; 
                                ?> -->

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

    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>