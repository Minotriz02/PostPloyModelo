<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    My Jobs
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?= base_url() ?>/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?= base_url() ?>/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

  <!-- My CSS-->
  <link href="<?= base_url() ?>/css/style_dash.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar" style="background: linear-gradient(0deg, #4a40d8 0%, #4ea4e1 100%);">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            PP
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Postploy
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="<?= base_url() ?>index.php/employer/indexDash/<?php foreach ($employer as $emp) {
                                                                      echo $emp->idCEmployerAccount;
                                                                    }
                                                                    ?>">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Postploy</p>
            </a>
          </li>
          <li class="active ">
            <a href="<?= base_url() ?>index.php/employer/indexMyJobs/<?php foreach ($employer as $emp) {
                                                                        echo $emp->idCEmployerAccount;
                                                                      }
                                                                      ?>">
              <i class="tim-icons icon-single-copy-04"></i>
              <p>My jobs</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url() ?>index.php/employer/indexUser/<?php foreach ($employer as $emp) {
                                                                      echo $emp->idCEmployerAccount;
                                                                    }
                                                                    ?>">
              <i class="tim-icons icon-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">My Jobs</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="<?= base_url() ?><?php
                                                foreach ($employer as $emp) {
                                                  echo $emp->photoEmployer;
                                                }
                                                ?>" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="<?= base_url() ?>index.php/employer/indexUser/<?php foreach ($employer as $emp) {
                                                                                                echo $emp->idCEmployerAccount;
                                                                                              }
                                                                                              ?>" class="nav-item dropdown-item">Profile</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="<?= base_url() ?>index.php/employer/salirSesion" class="nav-item dropdown-item">Log out</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                My Jobs
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          Title job
                        </th>
                        <th>
                          Description
                        </th>
                        <th class="text-center">
                          Salary
                        </th>
                        <th>
                          Potential employees
                        </th>
                        <th>
                          Button
                        </th>
                      </tr>
                    </thead>
                    <tbody>
<<<<<<< HEAD
                    <?php foreach ($applicants as $aplcnts) { ?>
                      <tr>
                        <td>
                          <?php echo $aplcnts->titleJob;?>
                        </td>
                        <td>
                          <?php echo $aplcnts->descriptionJob;?>
                        </td>
                        <td class="text-center">
                          <?php echo $aplcnts->payForJob; ?>
                        </td>
                        
                      
                        <td>
                        
                          <ul>
                            <li><a href="javascript:void(0)"> <?php echo $aplcnts->name1Employee;?> <?php echo $aplcnts->lastname1Employee;?></a></li>
                          </ul>
                          
                        </td>
                      </tr>
=======
                      <?php foreach ($applicants as $aplcnts) { ?>
                        <tr>
                          <td>
                            <?php echo $aplcnts->titleJob; ?>
                          </td>
                          <td>
                            <?php echo $aplcnts->descriptionJob; ?>
                          </td>
                          <td class="text-center">
                            <?php echo $aplcnts->payForJob; ?>
                          </td>
                          <td>
                            <a type="button" data-toggle="modal" data-target="#myModal" href="javascript:void(0)"> <?php echo $aplcnts->name1Employee; ?> <?php echo $aplcnts->lastname1Employee; ?></a>
                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Info Employee</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><?php echo $aplcnts->name1Employee; ?> <?php echo $aplcnts->name2Employee; ?> <?php echo $aplcnts->lastname1Employee; ?> <?php echo $aplcnts->lastname2Employee; ?> </p>
                                    <div style="height: 100px; width: 100px;" class="photo">
                                      <img src="<?= base_url() ?><?php echo $aplcnts->photoEmployee; ?>" alt="Profile Photo">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Accept postulation</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Decline </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
>>>>>>> 03b71aba69bb0856845b5b2ed0b92a14d20ea670
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Postploy
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> by Team LPAL
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="<?= base_url() ?>/js/core/jquery.min.js"></script>
  <script src="<?= base_url() ?>/js/core/popper.min.js"></script>
  <script src="<?= base_url() ?>/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="<?= base_url() ?>/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url() ?>/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url() ?>/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= base_url() ?>/demo/demo.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>