<!doctype html>
<html lang="en">

<head>
    <title>Log in</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--  Fonts and icons  -->
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Black Dashboard CSS -->
    <link href="<?= base_url()?>/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

    <!-- My CSS-->
    <link href="<?= base_url()?>/css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="main-panel">
        <div class="content">
            <div class="row">
                <div class="col-lg-5">
                    <div class="photo">
                        <img src="<?= base_url()?>/img/write.jpg" alt="Login Photo">
                    </div>
                </div>
                <div class="col-lg-7 login">
                    <h1>Login</h1>
                    <form method="POST" action="<?php echo site_url('employee/login'); ?>">
                        <div class="row prin">
                            <div class="col-lg-6">
                                <label for="mail">Mail:</label>
                            </div>
                            <div class="col-lg-6 noPadding">
                                <?php echo form_input(array('id' => 'mailEmployee', 'name' => 'mailEmployee', 'placeholder' => 'mailEmployee', 'size' => 25)); ?>
                                <!--<input type="text" id="mail" name="mail">-->
                            </div>
                        </div>
                        <div class="row prin">
                            <div class="col-lg-6">
                                <label for="password">Password:</label>
                            </div>
                            <div class="col-lg-6 noPadding">
                             <?php echo form_input(array('id' => 'passwordEmployee', 'name' => 'passwordEmployee', 'placeholder' => 'passwordEmployee', 'size' => 25)); ?>

                                <!--<input type="text" id="password" name="password">-->
                            </div>
                        </div>
                        <div class="row prin">
                            <div class="col-lg-12 noPadding center">
                                <button type="submit" class="btn btn-primary log">Login</button>
                            </div>
                        </div>
                    </form>
                    <div class="row prin">
                        <div class="col-lg-12 noPadding center">
                            <a href="<?= base_url()?>index.php/employee/indexReg" class="simple-text logo-normal">
                                Do you need an account?
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Chartist JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/black-dashboard.js?v=1.0.0" type="text/javascript"></script>
</body>

</html>