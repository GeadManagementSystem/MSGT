<?php
defined('BASEPATH') OR exit('');

class Eventlog_model extends CI_Model{

  public function add_eventlog($user_in_charge,$description){
    $data = array(
      'user_in_charge'   => $user_in_charge,
      'description'  => $description
  );
  $add_sql = $this->db->insert_string('eventlog',$data);
  $query = $this->db->query($add_sql);

  if($query === TRUE){
    return TRUE;
  }
  else{
    $last_query = $this->db->last_query();
    return $last_query;
  }
  }

  public function get_eventlog_info($event_id){
    $eventlog_stack = array();
    if($event_id === 'all'){
      $query = $this->db->query("SELECT * FROM eventlog");


      foreach ($query->result() as $row) {
        $table_row = " <tr>
                <td>$row->event_id</td>
                <td> $row->event_time</td>
                <td>$row->user_in_charge</td>
                <td>$row->description</td>
                </tr>";
                array_push($eventlog_stack,$table_row);
      }
      return $eventlog_stack;
    }
    else{
      $query = $this->db->query("SELECT * FROM eventlog WHERE event_id = '$event_id' ");
      foreach ($query->result() as $row) {
        $table_row = " <tr>
                <td>$row->event_id</td>
                <td> $row->event_time</td>
                <td>$row->user_in_charge</td>
                <td>$row->description</td>
                </tr>";
                array_push($eventlog_stack,$table_row);
      }
      return $eventlog_stack;
    }
  }

}
