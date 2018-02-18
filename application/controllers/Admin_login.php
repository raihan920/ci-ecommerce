<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        if(isset($this->session->user_id)){
            redirect('admin-dashboard');
        }else{
            $this->load->view('admin/admin_login');
        }        
    }

    public function check_admin_login() {//login
        $user_email = $this->input->post('email', TRUE); //coming from form
        $user_password = $this->input->post('password', TRUE); //coming from form            
        //$enc_password = md5($user_password); //encrypting password
        //$hash_password = password_hash($user_password, PASSWORD_DEFAULT); //password_hash is better than md5

        $this->load->model('admin_model'); //connecting or loading model

        $user_detail = $this->admin_model->get_user_detail($user_email); //getting data from model
        
        if(!isset($this->session->user_email)){ //if session does not have any email address
                        
            if (password_verify($user_password, $user_detail->user_password)) { //this is a built in function of php
                if($user_detail->user_status == 1){ //check if the user is active
                    $session_data['user_id'] =  $user_detail->user_id;
                    $session_data['user_email'] =  $user_detail->user_email;
                    $session_data['user_role'] =  $user_detail->user_role;
                    $session_data['user_status'] =  $user_detail->user_status;
                    $this->session->set_userdata($session_data); //setting session
                    redirect('admin-dashboard');
                }else{
                    $data['error_message'] = 'User-ID is inactive.';
                    $this->load->view('admin/admin_login', $data);
                }            
            } else {
                $data['error_message'] = 'Wrong User Name or Password';
                $this->load->view('admin/admin_login', $data);                    
            }
            
        }elseif (isset ($this->session->user_email)) { //session has an email address
            redirect('admin-dashboard');
        }        
    }
    
    public function check_admin_logout(){ //logout
        $this->session->sess_destroy();
        redirect('admin');
    }

}
