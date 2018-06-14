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
                      <img class="col-md-offset-10" src="<?php echo base_url(); ?>/public/images/logo.png"  alt="logo" width="50" height="50">
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
                  <div class="alert alert-warning">
  <span class = "text-danger  "><?php echo $validation_errors; ?></span>
      </div>
      <div class="col-sm-5 " >
          <div class="row">

          <button class="btn btn-info btn-sm " id="collapse_form_button">Add Item +</button>
        </div>
                <div id="add_item_form" class="well">
                  <h3 class="text-center page-header">Add Item</h3>
                    <form method="post" action="<?php echo base_url(); ?>index.php/stockmanager_controller/add_item">
                        <div class="row">
                            <div class="col-sm-12 form-group-sm">
                                <label for="itemName">Item Name</label>
                                <input type="text" value="<?php echo set_value('item_name'); ?>"id="itemName" name="item_name" placeholder="Item Name" maxlength="80"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group-sm">
                                <label for="itemQuantity">Quantity</label>
                                <input type="number" value="<?php echo set_value('item_quantity'); ?>"id="itemQuantity" name="item_quantity" placeholder="Available Quantity"
                                    class="form-control" min="0" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group-sm">
                                <label for="unitPrice">Unit Price</label>
                                <input type="text" id="itemPrice" value="<?php echo set_value('item_price'); ?>"name="item_price" placeholder="Unit Price" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row text-center">
                            <div class="col-sm-6 form-group-sm">
                                <button class="btn btn-primary btn-sm" id="addNewItem">Add Item</button>
                            </div>

                            <div class="col-sm-6 form-group-sm">
                                <button type="reset" id="cancel_add_item_button" class="btn btn-danger btn-sm " form='addNewItemForm'>Cancel</button>
                            </div>
                        </div>

                    </form><!-- end of form-->
                </div>
            </div>
<div class="table table-responsive">
  <table class="table table-bordered ">
    <thead>
      <tr class = "success">
        <th>Item ID</th>
        <th>Item Name</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th>Date Added</th>
        <th>Update Price</th>
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
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <form  id="modal_form" method="post" action="<?php echo base_url(); ?>index.php/stockmanager_controller/update_price/">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="modal_title"></h4>
      </div>
      <div class="modal-body col-sm-12">

        <div class="row">
            <div class="col-sm-12 form-group-sm">
                <label for="update_price">Update Price</label>
                <input type="number" required="required" value="<?php echo set_value('item_price'); ?>"name="modal_update_price" placeholder="Unit Price" class="form-control">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button  type="submit" class="btn btn-primary" >Update</button>
      </div>
    </form>
    </div>
  </div>
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
                <p>Are You Sure you want to delete item?</p>
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
          <!-- /#wrapper -->

            <script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>public/javascript/stockmanager.js"></script>
  </body>

</html>
