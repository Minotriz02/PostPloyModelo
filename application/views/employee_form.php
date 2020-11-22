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
                        <img src="<?= base_url()?>/img/women.jpg" alt="Login Photo">
                    </div>
                </div>
                <div class="col-lg-7" style="padding-left: 15px; padding-right: 0px;">
                    <h1>Registration</h1>
                    <form method="POST" action="<?php echo site_url('employee/employee_form'); ?>" enctype="multipart/form-data">
                        <div class="row prin">
                            <div class="col-lg-6">
                                <div class="row">
                                    <label for="fname">Name:</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 noPadding">
                                        <?php echo form_input(array('id' => 'name1Employee', 'name' => 'name1Employee', 'placeholder' => 'name1Employee', 'size' => 25)); ?>
                                        <!--<input type="text" id="fname" name="fname" value="First name...">-->
                                    </div>
                                    <div class="col-lg-6 noPadding">
                                        <?php echo form_input(array('id' => 'name2Employee', 'name' => 'name2Employee', 'placeholder' => 'name2Employee', 'size' => 25)); ?>
                                        <!--<input type="text" id="sname" name="sname" value="Second name...">-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <label for="lname">Lastname:</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 noPadding">
                                        <!--<input type="text" id="lname" name="lname" value="First lastname...">-->
                                        <?php echo form_input(array('id' => 'lastname1Employee', 'name' => 'lastname1Employee', 'placeholder' => 'lastname1Employee', 'size' => 25)); ?>
                                    </div>
                                    <div class="col-lg-6 noPadding">
                                        <!--<input type="text" id="slname" name="slname" value="Second lastname...">-->
                                        <?php echo form_input(array('id' => 'lastname2Employee', 'name' => 'lastname2Employee', 'placeholder' => 'lastname2Employee', 'size' => 25)); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row prin">
                            <div class="col-lg-6">
                                <div class="row">
                                    <label for="phone">Phone number:</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 noPadding">
                                        <!--<input type="text" id="phone" name="phone">-->
                                        <?php echo form_input(array('id' => 'phoneEmployee', 'name' => 'phoneEmployee', 'placeholder' => 'phoneEmployee', 'size' => 25)); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <label for="adress">Adress:</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 noPadding">
                                        <!--<input type="text" id="adress" name="adress">-->
                                        <?php echo form_input(array('id' => 'adressEmployee', 'name' => 'adressEmployee', 'placeholder' => 'adressEmployee', 'size' => 25)); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row prin">
                            <div class="col-lg-6">
                                <div class="row">
                                    <label for="mail">Mail:</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 noPadding">
                                        <!--<input type="text" id="mail" name="mail">-->
                                        <?php echo form_input(array('id' => 'mailEmployee', 'name' => 'mailEmployee', 'placeholder' => 'mailEmployee', 'size' => 25)); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <label for="pass">Password:</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 noPadding">
                                        <?php echo form_input(array('id' => 'passwordEmployee', 'name' => 'passwordEmployee', 'placeholder' => 'passwordEmployee', 'size' => 25)); ?>
                                        <!--<input type="text" id="pass" name="pass">-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row prin">
                            <div class="col-lg-6">
                                <div class="row">
                                    <label for="role">Role:</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 noPadding">
                                        <input type="radio" id="employer" name="role" value="Employer">
                                        <label for="employer" class="Option">Employer</label>
                                    </div>
                                    <div class="col-lg-6 noPadding">
                                        <input type="radio" id="employee" name="role" value="Employee">
                                        <label for="employee" class="Option">Employee</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <label>Photo:</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 noPadding">
                                        <label for="photo">Photo:</label>
                                        <input type="file" class="btn btn-primary" name="photo" id="photo">
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
    <script src="<?= base_url()?>/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url()?>/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?= base_url()?>/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url()?>/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Chartist JS -->
    <script src="<?= base_url()?>/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?= base_url()?>/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url()?>/js/black-dashboard.js?v=1.0.0" type="text/javascript"></script>
</body>

</html>