<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stockmanager_controller extends CI_Controller{



    public function index(){

      $this->load->model('stock_model');

      if($this->session->userdata('username') === 'stockmgr'){
        $data['title'] = 'Stockmanager';
        $data['table_values'] = $this->stock_model->get_item_info('all');
        $data['validation_errors'] = validation_errors();
        $this->load->view('stockmanager/main', $data);
      }
      else{
            $this->session->set_flashdata('error','You must be logged in as Stockmanager');
            redirect(base_url() . 'index.php/login_controller');
      }

    }

    public function add_item(){

      $this->load->model('stock_model');
      //set rules for the forms
      $this->form_validation->set_rules('item_name','Item Name','required');
      $this->form_validation->set_rules('item_quantity','Item Quantity','required|numeric');
      $this->form_validation->set_rules('item_price','Unit Price','required|numeric');

      if ($this->form_validation->run() == TRUE ){

          $item_name = $this->input->post('item_name');
          $unit_price = $this->input->post('item_price');
          $quantity = $this->input->post('item_quantity');


          $this->stock_model->add_item($item_name,$quantity,$unit_price);
          redirect(base_url() . 'index.php/stockmanager_controller/');


      }

      else{
           $this->index();
      }

    }

    public function update_price($item_id){

      $this->form_validation->set_rules('modal_update_price','Unit Price','required|numeric');
      if ($this->form_validation->run() == TRUE ){
      $new_price = $this->input->post('modal_update_price');
      $this->load->model('stock_model');

      if($this->stock_model->update_price($item_id,$new_price) == TRUE){
      redirect(base_url() . 'index.php/stockmanager_controller/');
      }
      else{
        echo "same ammount... nothing to update";
      }

    }
    else{
      $this->index();
    }

    }

    public function remove_item($item_id){
      $this->load->model('stock_model');
      $this->stock_model->remove_item($item_id);
      redirect(base_url() . 'index.php/stockmanager_controller/');

    }




}
