<?php

class admin_aunthenticate_model extends CI_Model {

    private $table_name = "sc_admin";
    public $adminid;
    public $username;
    public $email;
    public $password;
    public $avtar;
    public $language;
    public $last_login_details;
    public $created_datetime;
    public $modify_datetime;

    public function __construct() {
        parent::__construct();
    }

    function validationRules() {
        $validation_rules = array(
            array(
                'field' => 'admin_mail_address',
                'label' => 'Email Address',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'admin_password',
                'label' => 'Password',
                'rules' => 'required'
            ),
        );

        return $validation_rules;
    }

    function convertObject($old) {
        $new = new admin_aunthenticate_model();

        $new->adminid = $old->adminid;
        $new->username = $old->username;
        $new->email = $old->email;
        $new->password = $old->password;
        $new->avtar = $old->avtar;
        $new->language = $old->language;
        $new->last_login_details = $old->last_login_details;
        $new->created_datetime = $old->created_datetime;
        $new->modify_datetime = $old->modify_datetime;

        return $new;
    }

    public function toArray() {
        $arr = array();

        if ($this->adminid != '')
            $arr['adminid'] = $this->adminid;

        if ($this->username != '')
            $arr['username'] = $this->username;

        if ($this->email != '')
            $arr['email'] = $this->email;

        if ($this->language != '')
            $arr['password'] = $this->language;

        if ($this->language != '')
            $arr['avtar'] = $this->language;

        if ($this->language != '')
            $arr['language'] = $this->language;

        if ($this->last_login_details != '')
            $arr['last_login_details'] = $this->last_login_details;

        if ($this->created_datetime != '')
            $arr['created_datetime'] = $this->created_datetime;

        if ($this->modify_datetime != '')
            $arr['modify_datetime'] = $this->modify_datetime;

        return $arr;
    }

    function updateData() {
        $array = $this->toArray();
        unset($array['adminid']);
        $this->db->where('adminid', $this->adminid);
        $this->db->update($this->table_name, $array);
        return TRUE;
    }

    function getWhere($where) {
        $objects = array();
        $res = $this->db->get_where($this->table_name, $where);
        foreach ($res->result() as $row) {
            $obj = $this->convertObject($row);
            $objects[] = $obj;
        }
        return $objects;
    }

    function checkLogin($email, $password) {
        $login = FALSE;
        $array = array('email' => $email, 'password' => md5($password));

        $check_data = $this->getWhere($array);

        if (is_array($check_data) && count($check_data) == 1) {
            $admin_session = array(
                'session_admin_id' => $check_data[0]->adminid,
                'session_admin_name' => $check_data[0]->username,
                'session_admin_email' => $check_data[0]->email,
                'session_admin_language' => $check_data[0]->language,
                'session_last_login_details' => $check_data[0]->last_login_details,
                'session_admin_avtar' => $check_data[0]->avtar,
                'admin_logged_in' => true
            );
            $session = array('admin_details' => $admin_session);
            $this->session->set_userdata($session);
            $this->updateLastLoignDate($email);
            $login = true;
        } else {
            $login = false;
        }

        return $login;
    }

    /**
     *  this function will check the mail for reset password link and if the mail is matched the admin password is updated by random id.
     * @param type $randid : alpha-numeric string.
     * @return int
     */
    public function checkMail($randid) {
        $email = $this->db->escape_str($this->input->post('email'));
        $query = $this->db->query("select * from  " . $this->table_name . " where username='" . $email . "'");


        if ($query->num_rows() == 1) {
            $data = $query->result();
            if ($data[0]->username === $email) {
                if ($data[0]->status == 1) {
                    $str = $this->db->query("update  " . $this->table_name . " set password='" . $randid . "' where username ='" . $email . "'");
                    return $email;
                } else {
                    return 1;
                }
            } else {
                return 2;
            }
        } else {
            return 3;
        }
    }

    function resetNewPassword($randid, $password) {
        $randid = $this->db->escape_str($randid);
        $this->db->query("update   " . $this->table_name . "  set password ='" . $this->db->escape_str(md5($password)) . "' where password='" . $randid . "'");
        return true;
    }

    function updateLastLoignDate($email) {
        $date = get_current_date_time()->get_date_time_for_db();
        $this->db->query("update   " . $this->table_name . "  set last_login_details ='" . $date . "' where email='" . $email . "'");
        return true;
    }

}

?>
