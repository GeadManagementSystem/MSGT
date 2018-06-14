<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_controller extends CI_Controller{

    public function index(){


      if($this->session->userdata('username') === 'manager'){
        $data['title'] = 'Manager';
        $this->load->view('manager/main', $data);
      }
      else{
        $this->session->set_flashdata('error','You must be logged in as Manager');
        redirect(base_url() . 'index.php/login_controller');
      }

  }
}
