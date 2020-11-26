<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Postploy
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
          <li class="active ">
            <a href="<?= base_url() ?>index.php/employer/indexDash/<?php foreach ($employer as $emp) {
                                                                      echo $emp->idCEmployerAccount;
                                                                    }
                                                                    ?>">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Postploy</p>
            </a>
          </li>
          <li>
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
            <a class="navbar-brand" href="javascript:void(0)">Postploy</a>
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
        <!-- Inicio Usuario -->
        <div class="usuario">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="card-category">User resume</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <img class="circular-square" src="<?= base_url() ?><?php
                                                                  foreach ($employer as $emp) {
                                                                    echo $emp->photoEmployer;
                                                                  } ?>" alt="Profile Photo">
            </div>
            <div class="col-lg-4">
              <div class="typography-line">

                <span>Name: </span>
                <p>
                  <?php
                  foreach ($employer as $emp) {
                    echo $emp->name1Employer;
                  } ?>
                </p>
              </div>
              <div class="typography-line">

                <span>Phone: </span>
                <p>
                  <?php
                  foreach ($employer as $emp) {
                    echo $emp->phoneEmployer;
                  } ?>
                </p>
              </div>
              <div class="typography-line">
                <span>Jobs done: </span>
                <p>
                
                </p>
              </div>
              <div class="typography-line">
                <span>Adress: </span>
                <p>
                  <?php
                  foreach ($employer as $emp) {
                    echo $emp->adressEmployer;
                  } ?>
                </p>
              </div>
              <div class="typography-line">
                <span>Mail: </span>
                <p>
                  <?php
                  foreach ($employer as $emp) {
                    echo $emp->mailEmployer;
                  } ?>
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="typography-line">
                <span>City: </span>
                <p>
                  Cali
                </p>
              </div>
              <div class="typography-line">
                <span>Ranking: </span>
                <p>
                  3.7
                </p>
              </div>
              <div class="typography-line">
                <span>Age: </span>
                <p>
                  22
                </p>
              </div>
              <?php

              ?>
            </div>
          </div>
        </div>
        <!-- Fin Usuario -->
        <div class="row">
          <!--Trabajos hechos -->
          <div class="col-lg-12 col-md-12">
            <div class="card card-tasks">
              <div class="card-header ">
                <h6 class="title d-inline">Add jobs</h6>
              </div>
              <div class="card-body ">
                <form method="POST">
                  <div class="row">
                    <div class="col-md-12 pr-md-12">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" id='titleJob' name='titleJob' value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pr-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea col="200" rows="5" class="form-control" id='descriptionJob' name='descriptionJob' value=""></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Pay for job</label>
                        <input type="number" class="form-control" id='payForJob' name='payForJob' value="">
                      </div>
                    </div>
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Time required (in days)</label>
                        <input type="number" class="form-control" id='timeRequired' name='timeRequired' value="">
                      </div>
                    </div>
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Category</label>
                        <br>
                        <select class="form-control" name="idCategoryf" id="idCategoryf">
                          <option style="color:black;" value="1">Clean</option>
                          <option style="color:black;" value="1">Clean</option>
                          <option style="color:black;" value="1">Clean</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="añadir" class="btn btn-fill btn-primary" style="background: linear-gradient(0deg, #4a40d8 0%, #4ea4e1 100%);">Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!--Fin Trabajos hechos -->
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
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>