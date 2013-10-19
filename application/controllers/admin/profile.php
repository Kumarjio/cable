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
        $this->form_validation->set_rules('name', 'Username', 'trim|required');
        $this->form_validation->set_rules('mail_address', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('language', 'Language', 'trim|required');

        if ($this->input->post('new_password') != '') {
            $this->form_validation->set_rules('new_password', 'New Password', 'trim|required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[new_password]');
        }

        if ($this->form_validation->run() == false) {
            $this->form_validation->set_value('name');
            $this->form_validation->set_value('mail_address');
            $this->form_validation->set_value('language');
            $this->index();
        } else {
            $obj = new admin_aunthenticate_model();
            $obj->username = $this->input->post('name');
            $obj->mail_address = $this->input->post('mail_address');
            $obj->language = $this->input->post('language');

            if ($this->input->post('new_password') != '') {
                $obj->new_password = md5($this->input->post('new_password'));
            }
            $session = $this->session->userdata('admin_details');
            $obj->adminid = $session['session_admin_id'];
            $obj->updateData();

            $this->session->set_flashdata('success', 'Update the Data Sucessfully');
            redirect(base_url() . 'admin/profile', 'refresh');
        }
    }

}

?>