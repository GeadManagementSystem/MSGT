
function display_modal(item_id){

let modal_title = document.getElementById("modal_title");
let item_name = document.getElementById("item_name_"+item_id).innerHTML;
modal_title.innerHTML = "Item Name:" + item_name;
$("#modal_form").attr("action","<?php echo base_url(); ?>index.php/stockmanager_controller/update_price/"+item_id)
$("#myModal").modal('show');
}


function confirm_delete(item_id){
  let modal_title = document.getElementById("confirm_delete_modal_title");
  let item_name = document.getElementById("item_name_"+item_id).innerHTML;
  modal_title.innerHTML = "Item Name:" + item_name;
    $("#confirm_delete_modal").modal('show');
    $("#delete_button_modal").click(function(){
      window.location.replace("remove_item/"+item_id);
    });
}

$(document).ready(function(){
  $("#add_item_form").hide();
  $("#collapse_form_button").show();
});
$("#collapse_form_button").click(function(){
  $("#add_item_form").show(1000);
  $("#collapse_form_button").hide(1000);
});

$("#cancel_add_item_button").click(function(){
  $("#add_item_form").hide(1000);
  $("#collapse_form_button").show(1000);
});
