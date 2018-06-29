<!DOCTYPE html>
    <head>
        <title><?php echo $title ?></title>

        <link rel="stylesheet" href ="<?php echo base_url(); ?>public/vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href ="<?php echo base_url(); ?>public/vendor/bootstrap/css/custom.css" />
        <link rel="stylesheet" href ="<?php echo base_url(); ?>public/vendor/font-awesome/css/font-awesome.min.css" />
        <!-- DataTables CSS -->
        <link href="<?php echo base_url(); ?>public/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="<?php echo base_url(); ?>public/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
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
                              <a href="<?php echo base_url(); ?>index.php/salesperson_controller/"><i class="fa fa-plus-square fa-fw"></i>Add New Transaction</a>
                          </li>
                          <li>
                              <a href="<?php echo base_url(); ?>index.php/salesperson_controller/search"><i class="fa fa-history fa-fw"></i>Previous Transaction</a>
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
                  <div class="well" >
                      <div class="row">
                          <div class="col-lg-12 text-center text-uppercase">
                              <center style='margin-bottom:5px'><img src="<?=base_url()?>public/images/logo.png" alt="logo" class="img-responsive" width="60px"></center>
                              <b>Gead General Trading PLC</b>
                              <div>Merkato Addis Ababa, Ethiopia</div>
                          </div>
                      </div>


                      <div class="row" style="margin-top:30px; margin-bottom:15px">
                          <div class="col-lg-12  text-center">
                              <label>Receipt No:</label>
                              <span><?php echo $recipt_no; ?></span>
                  		</div>
                      </div>
                      <?php
                            for($x = 0; $x < count($table_values); $x++){
                              echo $table_values[$x];
                            }
                      ?>

                      <div class="row">
                          <div class="col-lg-12 text-center">Thank you for your purchase</div>
                      </div>

                  </div>
                  <div class="row">
                  <button class='btn btn-info btn-sm col-lg-12 text-center' onclick="window.print()">
                        <i class="fa fa-print"></i> Print
                    </button>
                  </div>

                </div>




        </div>
          <!-- /#wrapper -->

            <script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.min.js"></script>
            <!-- DataTables JavaScript -->
            <script src="<?php echo base_url(); ?>public/vendor/datatables/js/jquery.dataTables.min.js"></script>
            <script src="<?php echo base_url(); ?>public/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>public/vendor/datatables-responsive/dataTables.responsive.js"></script>
            <script>$(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });</script>
  </body>

</html>
