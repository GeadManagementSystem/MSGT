<!DOCTYPE html>
<html>
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
                      <span class = "text-danger  ">
                        <?php echo $validation_errors; ?></span>
                  </div>
                  <div id="sucess_alert_box" class="alert alert-success alert-dismissable hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <span id="success_flashdata" class = "text-success  "><?php echo $this->session->flashdata('success'); ?></span>
                  </div>





  <div class="well">
      <form id="transaction_form" method="post" action="" role="form" >




<div id="added_items_box" class="row alert alert-warning "></div>
                  <div class="row">
                    <div class="col-sm-3">
                        <button id="add_item_button" data-toggle="modal" data-target="#select_items_modal" type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add item</button>
                        <button id="clear_item_button" type="button" class="btn btn-danger btn-sm"><i class="fa fa-minus"></i> Clear</button>
                    </div>
                </div>

                <!-- Modal -->
                <div id="select_items_modal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <span class="hidden" name ='ammount_of_items_added' id ='ammount_of_items_added'></span>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Select Items to Add to the New Transaction</h4>
                      </div>
                      <div class="modal-body">

                        <div class="checkbox">
                        <?php
                              for($x = 0; $x < count($list_of_items); $x++){
                          echo "<label><input type='checkbox' id='checkbox_$list_of_items[$x]' item_quantity ='$list_of_item_quantity[$x]' item_price='$list_of_item_price[$x]' value='$list_of_items[$x]'>".$list_of_items[$x]."</label><br>";
                          }?>
                        </div>




                      </div>
                      <div class="modal-footer">
                        <button type="button" id = "add_items_modal" class="btn btn-success" ><i class="fa fa-plus"></i> Add Items</button>
                      </div>
                    </div>

                  </div>
                </div>


                <br><br>
                <div class="row">
                    <div class="col-sm-1 form-group-sm">
                        <label for="vat">VAT(%)</label>
                        <input id= "vat" onchange="adjust_price()" name="vat" required="required" type="number" min="0"  max="100" class="form-control" value="0">
                    </div>

                    <div class="col-sm-1 form-group-sm">
                        <label for="discount">Discount(%)</label>
                        <input id= "discount"  onchange="adjust_price()" name="discount" required="required" type="number" min="0" max="100" class="form-control" value="0">
                    </div>

                    <div class="col-sm-3 form-group-sm">
                        <label for="total_ammount">Total Amount</label>
                        <span id="total_ammount_display" name="total_ammount" class="form-control">0</span>
                    </div>


                    <div class="col-sm-3 form-group-sm">
                        <label for="amount_given" >Amount Given</label>
                        <input id ="amount_given" name="amount_given" onchange="adjust_price()"    min="0" class="form-control">
                    </div>

                    <div class="col-sm-3 form-group-sm">
                        <label for="change_due">Change Due</label>
                        <span id= "change_due" name="change_due" class="form-control" ></span>
                    </div>

                </div>

                <br><br>
                <div class="row">
                    <div class="col-sm-4 form-group-sm">
                        <label for="customer_name">Customer Name</label>
                        <input type="text"  name="customer_name" class="form-control" placeholder="Customer Name">
                    </div>

                    <div class="col-sm-4 form-group-sm">
                        <label for="customer_tin">Customer TIN Number</label>
                        <input  name="customer_tin" class="form-control" placeholder="Customer TIN">
                    </div>

                    <div class="col-sm-4 form-group-sm">
                        <label for="customer_phone">Customer Phone</label>
                        <input  name="customer_phone" class="form-control" placeholder="Customer Phone">
                    </div>
                </div>
                <br><br>
                <div class="row">
                  <div class="col-sm-7 form-group-sm"></div>
                  <div class="col-sm-5 form-group-sm">
                    <button id="notify_order_button" type="button" onclick="" class="btn btn-success btn-sm" name="notify" >Notify Stockmanager</button>
                    <button type="submit" class="btn btn-primary btn-sm" name="add_transaction" >Add Transaction</button>
                    <button type="reset" class="btn btn-danger btn-sm" name="clear_form" >Clear Form</button>
                  </div>

              </div>
      </form>
      </div>
              </div>
          </div>

          <!-- /#wrapper -->

            <script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script>
            let checked_items_array;
            $(document).ready(function(){
              $("#clear_item_button").hide();
              if($("#success_flashdata").html() ===""){
                $("#sucess_alert_box").attr("class","alert alert-success alert-dismissable hidden");
                $("#notify_order_button").attr('class','btn btn-success btn-sm hidden');
              }
              else{
                $("#sucess_alert_box").attr("class","alert alert-success alert-dismissable");
                //$("#notify_order_button").attr('class','btn btn-success btn-sm');
                //$("#notify_order_button").attr('onclick',"window.location.href='<?php echo base_url(); ?>index.php/salesperson_controller/notify_order/'");
              }
            });

                $("#add_items_modal").click(function(){
                  let searchID = $('input:checked').map(function(){
                    return $(this).val();
                  });
                  checked_items_array = searchID.get();
                  for (let i = 0; i < checked_items_array.length; i++) {
                    let item_name = checked_items_array[i];
                    let unit_price = $("#checkbox_"+item_name).attr('item_price');
                    let item_name_display="<div class='col-sm-3 form-group-sm'><label for='item_name'>Item Name</label><input name='item_name_"+i+"'  class='form-control' type = 'text' value ='"+item_name+"' readonly></div>";
                    let avaliable_quantity = $("#checkbox_"+item_name).attr('item_quantity');
                    let avaliable_quantity_display="<div class='col-sm-3 form-group-sm'><label for='quantity_avaliable'>Quantity Avaliable</label><span name='quantity_avaliable'class='form-control' >"+avaliable_quantity+"</span></div>";
                    let onchange_code = "onchange = 'adjust_price(\""+item_name+"\","+unit_price+");'";
                    let onclick_code = " onclick = 'adjust_price(\""+item_name+"\","+unit_price+");'";
                    let quantity_adjust_display = "<div class='col-sm-2 form-group-sm'><label for='quantity'>Quantity</label><input  id='new_quantity_for_"+item_name+ "' name='item_quantity_"+i+"' type='number' min='1' max='"+avaliable_quantity+"'"+ onchange_code + onclick_code +"class='form-control' value='0'></div>";

                    let total_price_display="<div class='col-sm-3 form-group-sm'><label for='total_price'>Total Price</label><input class='form-control' type = 'text' id='tot_price_for_"+item_name+"' name='total_price_"+i+"' value ='"+unit_price+"' readonly></div>";
                    //old implementation
                    //<span id='total_price_for_"+item_name+"' name='total_price_"+i+"' class='form-control'>"+unit_price+"</span>

                    $("#added_items_box").append("<div class='row'>"+item_name_display+avaliable_quantity_display+quantity_adjust_display+total_price_display+"</div>");
                    //console.log(checked_items_array[i]);
                    $("#add_items_modal").attr("data-dismiss","modal");
                    $("#add_item_button").hide();
                    $("#clear_item_button").show();
                    //add the action link
                    $("#transaction_form").attr('action',add_transaction_redirect());
                    $("#notify_order_button").attr('onclick',"window.location.href='<?php echo base_url(); ?>index.php/salesperson_controller/notify_order/'");



                  }

                });

                function calculate_final_total_ammount(total_ammount){
                  let vat_percent = $("#vat").val();
                  let discount_percent = $("#discount").val();
                  vat_ammount = parseFloat((vat_percent/100) * total_ammount);
                  discount_ammount = parseFloat((discount_percent/100) * total_ammount);
                  final_ammount = (total_ammount + vat_ammount) - discount_ammount;
                  return final_ammount;
                }

                function calculate_change_due(final_total_ammount, ammount_given){
                  if(final_total_ammount > ammount_given){
                    $("#change_due").html("<p class='text-danger'>Ammount is less than required</p>");
                  }
                  if(final_total_ammount < ammount_given){
                      $("#change_due").html(ammount_given - final_total_ammount);
                  }
                  if (final_total_ammount == ammount_given) {
                    $("#change_due").html("<p class='text-success'>No Change due</p>");
                  }


                }

                function adjust_price(item_name,unit_price){
                  console.log(item_name);
                  new_value = $("#new_quantity_for_"+item_name).val();
                  console.log(new_value);
                  console.log(unit_price);
                  //$("#total_price_for_"+item_name).html(unit_price * new_value);
                  //adjusted code
                  $("#tot_price_for_"+item_name).attr('value',unit_price * new_value);
                  console.log(unit_price*new_value);
                  let total = 0;
                  for (let i = 0; i < checked_items_array.length; i++) {
                    let item_name = checked_items_array[i];
                    //total += parseFloat($("#total_price_for_"+item_name).html());
                    //adjusted code
                    total += parseFloat($("#tot_price_for_"+item_name).attr('value'));
                  }
                  let final = calculate_final_total_ammount(total);
                  $("#total_ammount_display").text(final);
                  let final_total_ammount = parseFloat($("#total_ammount_display").text());
                  let ammount_given = parseFloat($("#amount_given").val());
                  calculate_change_due(final_total_ammount, ammount_given);
                }



                $("#clear_item_button").click(function(){
                  $("#added_items_box").empty();
                  $("#add_item_button").show();
                  $("#clear_item_button").hide();
                });


                function get_number_of_items_added(){
                  return checked_items_array.length;
                }
                function add_transaction_redirect(){
                  let base_url = "<?php echo base_url(); ?>";
                  return base_url+'index.php/salesperson_controller/add_transaction/'+get_number_of_items_added();
                }







            </script>
  </body>

</html>
