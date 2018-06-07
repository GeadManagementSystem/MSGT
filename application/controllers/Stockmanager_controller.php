<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stockmanager_controller extends CI_Controller{

    public function index(){
        $data['title'] = 'Stockmanager';
        $this->load->view('stockmanager/main', $data);
    }
}