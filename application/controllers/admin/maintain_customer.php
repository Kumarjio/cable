<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class maintain_customer extends CI_Controller {

    function __construct() {
        parent::__construct();
        Lanugage_Change::setLanguage();
        $this->layout->setField('page_title', $this->lang->line('admin_customer_page_title'));
        $this->load->model('sc_customer_model');
        $this->load->model('sc_society_model');
        $this->load->model('sc_setupbox_model');
    }

    public function index() {
        $this->layout->view('admin/customer/viewall');
    }

    public function add() {
        $obj_soc = new sc_society_model();
        $data['society_details'] = $obj_soc->getAll();

        $obj_setup_box = new sc_setupbox_model();
        $data['setupbox_details'] = $obj_setup_box->getNonUsedSetupbox();

        $this->layout->view('admin/customer/add_customer', $data);
    }

    public function addListener() {
      //  var_dump($_POST);
       // exit;
        $obj = new sc_customer_model();
        $this->form_validation->set_rules($obj->validationRules());
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_value('firstname');
            $this->form_validation->set_value('middlename');
            $this->form_validation->set_value('lastname');
            $this->form_validation->set_value('housenumber');
            $this->form_validation->set_value('email');
            $this->form_validation->set_value('date_of_reg');
            $this->form_validation->set_value('mobileno');
            $this->form_validation->set_value('language');
            $this->form_validation->set_value('setup_box_id');
            $this->form_validation->set_value('monthly_rate');
            $this->add();
        } else {
            $obj->customerid = $obj->autoIncrementID();
            $obj->firstname = $this->input->post('firstname');
            $obj->middlename = $this->input->post('middlename');
            $obj->lastname = $this->input->post('lastname');
            $obj->housenumber = $this->input->post('housenumber');
            $obj->society = $this->input->post('society');
            $obj->email = $this->input->post('email');
            $obj->date_of_reg = date('Y-m-d', strtotime($this->input->post('date_of_reg')));
            $obj->mobileno = $this->input->post('mobileno');
            $obj->language = $this->input->post('language');
            $obj->setup_box_id = $this->input->post('setup_box_id');
            $obj->monthly_rate = $this->input->post('monthly_rate');

            $session_data = $this->session->userdata('admin_details');
            $obj->created_id = $session_data['session_admin_id'];
            $obj->created_datetime = get_current_date_time()->get_date_time_for_db();
            $obj->modify_id = $session_data['session_admin_id'];
            $obj->modify_datetime = get_current_date_time()->get_date_time_for_db();

            $check = $obj->insertData();
            if ($check == true) {
                $this->session->set_flashdata('success', $this->lang->line('add_success'));
            } else {
                $this->session->set_flashdata('error', $this->lang->line('add_error'));
            }
            redirect(ADMIN_BASE_URL . 'customer', 'refresh');
        }
    }

    function edit($id) {
        $res = $this->sc_customer_model->getWhere(array('customerid' => $id));
        if (is_array($res) && count($res) == 1) {
            $data['customer_details'] = $res[0];
            $this->layout->view('admin/customer/edit_customer', $data);
        } else {
            $this->session->set_flashdata('error', 'Error in Editing Data');
            redirect('admin/customer', 'refresh');
        }
    }

    function editListener($id) {
        $res = $this->sc_customer_model->getWhere(array('customerid' => $id));
        if (is_array($res) && count($res) == 1) {
            $obj = new sc_customer_model();
            $this->form_validation->set_rules('name', $this->lang->line('name'), 'required|trim|edit_isDataExitSingTable_validator[' . implode(',', array($id, 'customerid', 'name', 'sc_customer_model')) . ']');

            if ($this->form_validation->run() == FALSE) {
                $this->form_validation->set_value('name');
                $this->edit($id);
            } else {
                $obj->customerid = $id;
                $obj->name = $this->input->post('name');

                $session_data = $this->session->userdata('admin_details');
                $obj->modify_id = $session_data['session_admin_id'];
                $obj->modify_datetime = get_current_date_time()->get_date_time_for_db();

                $check = $obj->updateData();
                if ($check == true) {
                    $this->session->set_flashdata('success', $this->lang->line('edit_success'));
                    redirect(ADMIN_BASE_URL . 'customer', 'refresh');
                } else {
                    $this->session->set_flashdata('error', $this->lang->line('edit_error'));
                    redirect(ADMIN_BASE_URL . 'customer', 'refresh');
                }
            }
        } else {
            $this->session->set_flashdata('error', $this->lang->line('edit_error'));
            redirect(ADMIN_BASE_URL . 'customer', 'refresh');
        }
    }

    function deleteListener($id) {
        $obj = new sc_customer_model();
        $res = $obj->getWhere(array('customerid' => $id));
        if (is_array($res) && count($res) == 1) {
            $obj->customerid = $id;
            $check = $obj->deleteData();
            if ($check == true) {
                $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            } else {
                $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            }
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
        }
        redirect(ADMIN_BASE_URL . 'customer', 'refresh');
    }

    function getJson() {
        $records = $this->sc_customer_model->getAll();
        $array = $this->getArrayForJson($records);
        $data['aaData'] = $array;
        if (is_array($data)) {
            echo json_encode($data);
        }
    }

    function getArrayForJson($objects) {
        $arra = array();
        foreach ($objects as $value) {
            $temp_arr = array();
            $temp_arr[] = '<a href="' . ADMIN_BASE_URL . 'customer/edit/' . $value->customerid . '">' . @$value->firstname . ' ' . @$value->middlename . ' ' . @$value->lastname . '</a>';
            $temp_arr[] = '<a href="javascript:;" onclick="deleteRow(this)" class="deletepage icon-trash" id="' . $value->customerid . '"></a>';
            $arra[] = $temp_arr;
        }
        return $arra;
    }

}

?>
