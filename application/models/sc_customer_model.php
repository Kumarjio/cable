<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class sc_customer_model extends CI_model {

    public $customerid;
    public $firstname;
    public $middlename;
    public $lastname;
    public $note;
    public $email;
    public $password;
    public $housenumber;
    public $society;
    public $date_of_reg;
    public $mobileno;
    public $avtar;
    public $language;
    public $setup_box_id;
    public $created_id;
    public $created_datetime;
    public $modify_id;
    public $modify_datetime;
    private $table_name = 'sc_customer';

    function __construct() {
        parent::__construct();
    }

    function validationRules() {
        $validation_rules = array(
            array(
                'field' => 'firstname',
                'label' => $this->lang->line('firstname'),
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'middlename',
                'label' => $this->lang->line('middlename'),
                'rules' => 'trim'
            ),
            array(
                'field' => 'lastname',
                'label' => $this->lang->line('lastname'),
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'email',
                'label' => $this->lang->line('email'),
                'rules' => 'trim|valid_email'
            ),
            array(
                'field' => 'housenumber',
                'label' => $this->lang->line('housenumber'),
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'society',
                'label' => $this->lang->line('society'),
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'date_of_reg',
                'label' => $this->lang->line('date_of_registration'),
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'mobileno',
                'label' => $this->lang->line('mobileno'),
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'language',
                'label' => $this->lang->line('language'),
                'rules' => 'trim'
            ),
            array(
                'field' => 'setup_box_id',
                'label' => $this->lang->line('setup_box_id'),
                'rules' => 'required|trim'
            )
        );
        return $validation_rules;
    }

    function convertObject($old) {
        $new = new sc_customer_model();
        $new->customerid = $old->customerid;
        $new->firstname = $old->firstname;
        $new->middlename = $old->middlename;
        $new->lastname = $old->lastname;
        $new->email = $old->email;
        $new->note = $old->note;
        $new->password = $old->password;
        $new->housenumber = $old->housenumber;
        $new->society = $old->society;
        $new->date_of_reg = $old->date_of_reg;
        $new->mobileno = $old->mobileno;
        $new->avtar = $old->avtar;
        $new->language = $old->language;
        $new->setup_box_id = $old->setup_box_id;
        $new->created_id = $old->created_id;
        $new->created_datetime = $old->created_datetime;
        $new->modify_id = $old->modify_id;
        $new->modify_datetime = $old->modify_datetime;
        return $new;
    }

    function toArray() {
        $arr = array();
        if ($this->customerid != '')
            $arr['customerid'] = $this->customerid;

        if ($this->firstname != '')
            $arr['firstname'] = $this->firstname;

        if ($this->middlename != '')
            $arr['middlename'] = $this->middlename;

        if ($this->lastname != '')
            $arr['lastname'] = $this->lastname;

        if ($this->note != '')
            $arr['note'] = $this->note;

        if ($this->email != '')
            $arr['email'] = $this->email;

        if ($this->password != '')
            $arr['password'] = $this->password;

        if ($this->housenumber != '')
            $arr['housenumber'] = $this->housenumber;

        if ($this->society != '')
            $arr['society'] = $this->society;

        if ($this->date_of_reg != '')
            $arr['date_of_reg'] = $this->date_of_reg;

        if ($this->mobileno != '')
            $arr['mobileno'] = $this->mobileno;

        if ($this->avtar != '')
            $arr['avtar'] = $this->avtar;
        else
            $arr['avtar'] = 'no-image.png';

        if ($this->language != '')
            $arr['language'] = $this->language;

        if ($this->setup_box_id != '')
            $arr['setup_box_id'] = $this->setup_box_id;

        if ($this->created_id != '')
            $arr['created_id'] = $this->created_id;

        if ($this->created_datetime != '')
            $arr['created_datetime'] = $this->created_datetime;

        if ($this->modify_id != '')
            $arr['modify_id'] = $this->modify_id;

        if ($this->modify_datetime != '')
            $arr['modify_datetime'] = $this->modify_datetime;

        return $arr;
    }

    function getWhere($where, $limit = null, $orderby = null, $ordertype = null) {
        $objects = array();
        $this->db->select(' * ');
        $this->db->from($this->table_name);
        $this->db->where($where);
        if (is_null($orderby)) {
            $orderby = 'customerid';
        }
        if (is_null($ordertype)) {
            $ordertype = 'desc;';
        }
        $this->db->order_by($orderby, $ordertype);
        if ($limit != null) {
            $this->db->limit($limit);
        }
        $res = $this->db->get();
        foreach ($res->result() as $row) {
            $obj = $this->convertObject($row);
            $objects[] = $obj;
        }
        return $objects;
    }

    function getAll($limit = null, $orderby = null, $ordertype = null) {
        $objects = array();
        $this->db->select(' * ');
        $this->db->from($this->table_name);
        if (is_null($orderby)) {
            $orderby = 'customerid';
        }
        if (is_null($ordertype)) {
            $ordertype = 'desc';
        }
        $this->db->order_by($orderby, $ordertype);
        if ($limit != null) {
            $this->db->limit($limit);
        }
        $res = $this->db->get();
        foreach ($res->result() as $row) {
            $obj = $this->convertObject($row);
            $objects[] = $obj;
        }
        return $objects;
    }

    function insertData() {
        $array = $this->toArray();
        $this->db->insert($this->table_name, $array);
        $check = $this->db->affected_rows();
        if ($check > 0) {
            return $this->db->insert_id();
        } else {
            return FALSE;
        }
    }

    function updateData() {
        $array = $this->toArray();
        unset($array['customerid']);
        $this->db->where('customerid', $this->customerid);
        $this->db->update($this->table_name, $array);
        $check = $this->db->affected_rows();
        if ($check > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function deleteData() {
        $this->db->where('customerid', $this->customerid);
        $this->db->delete($this->table_name);
        $check = $this->db->affected_rows();
        if ($check > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function autoIncrementID() {
        $last_id = 0;
        $new_id = 0;
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->order_by('customerid', 'desc');
        $this->db->limit(1);
        $res = $this->db->get();
        $result = $res->result();

        if ($res->num_rows > 0) {
            $last_id = (int) substr($result[0]->customerid, 5);
        }
        if ($last_id >= 0 && $last_id < 9) {
            $new_id = 'SC_C_000' . ($last_id + 1);
        } else if ($last_id >= 9 && $last_id < 99) {
            $new_id = 'SC_C_00' . ($last_id + 1);
        } else if ($last_id >= 99 && $last_id < 999) {
            $new_id = 'SC_C_0' . ($last_id + 1);
        } else if ($last_id >= 999 && $last_id <= 9999) {
            $new_id = 'SC_C_' . ($last_id + 1);
        }

        return $new_id;
    }
    
    function getCustomerDetails($no){
        $this->db->select('customerid,firstname,lastname,housenumber');
        $this->db->from($this->table_name);
        $this->db->like('housenumber',$no, FALSE);
        $res = $this->db->get();
        return $res->result();
    }

    function importData($data_in_array){
        $this->load->model('sc_setupbox_model');
        $this->load->model('sc_connection_rate_model');

        $session_data = $this->session->userdata('admin_details');

        foreach ($data_in_array as $arr) {
            $obj_setup_box = new sc_setupbox_model();
            $setupboxid = $obj_setup_box->autoIncrementID();
            $obj_setup_box->setup_box_id = $setupboxid;
            $obj_setup_box->model = 0;
            $obj_setup_box->stb_no =  $arr[8] ;
            $obj_setup_box->type = 'NR';
            $obj_setup_box->cfa_no = $arr[10];
            $obj_setup_box->date_of_purchase = date('Y-m-d', strtotime($arr[11]));
            $obj_setup_box->created_id = $session_data['session_admin_id'];
            $obj_setup_box->created_datetime = get_current_date_time()->get_date_time_for_db();
            $obj_setup_box->modify_id = $session_data['session_admin_id'];
            $obj_setup_box->modify_datetime = get_current_date_time()->get_date_time_for_db();
            $obj_setup_box->insertData();

            $obj = new sc_customer_model();
            $customerid= $obj->autoIncrementID();
            $obj->customerid = $customerid;
            $obj->firstname = ucfirst($arr[1]);
            $obj->middlename = strtoupper($arr[2]);
            $obj->lastname = ucfirst($arr[3]);
            $obj->note = $arr[4];
            $obj->housenumber = $arr[5];
            $obj->society = $arr[6];
            $obj->email = Null;
            $obj->date_of_reg = date('Y-m-d', strtotime($arr[11]));
            $obj->mobileno = $arr[7];
            $obj->language = '1';
            $obj->setup_box_id = $setupboxid;
            $obj->created_id = $session_data['session_admin_id'];
            $obj->created_datetime = get_current_date_time()->get_date_time_for_db();
            $obj->modify_id = $session_data['session_admin_id'];
            $obj->modify_datetime = get_current_date_time()->get_date_time_for_db();
            $obj->insertData();

            $obj_rate = new sc_connection_rate_model();
            $obj_rate->customer_id = $customerid;
            $obj_rate->rate_year = get_current_date_time()->year;
            $obj_rate->rate = '250';
            $obj_rate->created_datetime = get_current_date_time()->get_date_time_for_db();
            $obj_rate->modify_id = $session_data['session_admin_id'];
            $obj_rate->modify_datetime = get_current_date_time()->get_date_time_for_db();
            $obj_rate->insertData();
        }
        return true;
    }

}

?>