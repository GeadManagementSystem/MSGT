<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesperson_controller extends CI_Controller{

    public function index(){
        $data['title'] = 'Salesperson';
        $this->load->view('salesperson/addtransactions', $data);
    }
}