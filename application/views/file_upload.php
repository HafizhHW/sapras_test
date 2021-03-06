<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>File Upload Form</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="https://www.tutorialswb.com/">TutorialsWB</a>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">File Upload dan Download Form CodeIgniter</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form method="POST" action="<?php echo base_url(); ?>file/insert" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Description:</label>
                        <input type="text" name="description" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>File:</label>
                        <input type="file" name="upload" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                <?php
                if ($this->session->flashdata('success')) {
                ?>
                    <div class="alert alert-success text-center" style="margin-top:20px;">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php
                }

                if ($this->session->flashdata('error')) {
                ?>
                    <div class="alert alert-danger text-center" style="margin-top:20px;">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <br />
            <div class="col-sm-8">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Filename</th>
                            <th>Description</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($files as $file) {
                        ?>
                            <tr>
                                <td><?php echo $file->id; ?></td>
                                <td><?php echo $file->filename; ?></td>
                                <td><?php echo $file->description; ?></td>
                                <td><a href="<?php echo base_url() . 'file/download/' . $file->id; ?>" class="btn btn-success btn-sm"><i class="fa-solid fa-cloud-arrow-down"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/8c2f5452bf.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('table.display').DataTable();
        });
    </script>
</body>

</html>