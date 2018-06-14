<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesperson_controller extends CI_Controller{

    public function index(){
         $this->load->library('form_validation');
        $data['title'] = 'Salesperson';
        $this->load->view('salesperson/addtransactions', $data);
    }

    public function addTransaction(){
      $this->load->library('form_validation');
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
