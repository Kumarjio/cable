<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class sc_connection_rate_model extends CI_model {

    public $cr_id;
    public $customer_id;
    public $rate_year;
    public $rate;
    public $created_id;
    public $created_datetime;
    public $modify_id;
    public $modify_datetime;
    private $table_name = 'sc_connection_rate';

    function __construct() {
        parent::__construct();
    }

    function validationRules() {
        $validation_rules = array();
        return $validation_rules;
    }

    function convertObject($old) {
        $new = new sc_connection_rate_model();
        $new->cr_id = $old->cr_id;
        $new->customer_id = $old->customer_id;
        $new->rate_year = $old->rate_year;
        $new->rate = $old->rate;       
        $new->created_id = $old->created_id;
        $new->created_datetime = $old->created_datetime;
        $new->modify_id = $old->modify_id;
        $new->modify_datetime= $old->modify_datetime;
        return $new;
    }

    function toArray() {
        $arr = array();
        if ($this->cr_id != '')
            $arr['cr_id'] = $this->cr_id;
        
        if ($this->customer_id != '')
            $arr['customer_id'] = $this->customer_id;

        if ($this->cr_id != '')
            $arr['cr_id'] = $this->cr_id;
        
        if ($this->rate_year != '')
            $arr['rate_year'] = $this->rate_year;
        
        if ($this->rate != '')
            $arr['rate'] = $this->rate;

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
            $orderby = 'cr_id';
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
            $orderby = 'cr_id';
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
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function updateData() {
        $array = $this->toArray();
        unset($array['cr_id']);
        $this->db->where('cr_id', $this->cr_id);
        $this->db->update($this->table_name, $array);
        $check = $this->db->affected_rows();
        if ($check > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function deleteData() {
        $this->db->where('cr_id', $this->cr_id);
        $this->db->delete($this->table_name);
        $check = $this->db->affected_rows();
        if ($check > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getYearAmount($no, $year){
        $this->db->select('rate');
        $this->db->from($this->table_name);
        $this->db->where(array('customer_id'=>$no, 'rate_year'=>$year));
        $res = $this->db->get()->result();
        if(!empty($res))
            return $res[0]->rate * 12;
        else
            return 0;
    }

    function getCurrentYearAmount($no, $year){
        $this->db->select('rate');
        $this->db->from($this->table_name);
        $this->db->where(array('customer_id'=>$no, 'rate_year'=>$year));
        $res = $this->db->get()->result();
        return $res[0]->rate * (get_current_date_time()->month - 1);
    }

}

?>