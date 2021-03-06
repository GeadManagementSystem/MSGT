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
    $eventlog_description = '<b>Item Name: </b>'.$item_name.', <b>Unit Price:</b> '.number_format($unit_price,2).', <b>Quanity: </b>'.$quantity." <b class='text-success'> [Added]<b>";
    $this->load->model('eventlog_model');
    $this->eventlog_model->add_eventlog('Stockmanager',$eventlog_description);
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
    }
    else if ($item_id === 'item_names') {
      $query = $this->db->query("SELECT * FROM stock");
      foreach ($query->result() as $row) {
        $option_entry = "$row->item_name";
        array_push($items_stack,$option_entry);
      }
    }

      else if ($item_id === 'item_price') {
        $query = $this->db->query("SELECT * FROM stock");
        foreach ($query->result() as $row) {
          $option_entry = "$row->unit_price";
          array_push($items_stack,$option_entry);
        }
      }

        else if ($item_id === 'item_quantity') {
          $query = $this->db->query("SELECT * FROM stock");
          foreach ($query->result() as $row) {
            $option_entry = "$row->quantity";
            array_push($items_stack,$option_entry);
          }
    }
    else if ($item_id === 'total_in_stock') {
      $query = $this->db->query("SELECT SUM(quantity) as total_in_stock FROM stock");
      foreach ($query->result() as $row) {
        return $row->total_in_stock;
      }
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

    }

          return $items_stack;

  }

  public function update_price($item_id,$new_price){
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
  public function remove_item($item_id){
    $select_query = $this->db->query("SELECT * FROM stock WHERE item_id = '$item_id' ");
    $row = $select_query -> row();
    $item_name = $row->item_name;
    $unit_price = $row->unit_price;
    $quantity = $row->quantity;
    $query = $this->db->query("DELETE FROM stock WHERE item_id = '$item_id' ");
    if($query === TRUE){
      $eventlog_description = '<b>Item Name: </b>'.$item_name.', <b>Unit Price:</b> '.number_format($unit_price,2).', <b>Quanity: </b>'.$quantity." <b class='text-danger'> [Deleted]<b>";
      $this->load->model('eventlog_model');
      $this->eventlog_model->add_eventlog('Stockmanager',$eventlog_description);
      return TRUE;
    }
    else{
      $last_query = $this->db->last_query();
      return $last_query;
    }
  }
  public function decrement($item_name, $quantity_now){
    $select_query = $this->db->query("SELECT * FROM stock WHERE item_name = '$item_name' ");
    $row = $select_query -> row();
    $quantity_old = $row->quantity;
    $quantity = $quantity_old - $quantity_now;
    $data = array('quantity'=>$quantity);
    $where = "item_name = '$item_name'";
    $str = $this->db->update_string('stock', $data, $where);;
    $query = $this->db->query($str);

    if($query === TRUE){
      return TRUE;
    }
    else{
      $last_query = $this->db->last_query();
      return $last_query;
    }

}
}
