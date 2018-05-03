<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller{
    public function __construct() {
        parent::__construct();        
        $this->load->model('products_model');
    }
    
    public function show_add_product_form(){        
        $data['admin_main_content'] = $this->load->view('admin/admin_pages/add_product_form.php','', TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    
    public function save_product(){
        $this->products_model->save_product();
    }
}