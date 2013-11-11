<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class sc_society_model extends CI_model {

    public $societyid;
    public $name;
    public $created_id;
    public $created_datetime;
    public $modify_id;
    public $modify_datetime;
    private $table_name = 'sc_society';

    function __construct() {
        parent::__construct();
    }

    function validationRules() {
        $validation_rules = array();
        return $validation_rules;
    }

    function convertObject($old) {
        $new = new sc_society_model();
        $new->societyid = $old->societyid;
        $new->name = $old->name;       
        $new->created_id = $old->created_id;
        $new->created_datetime = $old->created_datetime;
        $new->modify_id = $old->modify_id;
        $new->modify_datetime= $old->modify_datetime;
        return $new;
    }

    function toArray() {
        $arr = array();
        if ($this->societyid != '')
            $arr['societyid'] = $this->societyid;
        
        if ($this->name != '')
            $arr['name'] = $this->name;
        
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
            $orderby = 'societyid';
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
            $orderby = 'societyid';
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
        unset($array['societyid']);
        $this->db->where('societyid', $this->societyid);
        $this->db->update($this->table_name, $array);
        $check = $this->db->affected_rows();
        if ($check > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function deleteData() {
        $this->db->where('societyid', $this->societyid);
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
        $this->db->order_by('societyid', 'desc');
        $this->db->limit(1);
        $res = $this->db->get();
        $result = $res->result();

        if ($res->num_rows > 0) {
            $last_id = substr($result[0]->societyid, 6);
        }
        if ($last_id >= 0 && $last_id < 9) {
            $new_id = 'SC_SO_000' . ($last_id + 1);
        } else if ($last_id > 9 && $last_id < 99) {
            $new_id = 'SC_SO_00' . ($last_id + 1);
        } else if ($last_id >99 && $last_id < 999) {
            $new_id = 'SC_SO_0' . ($last_id + 1);
        } else if ($last_id >999 && $last_id <= 9999) {
            $new_id = 'SC_SO_' . ($last_id + 1);
        }

        return $new_id;
    }

}

?>