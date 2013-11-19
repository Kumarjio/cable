<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class sc_monthly_payment_model extends CI_model {

    public $monthly_id;
    public $customer_id;
    public $payment_year;
    public $payment_month;
    public $amount;
    public $created_id;
    public $created_datetime;
    public $modify_id;
    public $modify_datetime;
    private $table_name = 'sc_monthly_payment';

    function __construct() {
        parent::__construct();
    }

    function validationRules() {
        $validation_rules = array();
        return $validation_rules;
    }

    function convertObject($old) {
        $new = new sc_monthly_payment_model();
        $new->monthly_id = $old->monthly_id;
        $new->customer_id = $old->customer_id;
        $new->payment_year = $old->payment_year;
        $new->payment_month = $old->payment_month;
        $new->amount = $old->amount;
        $new->created_id = $old->created_id;
        $new->created_datetime = $old->created_datetime;
        $new->modify_id = $old->modify_id;
        $new->modify_datetime = $old->modify_datetime;
        return $new;
    }

    function toArray() {
        $arr = array();
        if ($this->monthly_id != '')
            $arr['monthly_id'] = $this->monthly_id;

        if ($this->customer_id != '')
            $arr['customer_id'] = $this->customer_id;

        if ($this->payment_year != '')
            $arr['payment_year'] = $this->payment_year;

        if ($this->payment_month != '')
            $arr['payment_month'] = $this->payment_month;

        if ($this->amount != '')
            $arr['amount'] = $this->amount;

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
            $orderby = 'monthly_id';
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
            $orderby = 'monthly_id';
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
        unset($array['monthly_id']);
        $this->db->where('monthly_id', $this->monthly_id);
        $this->db->update($this->table_name, $array);
        $check = $this->db->affected_rows();
        if ($check > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function deleteData() {
        $this->db->where('monthly_id', $this->monthly_id);
        $this->db->delete($this->table_name);
        $check = $this->db->affected_rows();
        if ($check > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>