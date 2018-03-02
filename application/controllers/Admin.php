<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
        if(!isset($this->session->user_id) && $this->session->user_status != 1){ //no user id and not admin i.e. user_status of admin is 1(one).
            redirect('admin');
        }
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
}