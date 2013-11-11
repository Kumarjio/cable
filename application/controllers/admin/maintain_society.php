<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class maintain_society extends CI_Controller {

    function __construct() {
        parent::__construct();
        Lanugage_Change::setLanguage();
        $this->layout->setField('page_title', $this->lang->line('admin_society_page_title'));
        $this->load->model('sc_society_model');
    }

    public function index() {
        $this->layout->view('admin/society/viewall');
    }

    public function add() {
        $this->layout->view('admin/society/add_society');
    }

    public function addListener() {
        $obj = new sc_society_model();
        $this->form_validation->set_rules('name', $this->lang->line('name'), 'required|trim|is_unique[sc_society.name]');

        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_value('name');
            $this->add();
        } else {
            $obj->societyid = $obj->autoIncrementID();
            $obj->name = $this->input->post('name');

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
            redirect(ADMIN_BASE_URL . 'society', 'refresh');
        }
    }

    function edit($id) {
        $res = $this->sc_society_model->getWhere(array('societyid' => $id));
        if (is_array($res) && count($res) == 1) {
            $data['society_details'] = $res[0];
            $this->layout->view('admin/society/edit_society', $data);
        } else {
            $this->session->set_flashdata('error', 'Error in Editing Data');
            redirect('admin/society', 'refresh');
        }
    }

    function editListener($id) {
        $res = $this->sc_society_model->getWhere(array('societyid' => $id));
        if (is_array($res) && count($res) == 1) {
            $obj = new sc_society_model();
            $this->form_validation->set_rules('name', $this->lang->line('name'), 'required|trim|edit_isDataExitSingTable_validator[' . implode(',', array($id, 'societyid', 'name', 'sc_society_model')) . ']');

            if ($this->form_validation->run() == FALSE) {
                $this->form_validation->set_value('name');
                $this->edit($id);
            } else {
                $obj->societyid = $id;
                $obj->name = $this->input->post('name');

                $session_data = $this->session->userdata('admin_details');
                $obj->modify_id = $session_data['session_admin_id'];
                $obj->modify_datetime = get_current_date_time()->get_date_time_for_db();

                $check = $obj->updateData();
                if ($check == true) {
                    $this->session->set_flashdata('success', $this->lang->line('edit_success'));
                    redirect(ADMIN_BASE_URL . 'society', 'refresh');
                } else {
                    $this->session->set_flashdata('error', $this->lang->line('edit_error'));
                    redirect(ADMIN_BASE_URL . 'society', 'refresh');
                }
            }
        } else {
            $this->session->set_flashdata('error', $this->lang->line('edit_error'));
            redirect(ADMIN_BASE_URL . 'society', 'refresh');
        }
    }

    function deleteListener($id) {
        $obj = new sc_society_model();
        $res = $obj->getWhere(array('societyid' => $id));
        if (is_array($res) && count($res) == 1) {
            $obj->societyid = $id;
            $check = $obj->deleteData();
            if ($check == true) {
                $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            } else {
                $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            }
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
        }
        redirect(ADMIN_BASE_URL . 'society', 'refresh');
    }

    function getJson() {
        $records = $this->sc_society_model->getAll();
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
            $temp_arr[] = '<a href="' . ADMIN_BASE_URL . 'society/edit/' . $value->societyid . '">' . $value->name . '</a>';
            $temp_arr[] = '<a href="javascript:;" onclick="deleteRow(this)" class="deletepage icon-trash" id="' . $value->societyid . '"></a>';
            $arra[] = $temp_arr;
        }
        return $arra;
    }

}

?>
