<?php
defined('BASEPATH') OR exit('');

class Stock_model extends CI_Model{

  public function add_item($item_name,$quantity,$unit_price){

    $data = array(
      'item_name'   => $item_name,
      'unit_price'  => $unit_price,
      'quantity'    => $quantity
  );
  $add_sql = $this->db->insert_string('stock',$data);
  $query = $this->db->query($add_sql);

  if($query === TRUE){
    return TRUE;
  }
  else{
    $last_query = $this->db->last_query();
    return $last_query;
  }



  }

  public function get_item_info($item_id){
    $items_stack = array();
    if($item_id === 'all'){
      $query = $this->db->query("SELECT * FROM stock");


      foreach ($query->result() as $row) {
        $table_row = " <tr>
                <td>$row->item_id</td>
                <td id = 'item_name_$row->item_id'> $row->item_name</td>
                <td id = 'item_price_$row->unit_price'> $row->unit_price</td>
                <td>$row->quantity</td>
                <td>$row->date_added</td>
                <td class = 'active text-center'><button  class='btn btn-success btn-sm ' onclick='display_modal($row->item_id)'>Update Price</button></td>
                <td class = 'active  text-center'><button  class='btn btn-danger btn-sm ' onclick='confirm_delete($row->item_id)'>Delete Item</button></td>
                </tr>";
                array_push($items_stack,$table_row);
      }
      return $items_stack;
    }
    else{
      $query = $this->db->query("SELECT * FROM stock WHERE item_id = '$item_id' ");
      foreach ($query->result() as $row) {
        $table_row = " <tr>
                <td>$row->item_id</td>
                <td id = 'item_name_$row->item_id'> $row->item_name</td>
                <td id = 'item_price_$row->unit_price'> $row->unit_price</td>
                <td>$row->quantity</td>
                <td>$row->date_added</td>
                <td class = 'active '><button  class='btn btn-success btn-sm ' onclick='display_modal($row->item_id)'>Update Price</button></td>
                <td class = 'active'><a href = 'remove_item/$row->item_id' >Delete</a></td>
                </tr>";
                array_push($items_stack,$table_row);
      }
      return $items_stack;
    }

  }

  public function update_price($item_id,$new_price){
  $query = $this->db->query("SELECT * FROM stock WHERE item_id = '$item_id' ");
  $row = $query->result();
  if($row->unit_price === $new_price){
    return FALSE;
  }

  else {
    $update_query = $this->db->query("UPDATE stock SET unit_price = '$new_price' WHERE item_id = '$item_id'");
    return TRUE;
  }

  }
  public function remove_item($item_id){
    $query = $this->db->query("DELETE FROM stock WHERE item_id = '$item_id' ");
  }


}
