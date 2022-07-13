<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="assets\MyStyle.css">

    <title>SMKN1GnR</title>


</head>

<body class="">
    <div class="container">

        <div class="row d-flex justify-content-center mx-auto mt-5">

            <div class="col-img col-lg-6 col-md-6 col-sm-6 mx-auto d-flex align-items-center">


                <div class="card col mx-auto border-0 mb-3 ">
                    <!-- <img src="assets\image\student.jpg" alt=""> -->
                </div>

            </div>

            <div class="col-form col-lg-6 col-md-6 col-sm-6 mx-auto  d-flex align-items-center">

                <div class="col col-lg-10 mx-auto">

                    <div class="row d-flex justify-content-center">
                        <div class="card mb-3 mt-5 border-0" style="width:100pt; background-color:transparent;">
                            <img src=" assets\image\LogoSMKN1.png" class="" alt="">
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">

                        <div class="form-login ">
                            <h2 class="text-center mb-3">Silahkan Masuk !</h2>

                            <?php echo form_open_multipart("Auth/Log_act"); ?>

                            <div class="form-floating mb-3">
                                <input type="text" name="username" class="form-control border-2 rounded-pill" id="floatingInput" placeholder="Username">
                                <label for="floatingInput">Username</label>
                                <div class="text-danger"><?php echo form_error('username'); ?></div>
                            </div>

                            <div class="form-floating mb-5">
                                <input type="password" name="pass" class="form-control border-2 rounded-pill" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                <div class="text-danger"><?php echo form_error('pass'); ?></div>
                            </div>

                            <div class="d-grid gap-2 col-4 mx-auto">
                                <button class="btn btn-outline-dark border-2 rounded-pill" type="submit" name="login">Login</button>
                            </div>

                            <?php echo form_close() ?>
                            <hr class="" style="height:2px;border-width:0;color:gray;">
                        </div>

                    </div>

                    <div class="row d-flex justify-content-center">

                        <div class="d-flex justify-content-evenly pt-4 mb-5">

                            <a href="" style="text-decoration:none;"><i class="fa-brands fa-youtube fa-2xl mr-2"></i></a>
                            <a href=""><i class="fa-brands fa-facebook-square fa-2xl"></i></a>
                            <a href=""><i class="fa-brands fa-instagram-square fa-2xl ml-2"></i></a>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>



    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://kit.fontawesome.com/8c2f5452bf.js" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>