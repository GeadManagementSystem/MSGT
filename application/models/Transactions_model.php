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
    $query = $this->db->query("SELECT SUM(total_price) as total_sum FROM `transactions` WHERE DAY(trans_date) = DAY(NOW());");
    foreach ($query->result() as $row) {
      return $row->total_sum;
    }
  }
    public function get_total_sold(){
      $query = $this->db->query("SELECT SUM(quantity) as total_quantity FROM `transactions` ");
      foreach ($query->result() as $row) {
        return $row->total_quantity;
      }

  }
  public function get_highest_demand(){
    $query = $this->db->query("SELECT item_name FROM `transactions` WHERE quantity = (SELECT MAX(quantity) FROM `transactions`)");
    foreach ($query->result() as $row) {
      return $row->item_name;
    }

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
  public function get_tran_from_dates($from_date,$to_date){
    $items_stack = array();
      $query = $this->db->query("SELECT * FROM transactions WHERE DATE(`trans_date`) >= '$from_date' AND DATE(`trans_date`) <= '$to_date'");


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
    return $items_stack;

  }

  public function get_tran_from_dates_total_price($from_date,$to_date){
      $query = $this->db->query("SELECT SUM(total_price) AS total_money FROM transactions WHERE DATE(`trans_date`) >= '$from_date' AND DATE(`trans_date`) <= '$to_date'");


      foreach ($query->result() as $row) {
        return $row->total_money;
      }

  }

  public function get_tran_from_dates_total_quantity($from_date,$to_date){
      $query = $this->db->query("SELECT SUM(quantity) AS total_q FROM transactions WHERE DATE(`trans_date`) >= '$from_date' AND DATE(`trans_date`) <= '$to_date'");


      foreach ($query->result() as $row) {
        return $row->total_q;
      }

  }
  public function gen_recipt($recipt_no){
    $items_stack = array();
      $query = $this->db->query("SELECT * FROM transactions WHERE recipt_no = '$recipt_no' ");
      $cumulative_total = 0;
      $customer_info="";

      foreach ($query->result() as $row) {
        $cumulative_total += $row->total_price;
        $table_row = "
                      <div class='row'><div class='col-lg-12  text-center'><b>Item name:$row->item_name</b></div></div>
                      <div class='row'><div class='col-lg-12  text-center'><b>Quantity:$row->quantity</b></div></div>
                      <div class='row'><div style=' margin-bottom:15px' class='col-lg-12  text-center'><b>Total Price:$row->total_price</b></div></div>
                      <hr>
                      ";
        $customer_info="<div class='row'><div class='col-lg-12  text-center'><b>Customer Name:$row->cust_name</b></div></div>
                        <div class='row'><div class='col-lg-12  text-center'><b>Customer Phone:$row->cust_phone</b></div></div>
                        <div class='row'><div style=' margin-bottom:15px' class='col-lg-12  text-center'><b>Customer TIN:$row->cust_tin</b></div></div>";
                array_push($items_stack,$table_row);
    }
    $other_info = "
                  <div class='row'><div class='col-lg-12  text-center'><b>VAT %:$row->vat_percentage</b></div></div>
                  <div class='row'><div class='col-lg-12  text-center'><b>Discount %:$row->discount_percentage</b></div></div>
                  <div class='row'><div style=' margin-bottom:15px' class='col-lg-12  text-center'><b>Total :$cumulative_total</b></div></div>";
                    array_push($items_stack,$other_info);
                    array_push($items_stack,$customer_info);
    return $items_stack;

  }

}
