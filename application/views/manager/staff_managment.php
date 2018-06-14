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
                          <p id="base_url" class="hidden"><?php echo base_url(); ?>index.php/manager_controller/delete_staff_member/</p>
                      </div>
                      <!-- /.col-lg-12 -->
                  </div>
                  <div id="sucess_alert_box" class="alert alert-success alert-dismissable hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <span id="success_flashdata" class = "text-success  "><?php echo $this->session->flashdata('success'); ?></span>
                  </div>
                  <div class="alert alert-warning">
                  <span class = "text-danger  "><?php echo $validation_errors; ?></span>
                  </div>
                  <div class="col-sm-5 " >
                  <div class="row">

                  <button class="btn btn-info btn-sm " id="collapse_form_button">Add Staff Member +</button>
                  </div>
                  <div id="add_staff_member_form" class="well">
                  <h3 class="text-center page-header">Add Staff Member</h3>
                    <form method="post" action="<?php echo base_url(); ?>index.php/manager_controller/add_staff_member/">
                        <div class="row">
                            <div class="col-sm-6 form-group-sm">
                                <label for="first_name">First Name</label>
                                <input type="text" value="<?php echo set_value('first_name'); ?>"id="first_name" name="first_name" placeholder="First Name" maxlength="80"
                                    class="form-control">
                            </div>

                            <div class="col-sm-6 form-group-sm">
                                <label for="last_name">Last Name</label>
                                <input type="text" value="<?php echo set_value('last_name'); ?>"id="last_name" name="last_name" placeholder="Last Name" maxlength="80"
                                    class="form-control">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-12 form-group-sm">
                                <label for="address">Address</label>
                                <textarea name="address" class="form-control" id="address" ><?php echo set_value('address'); ?></textarea>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-12 form-group-sm">
                                <label for="salary">Salary</label>
                                <input type="text" id="salary" value="<?php echo set_value('salary'); ?>"name="salary" placeholder="Salary" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row text-center">
                            <div class="col-sm-6 form-group-sm">
                                <button class="btn btn-primary btn-sm" id="add_staff_member">Add Staff Member</button>
                            </div>

                            <div class="col-sm-6 form-group-sm">
                                <button type="reset" id="cancel_add_staff_member_button" class="btn btn-danger btn-sm " form='addNewItemForm'>Cancel</button>
                            </div>
                        </div>

                    </form><!-- end of form-->
                  </div>
                  </div>

                  <div class="table table-responsive">
                    <table class="table table-bordered ">
                      <thead>
                        <tr class = "success">
                          <th>Staff Member ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Salary</th>
                          <th>Address</th>
                          <th>Delete</th>
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



                  <!-- Confirm Delete Modal -->
                  <div id="confirm_delete_modal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" id="confirm_delete_modal_title"></h4>
                        </div>
                        <div class="modal-body col-sm-12">

                          <div class="row">
                              <div class="col-sm-12 form-group-sm">
                                  <p>Are You Sure you want to delete Staff Member?</p>
                              </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button  type="submit" class="btn btn-danger" id = "delete_button_modal">Delete</button>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>
        </div>
      </div>



          <!-- /#wrapper -->

            <script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>public/javascript/staff_managment.js"></script>
  </body>

</html>
