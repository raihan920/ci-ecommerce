<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
        if(!isset($this->session->user_id) && $this->session->user_status != 1){
            redirect('admin');
        }
    }

    public function show_dashboard(){
        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/dashbord', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }
}