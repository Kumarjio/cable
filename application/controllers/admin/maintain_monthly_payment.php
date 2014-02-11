<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class maintain_monthly_payment extends CI_Controller {

    function __construct() {
        parent::__construct();
        Lanugage_Change::setLanguage();
        $this->layout->setField('page_title', $this->lang->line('admin_monthly_page_title'));
        $this->load->model('sc_monthly_payment_model');
        $this->load->model('sc_customer_model');
        $this->load->model('sc_connection_rate_model');
        $this->load->library('datatable');
    }

    public function index($year, $month) {
        $data['years'] = $this->sc_monthly_payment_model->getDistinctYears();
        $data['sel_month'] = $month;
        $data['sel_year'] = $year;
        $this->layout->view('admin/monthly/view', $data);
    }

    function getJson($month, $year) {
        $this->datatable->aColumns = array('m.monthly_id', 'm.amount', 'm.created_datetime', 'm.created_id', 'CONCAT( c.firstname,  \' \', c.lastname ) AS customer_name', 'c.housenumber', 's.name AS society_name');
        $this->datatable->eColumns = array('m.monthly_id');
        $this->datatable->sIndexColumn = "m.monthly_id";
        $this->datatable->sTable = " sc_customer c, sc_monthly_payment m, sc_society s";
        $this->datatable->myWhere = "WHERE m.customer_id = c.customerid AND s.societyid = c.society AND m.payment_year=" . $year ." AND m.payment_month=" .$month;
        $this->datatable->datatable_process();

        foreach ($this->datatable->rResult->result_array() as $aRow) {
            $temp_arr = array();
            $temp_arr[] = '<a href="' . ADMIN_BASE_URL . 'payment/edit/' . $aRow['monthly_id'] . '">' . $aRow['customer_name'] .' ('.$aRow['housenumber'].')' . '</a>';
            $temp_arr[] = $aRow['amount'];
            $temp_arr[] = $aRow['society_name'];
            $temp_arr[] = date('d-m-Y h:i A', strtotime($aRow['created_datetime']));
            $temp_arr[] = admin_aunthenticate_model::getAdminName($aRow['created_id']);
            $temp_arr[] = '<a href="javascript:;" onclick="deleteRow(this)" class="deletepage icon-trash" id="' . $aRow['monthly_id'] . '"></a>';
            $this->datatable->output['aaData'][] = $temp_arr;
        }
        echo json_encode($this->datatable->output);
        exit();
    }

    function view() {
        $this->layout->view('admin/monthly/house_no');
    }

    function checkCustomerHistory($customerid) {
        $year = get_current_date_time()->year;
        
        $last_paid_amount = $this->sc_monthly_payment_model->getTotalAmountPaid(array('customer_id' => $customerid, 'payment_year' => $year-1));
        $last_year_amount = $this->sc_connection_rate_model->getYearAmount($customerid, $year-1);
        $last_year_payment = $last_year_amount - $last_paid_amount;

        $current_paid_amount = $this->sc_monthly_payment_model->getTotalAmountPaid(array('customer_id' => $customerid, 'payment_year' => $year));
        $current_year_amount = $this->sc_connection_rate_model->getCurrentYearAmount($customerid, $year);
        $current_year_payment = $current_year_amount - $current_paid_amount;
       
        $current_year_rate = $this->sc_connection_rate_model->getWhere(array('customer_id' => $customerid, 'rate_year' => $year));
        $data['current_year_rate'] = $current_year_rate[0]->rate;
        $data['last_year_payment'] =  ($last_year_payment >0) ? $last_year_payment : 0;
        $data['current_year_payment'] =  $current_year_payment;
        $data['customer_id'] = $customerid;
        $data['totla_payment'] =  (float)$data['current_year_rate'] + (float)$data['last_year_payment'] + (float)$data['current_year_payment'];
        $this->layout->view('admin/monthly/add_payment', $data);
    }

    function addMonthlyPaymentListener(){
        $obj = new sc_monthly_payment_model();
        
        $obj->customer_id = $this->input->post('customer_id');
        $obj->payment_year = get_current_date_time()->year;
        $obj->payment_month= get_current_date_time()->month;
        $obj->amount= $this->input->post('monthly_payment');
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

        redirect(ADMIN_BASE_URL . 'monthly/'.get_current_date_time()->year.'/'.get_current_date_time()->month, 'refresh');
    }

}

?>
