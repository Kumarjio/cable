<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class profile extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->library('layout');
        $this->layout->setPageTitle('Admin profile');
    }

    function index() {
        $this->layout->view('admin/profile/edit_profile');
    }

}

?>