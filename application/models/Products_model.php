<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products_model extends CI_Model{    
    public function save_category(){
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_short_desc'] = $this->input->post('category_short_desc', TRUE);
        $data['category_long_desc'] = $this->input->post('category_long_desc', TRUE);
        $data['category_long_desc'] = strip_tags($data['category_long_desc']);
        $data['category_status'] = 1;
        
        $this->db->insert('tbl_category', $data);
    }
    
    public function get_all_category(){
        $data = $this->db->select('*')->from('tbl_category')->get()->result();        
        return $data;
    }
}

