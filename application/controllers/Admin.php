<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
        if(!isset($this->session->user_id) && $this->session->user_status != 1){ //no user id and not admin i.e. user_status of admin is 1(one).
            redirect('admin');
        }
        $this->load->model('admin_model');
    }

    public function show_dashboard(){ //admin dashboard
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/dashbord', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    
    public function show_admin_register_form(){//admin registration form
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/register_admin_form','',TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    
    public function register_new_admin(){ //new admin registration
        $this->form_validation->set_rules('user_name','User name','required|max_length[255]'); //back-end validation
        $this->form_validation->set_rules('user_email','Email Address','required|max_length[255]|is_unique[tbl_user.user_email]');
        $this->form_validation->set_rules('user_password','Admin Password','required|min_length[6]');
        $this->form_validation->set_rules('confirm_password','Confirm Password','required|min_length[6]|matches[user_password]');
        
        if($this->form_validation->run()){
            $this->admin_model->register_new_admin();
            $data['success_message'] = "User Registration Successful";
            $data['admin_main_content'] = $this->load->view('admin/admin_pages/register_admin_form', $data, TRUE);
            $this->load->view('admin/admin_master', $data);
        } else {
            $this->show_admin_register_form(); 
        }
        
        
        
    }
}