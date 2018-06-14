<?php
defined('BASEPATH') OR exit('');

class Staff_model extends CI_Model{

  public function add_staff_member($first_name,$last_name,$salary,$address){
    $data = array(
      'first_name'   => $first_name,
      'last_name'  => $last_name,
      'salary'    => $salary,
      'address'    => $address
  );
    $add_sql = $this->db->insert_string('staff',$data);
    $query = $this->db->query($add_sql);

    if($query === TRUE){
      return TRUE;
    }
    else{
      $last_query = $this->db->last_query();
      return $last_query;
    }
  }

  public function get_staff_info($staff_id){
    $staff_stack = array();
    if($staff_id === 'all'){
      $query = $this->db->query("SELECT * FROM staff");


      foreach ($query->result() as $row) {
        $table_row = " <tr>
                <td>$row->staff_id</td>
                <td id = 'staff_first_name_$row->staff_id'> $row->first_name</td>
                <td id = 'staff_last_name_$row->staff_id'>$row->last_name</td>
                <td>$row->salary</td>
                <td>$row->address</td>
                <td class = 'active  text-center'><button  class='btn btn-danger btn-sm ' onclick='confirm_delete($row->staff_id)'>Delete Staff Member</button></td>
                </tr>";
                array_push($staff_stack,$table_row);
      }
      return $staff_stack;
    }
    else{
      $query = $this->db->query("SELECT * FROM staff WHERE staff_id = '$staff_id' ");
      foreach ($query->result() as $row) {
        $table_row = " <tr>
                <td>$row->staff_id</td>
                <td id = 'staff_first_name_$row->staff_id'> $row->first_name</td>
                <td id = 'staff_last_name_$row->staff_id'>$row->last_name</td>
                <td>$row->salary</td>
                <td>$row->address</td>
                <td class = 'active  text-center'><button  class='btn btn-danger btn-sm ' onclick='confirm_delete($row->staff_id)'>Delete Staff Member</button></td>
                </tr>";
                array_push($staff_stack,$table_row);
      }
      return $staff_stack;
    }
  }

  public function delete_staff_member($staff_id){
      $query = $this->db->query("DELETE FROM staff WHERE staff_id = '$staff_id' ");
  }

}
