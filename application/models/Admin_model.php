<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{
    public function get_user_detail($usr_mail){
        $usr_dtl = $this->db->select('*')
                        ->from('tbl_user')
                        ->where('user_email', $usr_mail)
                        ->get()
                        ->row();
                return $usr_dtl;
                
    }
}