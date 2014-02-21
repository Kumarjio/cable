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
        $this->load->model('sc_connection_rate_model');
        $this->load->model('sc_monthly_payment_model');

        //$this->output->enable_profiler(TRUE);
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
            $this->add();
        } else {
            $customerid = $obj->autoIncrementID();
            $obj->customerid = $customerid;
            $obj->firstname = $this->input->post('firstname');
            $obj->middlename = $this->input->post('middlename');
            $obj->lastname = $this->input->post('lastname');
            $obj->note = $this->input->post('note');
            $obj->housenumber = $this->input->post('housenumber');
            $obj->society = $this->input->post('society');
            $obj->email = $this->input->post('email');
            $obj->date_of_reg = date('Y-m-d', strtotime($this->input->post('date_of_reg')));
            $obj->mobileno = $this->input->post('mobileno');
            $obj->language = $this->input->post('language');
            $obj->setup_box_id = $this->input->post('setup_box_id');

            $session_data = $this->session->userdata('admin_details');
            $obj->created_id = $session_data['session_admin_id'];
            $obj->created_datetime = get_current_date_time()->get_date_time_for_db();
            $obj->modify_id = $session_data['session_admin_id'];
            $obj->modify_datetime = get_current_date_time()->get_date_time_for_db();
            $check = $obj->insertData();

            $obj_rate = new sc_connection_rate_model();
            $obj_rate->customer_id = $customerid;
            $obj_rate->rate_year = get_current_date_time()->year;
            $obj_rate->rate = $this->input->post('monthly_rate');
            $obj_rate->created_id = $session_data['session_admin_id'];
            $obj_rate->created_datetime = get_current_date_time()->get_date_time_for_db();
            $obj_rate->modify_id = $session_data['session_admin_id'];
            $obj_rate->modify_datetime = get_current_date_time()->get_date_time_for_db();
            $check = $obj_rate->insertData();

            if ($check == true) {
                $this->session->set_flashdata('success', $this->lang->line('add_success'));
            } else {
                $this->session->set_flashdata('error', $this->lang->line('add_error'));
            }
            redirect(ADMIN_BASE_URL . 'customer', 'refresh');
        }
    }

    function edit($id) {
        $id = $this->encrypt->decode($id, $this->config->item('my_encrypt_key'));
        if(!preg_match("/^[a-zA-Z0-9_]*$/", $id)){
            $this->session->set_flashdata('error', 'URL is altered. Please do not change the URL');
            redirect('admin/customer', 'refresh');
        }

        $res = $this->sc_customer_model->getWhere(array('customerid' => $id));
        if (is_array($res) && count($res) == 1) {

            $obj_soc = new sc_society_model();
            $data['society_details'] = $obj_soc->getAll();

            $obj_setup_box = new sc_setupbox_model();
            $data['setupbox_details'] = $obj_setup_box->getNonUsedSetupbox();
            $data['current_box_details'] = $obj_setup_box->getWhere(array('setup_box_id' => $res[0]->setup_box_id));

            $obj_setup_box = new sc_connection_rate_model();
            $data['monthly_rate'] = $obj_setup_box->getWhere(array('customer_id' => $id, 'rate_year' => get_current_date_time()->year));

            $data['customer_details'] = $res[0];
            $this->layout->view('admin/customer/edit_customer', $data);
        } else {
            $this->session->set_flashdata('error', 'Error in Editing Data');
            redirect('admin/customer', 'refresh');
        }
    }

    function editListener($id) {
        $id = $this->encrypt->decode($id, $this->config->item('my_encrypt_key'));
        if(!preg_match("/^[a-zA-Z0-9_]*$/", $id)){
            $this->session->set_flashdata('error', 'URL is altered. Please do not change the URL');
            redirect('admin/customer', 'refresh');
        }

        $res = $this->sc_customer_model->getWhere(array('customerid' => $id));
        if (is_array($res) && count($res) == 1) {
            $obj = new sc_customer_model();

            $obj->customerid = $id;
            $obj->firstname = $this->input->post('firstname');
            $obj->middlename = $this->input->post('middlename');
            $obj->lastname = $this->input->post('lastname');
            $obj->note = $this->input->post('note');
            $obj->housenumber = $this->input->post('housenumber');
            $obj->society = $this->input->post('society');
            $obj->email = $this->input->post('email');
            $obj->date_of_reg = date('Y-m-d', strtotime($this->input->post('date_of_reg')));
            $obj->mobileno = $this->input->post('mobileno');
            $obj->language = $this->input->post('language');
            $obj->setup_box_id = $this->input->post('setup_box_id');

            $session_data = $this->session->userdata('admin_details');
            $obj->modify_id = $session_data['session_admin_id'];
            $obj->modify_datetime = get_current_date_time()->get_date_time_for_db();

            $check = $obj->updateData();

            $obj_setup_box = new sc_connection_rate_model();
            $monthly_rate = $obj_setup_box->getWhere(array('customer_id' => $id, 'rate_year' => get_current_date_time()->year));

            if (is_array($monthly_rate)) {
                $obj_rate = new sc_connection_rate_model();
                $obj_rate->cr_id = $monthly_rate[0]->cr_id;
                $obj_rate->rate = $this->input->post('monthly_rate');
                $obj_rate->modify_id = $session_data['session_admin_id'];
                $obj_rate->modify_datetime = get_current_date_time()->get_date_time_for_db();
                $check = $obj_rate->updateData();
            } else {
                $obj_rate = new sc_connection_rate_model();
                $obj_rate->customer_id = $id;
                $obj_rate->rate_year = get_current_date_time()->year;
                $obj_rate->rate = $this->input->post('monthly_rate');
                $obj_rate->created_id = $session_data['session_admin_id'];
                $obj_rate->created_datetime = get_current_date_time()->get_date_time_for_db();
                $obj_rate->modify_id = $session_data['session_admin_id'];
                $obj_rate->modify_datetime = get_current_date_time()->get_date_time_for_db();
                $check = $obj_rate->insertData();
            }

            if ($check == true) {
                $this->session->set_flashdata('success', $this->lang->line('edit_success'));
                redirect(ADMIN_BASE_URL . 'customer', 'refresh');
            } else {
                $this->session->set_flashdata('error', $this->lang->line('edit_error'));
                redirect(ADMIN_BASE_URL . 'customer', 'refresh');
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
        $this->load->library('datatable');
        $this->datatable->aColumns = array('concat(c.firstname," ", c.middlename, " ", c.lastname) AS customer_name', 'housenumber', 'soc.name', 'mobileno', 'stb_no');
        $this->datatable->eColumns = array('c.customerid');
        $this->datatable->sIndexColumn = "c.customerid";
        $this->datatable->sTable = " sc_customer c, sc_setupbox sb, sc_society soc";
        $this->datatable->myWhere = "WHERE c.society=soc.societyid and sb.setup_box_id = c.setup_box_id";
        $this->datatable->sOrder = "order by housenumber desc";
        $this->datatable->datatable_process();

        foreach ($this->datatable->rResult->result_array() as $aRow) {
            $temp_arr = array();
            $temp_arr[] = '<a href="' . ADMIN_BASE_URL . 'customer/edit/' . $this->encrypt->encode($aRow['customerid'], $this->config->item('my_encrypt_key')) . '">' . $aRow['customer_name'] . '</a>';
            $temp_arr[] = $aRow['housenumber'];
            $temp_arr[] = $aRow['mobileno'];
            $temp_arr[] = $aRow['stb_no'];
            $temp_arr[] = $aRow['name'];
            $temp_arr[] = '<a href="' . ADMIN_BASE_URL . 'customer/history/' . $this->encrypt->encode($aRow['customerid'], $this->config->item('my_encrypt_key')) . '">' . $this->lang->line('click_here') . '</a>';
            $temp_arr[] = '<a href="javascript:;" onclick="deleteRow(this)" class="deletepage icon-trash" id="' . $aRow['customerid'] . '"></a>';
            $this->datatable->output['aaData'][] = $temp_arr;
        }
        echo json_encode($this->datatable->output);
        exit();
    }

    function getCustomerAutocomplete() {
        $res = $this->sc_customer_model->getCustomerDetails($_GET['term']);
        $customers = array();
        foreach ($res as $r) {
            $temp = array();
            $temp['value'] = $r->customerid;
            $temp['label'] = $r->firstname . ' ' . $r->lastname . ' (' . $r->housenumber . ')';
            $customers[] = $temp;
        }
        echo json_encode($customers);
    }

    function import_excel_file() {
        $this->layout->view('admin/customer/import_view');
    }

    function importListener() {
        $pathToFile = $_FILES['user_file']['tmp_name'];
        $this->load->helper('excel/php_to_excel');
        includeExcelClasses();
        $objPHPExcel = PHPExcel_IOFactory::load($pathToFile);
        $array = $objPHPExcel->getActiveSheet()->toArray();
        $this->sc_customer_model->importData($array);
        redirect(ADMIN_BASE_URL . 'customer', 'refresh');
    }

    function customerHistory($customerid){
        $customerid = $this->encrypt->decode($customerid, $this->config->item('my_encrypt_key'));
        if(!preg_match("/^[a-zA-Z0-9_]*$/", $customerid)){
            $this->session->set_flashdata('error', 'URL is altered. Please do not change the URL');
            redirect('admin/customer', 'refresh');
        }

        $data['customer_detail'] = $this->sc_customer_model->getWhere(array('customerid' => $customerid));

        $register_date_year = date('Y', strtotime($data['customer_detail'][0]->date_of_reg));
        if($data['customer_detail'][0]->date_of_disconnection !== null && $data['customer_detail'][0]->date_of_disconnection != '') {
            $disconnect_date_year = date('Y', strtotime($data['customer_detail'][0]->date_of_disconnection));
        } else {
            $disconnect_date_year = get_current_date_time()->year;
        }

        $str = '<div class="table-scrollable"><table class="table table-bordered table-hover">';
        $str .= '<thead><tr><th>&nbsp;</th>';
        for($i= 1; $i<=12; $i++){
            $str .= '<th class="text-center">' . date('M', strtotime(date('Y') .'-' . $i .'-01')). '</th>';
        }
        $str .= '</tr></thead><tbody>';
        for($year = $register_date_year ; $year <= $disconnect_date_year; $year++){
            $str .= '<tr><th class="text-center">' . $year .'</th>'; 
            for($mon= 1; $mon<=12; $mon++){
                $pay = $this->sc_monthly_payment_model->getAmountPaid(array('customer_id' => $data['customer_detail'][0]->customerid, 'payment_year' => $year, 'payment_month' => $mon));
                $str .= '<td class="text-center">' . $pay->amount . '</td>';
            }  
        }
        
        $str .= '</tbody></table></div>';

        $data['table'] = $str;
        $this->layout->view('admin/customer/history', $data);
    }

}

?>
