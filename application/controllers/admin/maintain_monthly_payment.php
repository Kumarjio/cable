<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class maintain_monthly_payment extends CI_Controller {

    function __construct() {
        parent::__construct();
        Lanugage_Change::setLanguage();
        $this->layout->setField('page_title', $this->lang->line('admin_monthly_page_title'));
        $this->load->model('sc_society_model');
    }

    public function index($year, $month) {
        $data['year'] = $year;
        $data['month'] = $month;
        $this->layout->view('admin/monthly/view', $data);
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
