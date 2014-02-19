<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class maintain_setup_box extends CI_Controller {

    function __construct() {
        parent::__construct();
        Lanugage_Change::setLanguage();
        $this->layout->setField('page_title', $this->lang->line('admin_setup_box_page_title'));
        $this->load->model('sc_setupbox_model');
    }

    public function index() {
        $this->layout->view('admin/setup_box/viewall');
    }

    public function add() {
        $this->layout->view('admin/setup_box/add_setup_box');
    }

    public function addListener() {
        $obj = new sc_setupbox_model();
        $this->form_validation->set_rules($obj->validationRules());

        $this->form_validation->set_rules('stb_no', $this->lang->line('stb_no'), 'required|trim|is_unique[sc_setupbox.stb_no]');
        $this->form_validation->set_rules('cfa_no', $this->lang->line('cfa_no'), 'required|trim|is_unique[sc_setupbox.cfa_no]');

        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_value('model');
            $this->form_validation->set_value('type_no');
            $this->form_validation->set_value('stb_no');
            $this->form_validation->set_value('cfa_no');
            $this->form_validation->set_value('date_of_purchase');
            $this->add();
        } else {
            $obj->setup_box_id = $obj->autoIncrementID();
            $obj->model = $this->input->post('model');
            $obj->stb_no = $this->input->post('stb_no');
            $obj->type = $this->input->post('type');
            $obj->cfa_no = $this->input->post('cfa_no');
            $obj->date_of_purchase = date('Y-m-d', strtotime($this->input->post('date_of_purchase')));

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
            redirect(ADMIN_BASE_URL . 'setup_box', 'refresh');
        }
    }

    function edit($id) {
        $res = $this->sc_setupbox_model->getWhere(array('setup_box_id' => $id));
        if (is_array($res) && count($res) == 1) {
            $data['setup_box_details'] = $res[0];
            $this->layout->view('admin/setup_box/edit_setup_box', $data);
        } else {
            $this->session->set_flashdata('error', 'Error in Editing Data');
            redirect('admin/setup_box', 'refresh');
        }
    }

    function editListener($id) {
        $res = $this->sc_setupbox_model->getWhere(array('setup_box_id' => $id));
        if (is_array($res) && count($res) == 1) {
            $obj = new sc_setupbox_model();
            $this->form_validation->set_rules($obj->validationRules());

            $this->form_validation->set_rules('stb_no', $this->lang->line('stb_no'), 'required|trim|edit_isDataExitSingTable_validator['.  implode(',', array($id,'setup_box_id','stb_no','sc_setupbox_model')).']');
            $this->form_validation->set_rules('cfa_no', $this->lang->line('cfa_no'), 'required|trim|edit_isDataExitSingTable_validator['.  implode(',', array($id,'setup_box_id','cfa_no','sc_setupbox_model')).']');

            if ($this->form_validation->run() == FALSE) {
                $this->form_validation->set_value('model');
                $this->form_validation->set_value('type_no');
                $this->form_validation->set_value('stb_no');
                $this->form_validation->set_value('cfa_no');
                $this->form_validation->set_value('date_of_purchase');
                $this->edit($id);
            } else {
                $obj->setup_box_id = $id;
                $obj->model = $this->input->post('model');
                $obj->stb_no = $this->input->post('stb_no');
                $obj->type = $this->input->post('type');
                $obj->cfa_no = $this->input->post('cfa_no');
                $obj->date_of_purchase = date('Y-m-d', strtotime($this->input->post('date_of_purchase')));

                $session_data = $this->session->userdata('admin_details');
                $obj->modify_id = $session_data['session_admin_id'];
                $obj->modify_datetime = get_current_date_time()->get_date_time_for_db();

                $check = $obj->updateData();
                if ($check == true) {
                    $this->session->set_flashdata('success', $this->lang->line('edit_success'));
                    redirect(ADMIN_BASE_URL . 'setup_box', 'refresh');
                } else {
                    $this->session->set_flashdata('error', $this->lang->line('edit_error'));
                    redirect(ADMIN_BASE_URL . 'setup_box', 'refresh');
                }
            }
        } else {
            $this->session->set_flashdata('error', $this->lang->line('edit_error'));
            redirect(ADMIN_BASE_URL . 'setup_box', 'refresh');
        }
    }

    function deleteListener($id) {
        $obj = new sc_setupbox_model();
        $res = $obj->getWhere(array('setup_box_id' => $id));
        if (is_array($res) && count($res) == 1) {
            $obj->setup_box_id = $id;
            $check = $obj->deleteData();
            if ($check == true) {
                $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            } else {
                $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            }
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
        }
        redirect(ADMIN_BASE_URL . 'setup_box', 'refresh');
    }

    function getJson() {
       $this->load->library('datatable');
        $this->datatable->aColumns = array('model','stb_no','type','cfa_no', 'date_of_purchase');
        $this->datatable->eColumns = array('setup_box_id');
        $this->datatable->sIndexColumn = "setup_box_id";
        $this->datatable->sTable = "sc_setupbox";
        $this->datatable->myWhere = "WHERE 1=1";
        $this->datatable->sOrder = "order by housenumber desc";
        $this->datatable->datatable_process();

        foreach ($this->datatable->rResult->result_array() as $aRow) {
            $temp_arr = array();
            $temp_arr[] = '<a href="' . ADMIN_BASE_URL . 'setup_box/edit/' . $aRow['setup_box_id'] . '">' . $aRow['model'] . '</a>';
            if ($aRow['type'] == 'NR') {
                $temp_arr[] = 'Normal';
            } else {
                $temp_arr[] = 'HD';
            }
            $temp_arr[] = $aRow['stb_no'];
            $temp_arr[] = $aRow['cfa_no'];
            $temp_arr[] = date('d-m-Y',strtotime($aRow['date_of_purchase']));
            $temp_arr[] = '<a href="javascript:;" onclick="deleteRow(this)" class="deletepage icon-trash" id="' . $aRow['setup_box_id'] . '"></a>';
            $this->datatable->output['aaData'][] = $temp_arr;
        }
        echo json_encode($this->datatable->output);
        exit();
    }

}

?>
