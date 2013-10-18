<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class profile extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library('layout');
        $this->load->model('admin_aunthenticate_model');
        Lanugage_Change::setLanguage();
    }

    function index() {
        $this->layout->setPageTitle('Admin profile');
        $obj = new admin_aunthenticate_model();
        $session = $this->session->userdata('admin_details');
        $data['admin_details'] = $obj->getWhere(array('email' => $session['session_admin_email']));
        $this->layout->view('admin/profile/edit_profile', $data);
    }

    function editProfileListener() {
        $this->layout->setPageTitle('update profile');
        $obj = new admin_aunthenticate_model();
        $session = $this->session->userdata('admin_details');
        $data['admin_details'] = $obj->getWhere(array('email' => $session['session_admin_email']));
        $this->layout->view('admin/profile/edit_profile', $data);
    }

}

?>