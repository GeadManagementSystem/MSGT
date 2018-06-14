function confirm_delete(staff_id){
  let modal_title = document.getElementById("confirm_delete_modal_title");
  let staff_first_name = document.getElementById("staff_first_name_"+staff_id).innerHTML;
  let staff_last_name = document.getElementById("staff_last_name_"+staff_id).innerHTML;
  modal_title.innerHTML = "Staff Member:" + staff_first_name +" "+staff_last_name;
  let base_url =  document.getElementById("base_url").innerHTML;
    $("#confirm_delete_modal").modal('show');
    $("#delete_button_modal").click(function(){
      window.location.replace(base_url+staff_id);
    });
}

$(document).ready(function(){
  $("#add_staff_member_form").hide();
  $("#collapse_form_button").show();
  if($("#success_flashdata").html() ===""){
    $("#sucess_alert_box").attr("class","alert alert-success alert-dismissable hidden");
  }
  else{
    $("#sucess_alert_box").attr("class","alert alert-success alert-dismissable");
  }
});
$("#collapse_form_button").click(function(){
  $("#add_staff_member_form").show(1000);
  $("#collapse_form_button").hide(1000);
});

$("#cancel_add_staff_member_button").click(function(){
  $("#add_staff_member_form").hide(1000);
  $("#collapse_form_button").show(1000);
});
