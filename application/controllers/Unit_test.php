<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit_test extends CI_Controller{

  public function index(){
    $this->load->library('unit_test');
    $test = $this->decrement_test('unregistered_item',1);

    $expected_result = false;
    $test_name = 'Decrements the quantity of an item';

    $this->unit->run($test, $expected_result, $test_name);

    //test 2
    $test2 = $this->login_as_test('unregistered','unregistered');

    $expected_result2 = false;
    $test_name2 = 'Checks login credentials and return the correct user type';

    $this->unit->run($test2, $expected_result2, $test_name2);

    //test 3
    $test3 = $this->add_staff_member_test('first_name','last_name','10','address');

    $expected_result3 = false;
    $test_name3 = 'Adds Staff member';

    $this->unit->run($test3, $expected_result3, $test_name3);

    echo $this->unit->report();





  }
  public function decrement_test($item_name, $quantity_now){
    $test_db = $this->load->database('test_db',TRUE);
    $select_query = $test_db->query("SELECT * FROM stock WHERE item_name = '$item_name' ");
    $row = $select_query -> row();
    $quantity_old = 1;
    $quantity = $quantity_old - $quantity_now;
    $data = array('quantity'=>$quantity);
    $where = "item_name = '$item_name'";
    $str = $test_db->update_string('stock', $data, $where);;
    $query = $test_db->query($str);

    if($select_query){
      $select_query = $test_db->query("SELECT * FROM stock WHERE item_name = '$item_name' ");
      return TRUE;
    }
    else{
      $last_query = $test_db->last_query();
      return $last_query;
    }
    return false;

}
function login_as_test ($username, $password){
    $test_db = $this->load->database('test_db',TRUE);
    $test_db->where('username',$username);
    $test_db->where('password',$password);
    $query = $test_db->get('users');
    $row = $query -> row();
    if($query->num_rows() > 0){

        // get the role of the user
        if($row->role === 'mgr'){

            return 'manager';

        }
        else if($row->role === 'sper'){
            return 'salesperson';

        }
        else if($row->role === 'smgr'){

            return 'stockmanager';

        }
    }
    else{
        // entered invalid username and password
        return false;
    }
}

public function add_staff_member_test($first_name,$last_name,$salary,$address){
  $test_db = $this->load->database('test_db',TRUE);
  $data = array(
    'first_name'   => $first_name,
    'last_name'  => $last_name,
    'salary'    => $salary,
    'address'    => $address
);
  $add_sql = $test_db->insert_string('staff',$data);
  $query = $test_db->query($add_sql);



  if($query === TRUE){
    $eventlog_description = '<b>Staff Member</b>: '.$first_name." ".$last_name." <b class='text-success'> [Added]<b>";
    $this->load->model('eventlog_model');
    $this->eventlog_model->add_eventlog('Manager',$eventlog_description);
    return TRUE;
  }
  else{
    $last_query = $test_db->last_query();
    return false;
  }
}

public function update_price_test($item_id,$new_price){
$query = $this->db->query("SELECT * FROM stock WHERE item_id = '$item_id' ");
$row = $query->row();
$item_name = $row->item_name;
$old_unit_price = $row->unit_price;
$quantity = $row->quantity;
if(number_format($old_unit_price,2) == number_format($new_price,2)){
  return 'same';
}

else {
  $update_query = $this->db->query("UPDATE stock SET unit_price = '$new_price' WHERE item_id = '$item_id'");
  $eventlog_description = '<b>Item Name: </b>'.$item_name.', <b>Old Price:</b> '.number_format($old_unit_price,2).', <b>New Price:</b> '.number_format($new_price,2)." <b class='text-success'> [Price Updated]<b>";
  $this->load->model('eventlog_model');
  $this->eventlog_model->add_eventlog('Stockmanager',$eventlog_description);
}

}

  }
