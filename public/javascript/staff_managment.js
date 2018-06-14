function confirm_delete(staff_id){
  let modal_title = document.getElementById("confirm_delete_modal_title");
  let staff_first_name = document.getElementById("staff_first_name_"+staff_id).innerHTML;
  let staff_last_name = document.getElementById("staff_last_name_"+staff_id).innerHTML;
  modal_title.innerHTML = "Staff Member:" + staff_first_name +" "+staff_last_name;
    $("#confirm_delete_modal").modal('show');
    $("#delete_button_modal").click(function(){
      window.location.replace("delete_staff_member/"+staff_id);
    });
}

$(document).ready(function(){
  $("#add_staff_member_form").hide();
  $("#collapse_form_button").show();
});
$("#collapse_form_button").click(function(){
  $("#add_staff_member_form").show(1000);
  $("#collapse_form_button").hide(1000);
});

$("#cancel_add_staff_member_button").click(function(){
  $("#add_staff_member_form").hide(1000);
  $("#collapse_form_button").show(1000);
});
