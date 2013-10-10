<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->library('layout');
        $this->layout->setPageTitle('Admin Dashboard');
    }

    function index() {
        $data['demo'] = $this->session->userdata('admin_details');
        $this->layout->view('admin/dashboard/view', $data);
    }

}

?>