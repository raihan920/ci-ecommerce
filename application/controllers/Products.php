<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function show_add_product_form(){
        echo 'inside show_add_product_form';
    }
}