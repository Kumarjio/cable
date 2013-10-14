<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class profile extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library('layout');
        Lanugage_Change::setLanguage();
    }

    function index() {
        $this->layout->setPageTitle('Admin profile');
        $this->layout->view('admin/profile/edit_profile');
    }

    function editProfileListener() {
        $this->layout->setPageTitle('update profile');
        $this->layout->view('admin/profile/edit_profile');
    }

}

?>