<!doctype html>
<html lang="en">

<head>
    <title>Registration</title>
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
    <link href="<?= base_url() ?>/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

    <!-- My CSS-->
    <link href="<?= base_url() ?>/css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="main-panel">
        <div class="content">
            <div class="row">
                <div class="col-lg-5">
                    <div class="photo">
                        <img src="<?= base_url() ?>/img/women.jpg" alt="Login Photo">
                    </div>
                </div>
                <div class="col-lg-7" style="padding-left: 15px; padding-right: 0px;">
                    <h1>Registration</h1>
                    <form method="POST" action="<?php echo site_url('moderator/moderator_form'); ?>" enctype="multipart/form-data">
                        <div class="row prin">
                            <div class="col-lg-6">
                                <div class="row">
                                    <label for="phone">User:</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 noPadding">
                                        <!--<input type="text" id="phone" name="phone">-->
                                        <?php echo form_input(array('id' => 'moderatorAccount', 'name' => 'moderatorAccount', 'placeholder' => 'moderatorAccount', 'size' => 25)); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <label for="adress">Phone:</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 noPadding">
                                        <!--<input type="text" id="adress" name="adress">-->
                                        <?php echo form_input(array('id' => 'moderatorPhoneNumber', 'name' => 'moderatorPhoneNumber', 'placeholder' => 'moderatorPhoneNumber', 'size' => 25)); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row prin">
                            <div class="col-lg-6">
                                <div class="row">
                                    <label for="pass">Mail:</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 noPadding">
                                        <?php echo form_input(array('id' => 'mailModerator', 'name' => 'mailModerator', 'placeholder' => 'mailModerator', 'size' => 25)); ?>
                                        <!--<input type="text" id="pass" name="pass">-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <label for="pass">Password:</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 noPadding">
                                        <?php echo form_input(array('id' => 'moderatorPassword', 'name' => 'moderatorPassword', 'placeholder' => 'moderatorPassword', 'size' => 25)); ?>
                                        <!--<input type="text" id="pass" name="pass">-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row prin">
                            <div class="col-lg-6 noPadding center">
                                <button type="submit" class="btn btn-primary">Cancel</button>

                            </div>
                            <div class="col-lg-6 noPadding center">
                                <button type="submit" id="employee-submit" name="boton" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Chartist JS -->
    <script src="<?= base_url() ?>/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?= base_url() ?>/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url() ?>/js/black-dashboard.js?v=1.0.0" type="text/javascript"></script>
</body>

</html>