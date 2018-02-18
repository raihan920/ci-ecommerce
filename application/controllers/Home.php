<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $data = array();
        $data['slider'] = $this->load->view('pages/slider','',true); //first param = page name, 2nd param values, 3rd param return the code
        $data['featuredItems'] = $this->load->view('pages/featured-items','',true);
        $this->load->view('home', $data);
    }
    
    public function accounts(){
        $data = array();
        $data['slider'] = ''; //first param = page name, 2nd param values, 3rd param return the code
        $data['featuredItems'] = $this->load->view('pages/featured-items','',true);
        $this->load->view('home', $data);
    }
}
