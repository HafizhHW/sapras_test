<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Input</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <br>
                <h2 style="text-align: center ;">Form Edit Testing</h2>
                <?php foreach ($test as $test) { ?>
                    <?php echo form_open_multipart('Testing/edit_act/' . $test->id); ?>


                    <input type="hidden" class="form-control" name="id" value="<?= $test->id ?>">


                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul" value="<?= $test->judul ?>">
                        <div class="alert-danger"><?php echo form_error('judul'); ?></div>
                    </div>
                    <div class="form-group">
                        <label for="">Dokumen</label>
                        <input type="hidden" class="form-control" name="doc" value="<?= $test->doc ?>">
                        <input type="file" class="form-control" name="doc" value="<?= $test->doc ?>">
                        <div class="alert-danger"><?php echo form_error('doc'); ?></div>
                    </div>

                    <button type="submit" class="btn btn-primary float-right ">Submit</button>
                    <?php echo form_close(); ?>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>