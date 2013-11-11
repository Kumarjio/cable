<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();       
        Lanugage_Change::setLanguage();
         $this->layout->setField('page_title', $this->lang->line('admin_dashobard_page_title'));
    }

    public function index() {
        $session = $this->session->userdata('admin_details');
        if (empty($session)) {
            $this->session->flashdata('error', $this->lang->line('login_first'));
            redirect(ADMIN_BASE_URL . 'login', 'refresh');
        } else {
            $this->layout->view('admin/dashboard/view');
        }
    }

}

?>