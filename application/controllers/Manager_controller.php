<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_controller extends CI_Controller{

    public function index(){


      if($this->session->userdata('username') === 'manager'){
        $data['title'] = 'Manager';
        $data['validation_errors'] = validation_errors();
        $this->load->view('manager/main', $data);
      }
      else{
        $this->session->set_flashdata('error','You must be logged in as Manager');
        redirect(base_url() . 'index.php/login_controller');
      }

  }

  public function generate_report(){
    if($this->session->userdata('username') === 'manager'){
      $data['title'] = 'Generate Report';
      $data['validation_errors'] = validation_errors();
      $this->load->view('manager/report', $data);
    }
    else{
      $this->session->set_flashdata('error','You must be logged in as Manager');
      redirect(base_url() . 'index.php/login_controller');
    }
  }

  public function staff_managment(){
    if($this->session->userdata('username') === 'manager'){
      $this->load->model('staff_model');
      $data['title'] = 'Staff Managment';
      $data['validation_errors'] = validation_errors();
      $data['table_values'] = $this->staff_model->get_staff_info('all');
      $this->load->view('manager/staff_managment', $data);
    }
    else{
      $this->session->set_flashdata('error','You must be logged in as Manager');
      redirect(base_url() . 'index.php/login_controller');
    }
  }

  public function add_staff_member(){
  $this->load->model('staff_model');
  //set rules for the forms
  $this->form_validation->set_rules('first_name','First Name','required');
  $this->form_validation->set_rules('last_name','Last Name','required');
  $this->form_validation->set_rules('address','Address','required');
  $this->form_validation->set_rules('salary','Salary','required|numeric');

  if ($this->form_validation->run() == TRUE ){

      $first_name = $this->input->post('first_name');
      $last_name = $this->input->post('last_name');
      $address = $this->input->post('address');
      $salary = $this->input->post('salary');


      $this->staff_model->add_staff_member($first_name,$last_name,$salary,$address);
      $this->session->set_flashdata('success','Staff Member added sucessfully!');
      redirect(base_url() . 'index.php/manager_controller/staff_managment');


  }

  else{
       $this->staff_managment();
  }

  }

  public function delete_staff_member($staff_id){
    $this->load->model('staff_model');
    $this->staff_model->delete_staff_member($staff_id);
    $this->session->set_flashdata('success','Staff Member deleted sucessfully!');
    redirect(base_url() . 'index.php/manager_controller/staff_managment/');
  }

  public function user_log(){
    if($this->session->userdata('username') === 'manager'){
      $data['title'] = 'User Log';
      $data['validation_errors'] = validation_errors();
      $this->load->model('eventlog_model');
      $data['table_values'] = $this->eventlog_model->get_eventlog_info('all');
      $this->load->view('manager/user_log', $data);
    }
    else{
      $this->session->set_flashdata('error','You must be logged in as Manager');
      redirect(base_url() . 'index.php/login_controller');
    }
  }
}
