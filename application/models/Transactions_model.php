<?php
defined('BASEPATH') OR exit('');

class Transactions_model extends CI_Model{

  public function add_transaction($recipt_no,$item_name,$quantity,$unit_price,$total_price,$discount_percentage,$vat_percentage,$cust_name,$cust_phone,$cust_tin){
    $data = array(
      'recipt_no'             => $recipt_no,
      'item_name'             => $item_name,
      'quantity'              => $quantity,
      'unit_price'            => $unit_price,
      'total_price'           => $total_price,
      'discount_percentage'   => $discount_percentage,
      'vat_percentage'        => $vat_percentage,
      'cust_name'             => $cust_name,
      'cust_phone'            => $cust_phone,
      'cust_tin'              => $cust_tin

  );
    $add_sql = $this->db->insert_string('transactions',$data);
    $query = $this->db->query($add_sql);

    if($query === TRUE){
      //decrement the value
      $this->load->model('stock_model');
      $this->stock_model->decrement($item_name,$quantity);
      $eventlog_description = '<b>Item Name: </b>'.$item_name.', <b>Recipt:</b> '.$recipt_no.', <b>Customer Name: </b>'.$cust_name." <b class='text-success'> [Transaction Added]<b>";
      $this->load->model('eventlog_model');
      $this->eventlog_model->add_eventlog('Stockmanager',$eventlog_description);
      return TRUE;
    }
    else{
      $last_query = $this->db->last_query();
      return $last_query;
    }

  }

  public function get_transaction_info($trans_id){
    $items_stack = array();
    if($trans_id === 'all'){
      $query = $this->db->query("SELECT * FROM transactions");


      foreach ($query->result() as $row) {
        $table_row = " <tr>
                <td>$row->trans_id</td>
                <td>$row->recipt_no</td>
                <td>$row->item_name</td>
                <td>$row->quantity</td>
                <td>$row->total_price</td>
                <td>$row->discount_percentage</td>
                <td>$row->vat_percentage</td>
                <td>$row->cust_name</td>
                <td>$row->cust_phone</td>
                <td>$row->cust_tin</td>
                <td>$row->trans_date</td>
                </tr>";
                array_push($items_stack,$table_row);
      }
    }
    return $items_stack;
  }

  public function get_total_earned_today(){
    //TODO implementation
  }

  public function generate_recipt_no(){
    $recipt_no = mt_rand(100,100000);
    $this->db->where('recipt_no',$recipt_no);;
    $query = $this->db->get('transactions');
    $row = $query -> row();
    if($query->num_rows() > 0){
      $this->generate_recipt_no();
    }
    else{
      return $recipt_no;
    }
  }

}
