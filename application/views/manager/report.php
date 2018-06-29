<!DOCTYPE html>
    <head>
        <title><?php echo $title ?></title>

        <link rel="stylesheet" href ="<?php echo base_url(); ?>public/vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href ="<?php echo base_url(); ?>public/vendor/bootstrap/css/custom.css" />
        <link rel="stylesheet" href ="<?php echo base_url(); ?>public/vendor/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/ext/datetimepicker/bootstrap-datepicker.min.css" />
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
                  <div class="row">
                    <div class="col-lg-12">
                      <span id="success_flashdata" class = "text-success  "><?php echo $this->session->flashdata('success'); ?></span>
                    <button class='btn btn-primary btn-sm' data-toggle='modal' data-target='#reportModal'>
                          <i class="fa fa-newspaper-o"></i> Select Date
                      </button></div>
                  </div>
                </div>

                <div class="modal fade" id='reportModal' data-backdrop='static' role='dialog'>
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="close" data-dismiss='modal'>&times;</div>
                                <h4 class="text-center">Generate Report</h4>
                            </div>

                            <div class="modal-body">
                                <div class="row" id="datePair">
                                    <div class="col-sm-6 form-group-sm">
                                        <label class="control-label">From Date</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <span><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <input type="text" id='transFrom' class="form-control date start" placeholder="YYYY-MM-DD">
                                        </div>
                                        <span class="help-block errMsg" id='transFromErr'></span>
                                    </div>

                                    <div class="col-sm-6 form-group-sm">
                                        <label class="control-label">To Date</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <span><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <input type="text" id='transTo' class="form-control date end" placeholder="YYYY-MM-DD">
                                        </div>
                                        <span class="help-block errMsg" id='transToErr'></span>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button  class="btn btn-success" id='clickToGen'>Generate</button>
                                <button class="btn btn-danger" data-dismiss='modal'>Close</button>
                            </div>
                        </div>
                    </div></div>

        </div>
          <!-- /#wrapper -->

            <script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>public/ext/datetimepicker/bootstrap-datepicker.min.js"></script>
            <script src="<?php echo base_url(); ?>public/ext/datetimepicker/jquery.timepicker.min.js"></script>
            <script src="<?php echo base_url(); ?>public/ext/datetimepicker/datepair.min.js"></script>
            <script src="<?php echo base_url(); ?>public/ext/datetimepicker/jquery.datepair.min.js"></script>
            <script>
            $('#datePair .date').datepicker({
       format: 'yyyy-mm-dd',
       autoclose: true,
       assumeNearbyYear: true,
       todayBtn: 'linked',
       todayHighlight: true,
       endDate: 'today'
   });
            $("#clickToGen").click(function(e){
        e.preventDefault();

        let fromDate = $("#transFrom").val();
        let toDate = $("#transTo").val();

        if(!fromDate){
            $("#transFromErr").html("Select date to start from");

        }
        let base_url = '<?php echo base_url(); ?>';
        let report_result = "index.php/manager_controller/report_result/"+fromDate+"/"+toDate;
        window.location.replace(base_url+report_result);

        /*
         * remove any error msg, hide modal, launch window to display the report in
         */

        $("#transFromErr").html("");
        $("#reportModal").modal('hide');

        var strWindowFeatures = "width=1000,height=500,scrollbars=yes,resizable=yes";

        window.open(appRoot+"transactions/report/"+fromDate+"/"+toDate, 'Print', strWindowFeatures);
    });
  </script>
  </body>

</html>
