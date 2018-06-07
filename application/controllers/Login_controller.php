<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller{
    public function index(){
        //load form validation class
        $this->load->library('form_validation');
        $data['title'] = 'Login';
        $this->load->view('login', $data);
    }

    public function login(){
        //load form validation class
        $this->load->library('form_validation');
        //set rules for the forms
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        //check if everything goes well with the form validation
        if($this->form_validation->run()){
            //the form is filled as per rules.....
            //get username and password, save them in variables
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //load the model class, to extract the user credentials
            $this->load->model('users_model');
            // calls the login_as function on the model, to make sure if loging in is possible

            if($this->users_model->login_as( $username,$password) === 'manager'){
                //create session...????????
                $session_data = array(
                    'username' => $username

                );
                //set session variable
                $this->session->set_userdata("user",$username);
                //redirect to the desired page
                redirect(base_url() . 'index.php/manager_controller/');
            }
             else if($this->users_model->login_as( $username,$password) === 'salesperson'){
                //create session...????????
                $session_data = array(
                    'username' => $username

                );
                //set session variable
                $this->session->set_userdata($session_data);
                //redirect to the desired page
                redirect(base_url() . 'index.php/salesperson_controller/');
            }
             if($this->users_model->login_as( $username,$password) === 'stockmanager'){
                //create session...????????
                $session_data = array(
                    'username' => $username

                );
                //set session variable
                $this->session->set_userdata($session_data);
                //redirect to the desired page
                redirect(base_url() . 'index.php/stockmanager_controller/');
            }
            else{
                // if there does not exist a user in the table with the entered credentials
                $this->session->set_flashdata('error','Invalid Username and password');
            }
            }
        else{
            //false
            $this->index();
        }
    }
    }
