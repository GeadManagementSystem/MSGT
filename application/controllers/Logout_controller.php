<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout_controller extends CI_Controller{
    public function index(){
      $username = $this->session->userdata('username');
      $keys = array('username','logged_in');
      $this->session->unset_userdata($keys);
        $this->load->model('eventlog_model');
        // register event
        $eventlog_description = '<b>Username: </b>'.$username."<b class='text-danger'> [Logged out]<b>";
        $this->eventlog_model->add_eventlog('Stockmanager',$eventlog_description);
      redirect(base_url() . 'index.php/login_controller');
    }
  }
