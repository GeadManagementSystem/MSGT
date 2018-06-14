<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout_controller extends CI_Controller{
    public function index(){
      $keys = array('username','logged_in');
      $this->session->unset_userdata($keys);
      redirect(base_url() . 'index.php/login_controller');
    }
  }
