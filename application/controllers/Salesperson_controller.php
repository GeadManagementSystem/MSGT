<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesperson_controller extends CI_Controller{

    public function index(){
         if($this->session->userdata('username') === 'salesperson'){
           $this->load->model('stock_model');
           $data['title'] = 'Add new Transaction';
           $data['validation_errors'] = validation_errors();
           $data['list_of_items'] = $this->stock_model->get_item_info('item_names');
           $data['list_of_item_price'] = $this->stock_model->get_item_info('item_price');
           $data['list_of_item_quantity'] = $this->stock_model->get_item_info('item_quantity');
           $this->load->view('salesperson/add_transactions', $data);
         }
         else{
           $this->session->set_flashdata('error','You must be logged in as Salesperson');
           redirect(base_url() . 'index.php/login_controller');
         }

    }

    public function add_transaction($number_of_items_added){
      //load model
      $this->load->model('transactions_model');
      //set rules for the forms
      $this->form_validation->set_rules('amount_given','Ammount Given','required|numeric');
      $this->form_validation->set_rules('customer_name','Customer Name','required');
      $this->form_validation->set_rules('customer_phone','Customer Phone','required');
      $this->form_validation->set_rules('customer_tin','Customer TIN','required');

        if ($this->form_validation->run() == TRUE ){
          $a = $number_of_items_added - 1;
          $cust_name = $this->input->post('customer_name');
          $cust_phone = $this->input->post('customer_phone');
          $cust_tin = $this->input->post('customer_tin');
          $vat_percentage = $this->input->post('vat');
          $discount_percentage = $this->input->post('discount');
          $recipt_no = $this->transactions_model->generate_recipt_no();

          while ($a >= 0) {
            $item_name = $this->input->post("item_name_$a");
            $quantity = $this->input->post("item_quantity_$a");
            $total_price = $this->input->post("total_price_$a");
            $unit_price = $total_price / $quantity;
            $this->transactions_model->add_transaction($recipt_no,$item_name,$quantity,$unit_price,$total_price,$discount_percentage,$vat_percentage,$cust_name,$cust_phone,$cust_tin);

            $a -= 1;
          }
          $this->session->set_flashdata('success','Transactions added sucessfully!');
          //redirect(base_url() . 'index.php/salesperson_controller/');
          $this->print_receipt($recipt_no);
        }


        else{
             $this->index();
        }
    }

    public function print_receipt($recipt_no){
      if($this->session->userdata('username') === 'salesperson'){
        $this->load->model('transactions_model');
        $data['title'] = 'Add new Transaction';
        $data['recipt_no'] = $recipt_no;
        $data['table_values'] = $this->transactions_model->gen_recipt($recipt_no);
        $this->load->view('salesperson/recipt', $data);
      }
      else{
        $this->session->set_flashdata('error','You must be logged in as Salesperson');
        redirect(base_url() . 'index.php/login_controller');
      }
    }

    public function notify_order(){
      $this->load->model('transactions_model');
      $this->load->helper('file');
      $item_name = $this->input->post("item_name_1");
      $quantity = $this->input->post("item_quantity_1");
      $data = "items are requeted: "."item_name". $item_name."quantity: ".$quantity;
    }

    public function search(){
      if($this->session->userdata('username') === 'salesperson'){
        $this->load->model('transactions_model');
        $data['title'] = 'Previous Transactions';
        $data['table_values'] = $this->transactions_model->get_transaction_info('all');
        $this->load->view('salesperson/previous_transactions', $data);
      }
      else{
        $this->session->set_flashdata('error','You must be logged in as Salesperson');
        redirect(base_url() . 'index.php/login_controller');
      }
    }
}
