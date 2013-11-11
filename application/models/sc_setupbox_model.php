<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class sc_setupbox_model extends CI_model {

    public $setup_box_id;
    public $model;
    public $type;
    public $stb_no;
    public $cfa_no;
    public $date_of_purchase;
    public $created_id;
    public $created_datetime;
    public $modify_id;
    public $modify_datetime;
    private $table_name = 'sc_setupbox';

    function __construct() {
        parent::__construct();
    }

    function validationRules() {
        $validation_rules = array(
            array(
                'field' => 'model',
                'label' => $this->lang->line('model'),
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'type',
                'label' => $this->lang->line('type'),
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'date_of_purchase',
                'label' => $this->lang->line('date_of_purchase'),
                'rules' => 'required|trim'
            )
        );
        return $validation_rules;
    }

    function convertObject($old) {
        $new = new sc_setupbox_model();
        $new->setup_box_id = $old->setup_box_id;
        $new->model = $old->model;
        $new->type = $old->type;
        $new->stb_no = $old->stb_no;
        $new->cfa_no = $old->cfa_no;
        $new->date_of_purchase = $old->date_of_purchase;
        $new->created_id = $old->created_id;
        $new->created_datetime = $old->created_datetime;
        $new->modify_id = $old->modify_id;
        $new->modify_datetime = $old->modify_datetime;
        return $new;
    }

    function toArray() {
        $arr = array();
        if ($this->setup_box_id != '')
            $arr['setup_box_id'] = $this->setup_box_id;

        if ($this->model != '')
            $arr['model'] = $this->model;

        if ($this->type == 'NR' || $this->type == 'HD')
            $arr['type'] = $this->type;

        if ($this->stb_no != '')
            $arr['stb_no'] = $this->stb_no;

        if ($this->cfa_no != '')
            $arr['cfa_no'] = $this->cfa_no;

        if ($this->date_of_purchase != '')
            $arr['date_of_purchase'] = $this->date_of_purchase;

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
            $orderby = 'setup_box_id';
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
            $orderby = 'setup_box_id';
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
        unset($array['setup_box_id']);
        $this->db->where('setup_box_id', $this->setup_box_id);
        $this->db->update($this->table_name, $array);
        $check = $this->db->affected_rows();
        if ($check > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function deleteData() {
        $this->db->where('setup_box_id', $this->setup_box_id);
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
        $this->db->order_by('setup_box_id', 'desc');
        $this->db->limit(1);
        $res = $this->db->get();
        $result = $res->result();

        if ($res->num_rows > 0) {
            $last_id = substr($result[0]->setup_box_id, 6);
        }
        if ($last_id >= 0 && $last_id < 9) {
            $new_id = 'SC_SB_000' . ($last_id + 1);
        } else if ($last_id > 9 && $last_id < 99) {
            $new_id = 'SC_SB_00' . ($last_id + 1);
        } else if ($last_id > 99 && $last_id < 999) {
            $new_id = 'SC_SB_0' . ($last_id + 1);
        } else if ($last_id > 999 && $last_id <= 9999) {
            $new_id = 'SC_SB_' . ($last_id + 1);
        }

        return $new_id;
    }

    function getNonUsedSetupbox() {
        $objects = array();
        $this->db->select($this->table_name . '.*');
        $this->db->from($this->table_name);
        $this->db->join('sc_customer', $this->table_name . '.setup_box_id!=sc_customer.setup_box_id');
        $res = $this->db->get();
        foreach ($res->result() as $row) {
            $obj = $this->convertObject($row);
            $objects[] = $obj;
        }
        return $objects;
    }

}

?>