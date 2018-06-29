<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_controller extends CI_Controller{

    public function index(){


      if($this->session->userdata('username') === 'manager'){
        $this->load->model('transactions_model');
        $this->load->model('stock_model');
        $data['title'] = 'Manager';
        $data['total_earned_today'] = $this->transactions_model->get_total_earned_today();
        $data['total_sold'] = $this->transactions_model->get_total_sold();
        $data['highest_demand'] = $this->transactions_model->get_highest_demand();
        $data['total_in_stock'] = $this->stock_model->get_item_info('total_in_stock');
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
  public function report_result($from_date, $to_date){
    $this->load->model('transactions_model');
    $data['title'] = 'Generated Report';
    $data['from_date'] = $from_date;
    $data['to_date'] = $to_date;
    $data['table_values'] = $this->transactions_model->get_tran_from_dates($from_date,$to_date);
    $data['total_price'] = $this->transactions_model->get_tran_from_dates_total_price($from_date,$to_date);
    $data['total_quantity'] = $this->transactions_model->get_tran_from_dates_total_quantity($from_date,$to_date);
    $this->load->view('manager/report_result', $data);

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
  $this->form_validation->set_rules('salary','Salary','required');

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
