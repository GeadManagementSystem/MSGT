<!DOCTYPE html>
    <head>
        <title><?php echo $title ?></title>

        <link rel="stylesheet" href ="<?php echo base_url(); ?>public/vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href ="<?php echo base_url(); ?>public/vendor/bootstrap/css/custom.css" />
        <link rel="stylesheet" href ="<?php echo base_url(); ?>public/vendor/font-awesome/css/font-awesome.min.css" />
    </head>
    <body>
      <div id="wrapper">

              <!-- Navigation -->
              <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <img class="col-md-offset-5" src="<?php echo base_url(); ?>/public/images/logo.png"  alt="logo" width="50" height="50">
                  </div>
                  <!-- /.navbar-header -->

                  <ul class="nav navbar-top-links navbar-right">
                      <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-user">

                              <li><i class="fa fa-user fa-fw "></i><?php echo $this->session->userdata('username'); ?>
                              </li>
                              <li class="divider"></li>
                              <li><a href="<?php echo base_url(); ?>index.php/logout_controller/"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                              </li>
                          </ul>
                          <!-- /.dropdown-user -->
                      </li>
                      <!-- /.dropdown -->
                  </ul>
                  <!-- /.navbar-top-links -->
                  <div class="navbar-default sidebar" role="navigation">
                      <div class="sidebar-nav navbar-collapse">
                          <ul class="nav" id="side-menu">
                            <li><br><br><br></li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/manager_controller/"><i class="fa fa-dashboard fa-fw"></i>Main Panel</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/manager_controller/generate_report/"><i class="fa fa-file-text fa-fw"></i>Report</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/manager_controller/staff_managment/"><i class="fa fa-group fa-fw"></i>Staff Managment</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/manager_controller/user_log/"><i class="fa fa-list-alt fa-fw"></i>User Log</a>
                            </li>
                              <li>
                                  <a href="<?php echo base_url(); ?>index.php/logout_controller/"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                              </li>



                       </ul>

                  </div>
              </div>
                  <!-- /.navbar-static-side -->
              </nav>
              <div id="page-wrapper">
                  <div class="row">
                      <div class="col-lg-12">
                          <h1 class="page-header"><?php echo $title ?></h1>
                      </div>
                      <!-- /.col-lg-12 -->
                  </div>

                  <div class="table table-responsive">
                    <table class="table table-bordered ">
                      <thead>
                        <tr class = "success">
                          <th>Event ID</th>
                          <th>Event Time</th>
                          <th>User in Charge</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                          for($x = 0; $x < count($table_values); $x++){
                            echo $table_values[$x];
                          }
                    ?>
                      </tbody>
                    </table>
                  </div>

                </div>



        </div>
          <!-- /#wrapper -->

            <script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.min.js"></script>
  </body>

</html>
