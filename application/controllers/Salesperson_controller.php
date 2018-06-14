<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesperson_controller extends CI_Controller{

    public function index(){
         if($this->session->userdata('username') === 'salesperson'){
           $data['title'] = 'Salesperson';
           $this->load->view('salesperson/addtransactions', $data);
         }
         else{
           $this->session->set_flashdata('error','You must be logged in as Salesperson');
           redirect(base_url() . 'index.php/login_controller');
         }

    }

    public function addTransaction(){

      //set rules for the forms
      $this->form_validation->set_rules('ammount_given','Ammount Given','required');
      $this->form_validation->set_rules('customer_name','Customer Name','required');
      $this->form_validation->set_rules('phone_number','Customer Phone','required');
      $this->form_validation->set_rules('customer_tin','Customer TIN','required');

        if ($this->form_validation->run() == TRUE ){

          echo "works";
        }

        else{
             $this->index();
        }
    }
}
