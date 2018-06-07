<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_controller extends CI_Controller{

    public function index(){
        $data['title'] = 'Manager';
        if ('manager' == $this->session->userdata("user")) {
          $this->load->view('manager/main', $data);
        }
        else{
        redirect(base_url() . 'index.php/');
      }
    }
}
