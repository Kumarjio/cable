<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class admin_authenticate extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

// __construct

    function index() {
        $this->layout->view('admin/admin_login_view');
    }

    function login() {
        $data['error'] = '';
        $this->form_validation->set_rules('username', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $login = array();
        $login['username'] = $this->input->post('username');
        $login['password'] = md5($this->input->post('password'));
        $this->form_validation->set_message('required', '%s is required.');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/admin_login_view', $data);
        } else {
            $login_chek = $this->admin_aunthenticate_model->checkLogin($login['username'], $login['password']);
            if (isset($login_chek) && $login_chek !== false) {
                redirect(base_url() . 'admin/user_list');
            } else {
                $data['error'] = 'login';
                $this->load->view('admin/admin_login_view', $data);
            }
        }
    }

    function logout() {
        $this->session->sess_destroy();
        $this->session->unset_userdata('session_admin_id');
        $this->session->unset_userdata('session_admin_fname');
        $this->session->unset_userdata('session_admin_lname');
        redirect(base_url() . 'admin');
    }

// logout

    function forget_password() {
        $data = array();
        $this->load->view('admin/forget_view', $data);
    }

    public function forgot_password_check() {

        //set the validation.
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        //check the validation
        if ($this->form_validation->run() == FALSE) {
            $this->form_validation->set_value('email');
            $this->forgotPassword();
        } else {
            //if validation is passed
            //make a random string for temp password.
            $randid = random_string('alnum', 30);

            //now check the email address enter is exit in db if yes then update the password to randid
            $check = $this->admin_aunthenticate_model->checkMail($randid);

            //if password is updated then send a mail with instructon of changing a password
            if ($check === 1) {
                $this->session->set_flashdata('error', 'Mail Address is Not Active');
                redirect('admin/forgot_password', 'refresh');
            } else if ($check === 2) {
                $this->session->set_flashdata('error', 'Mail Address Not Found');
                redirect('admin/forgot_password', 'refresh');
            } else if ($check === 3) {
                $this->session->set_flashdata('error', 'Mail Address Not Found');
                redirect('admin/forgot_password', 'refresh');
            } else {
                $bussiness_email_adress = $this->input->post('email');
                $admin_detail = $this->admin_aunthenticate_model->getWhere(array('username' => $bussiness_email_adress));

                if (is_array($admin_detail) && count($admin_detail) == 1) {
                    $this->load->helper('sending_mail');
                    $this->load->model('mail_template_model');
                    $emails = new mail_template_model();
                    $emails = $emails->get_where(array('email_type' => 'forgot_password'));
                    $email = $emails[0];
                    $mail_subject = $email->email_subject;
                    $message = $email->email_message;
                    //reset link on which user click and reset the password
                    $reset_link = anchor(base_url() . "admin/reset/$randid", $this->lang->line('forgot_password_click_here'));

                    $message = str_replace('&lt;first_name&gt;', $admin_detail[0]->firstname, $message);
                    $message = str_replace('&lt;last_name&gt;', $admin_detail[0]->lastname, $message);
                    $message = str_replace('&lt;link&gt;', $reset_link, $message);

                    $check = send_mail($bussiness_email_adress, $mail_subject, $message);

                    if ($check == TRUE) {
                        $this->session->set_flashdata('success', $this->lang->line('check_mail'));
                        $this->load->view('admin/forgot_password_success');
                    } else {
                        $this->session->set_flashdata('error', $this->lang->line('check_mail_error'));
                        redirect('admin/forgot_password', 'refresh');
                    }
                }
            }
        }
    }

    public function reset_password($randid) {
        $data['randid'] = $randid;
        $this->load->view('admin/reset_password', $data);
    }

    public function reset_password_save($randid) {
        $this->form_validation->set_rules('password', 'New Password', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|min_length[4]|matches[password]');

        //check validation
        if ($this->form_validation->run() == FALSE) {
            $this->reset_password($randid);
        } else {
            //if validation are passed the update the new password.
            $obj = new admin_aunthenticate_model();

            //check that what ever randid is passed is exit in Database.
            $array = array('password' => $randid);
            $check_data = $obj->getWhere($array);

            //if data exit then only update the new password.
            if (is_array($check_data) && count($check_data) == 1) {
                $check = $obj->resetNewPassword($randid, $this->input->post('password'));
                if ($check == True) {
                    $this->load->view('admin/reset_password_success');
                }
            } else {
                $this->reset_password($randid);
            }
        }
    }

    function home() {
        check_admin(true);
        $data = array();
        $this->layout_admin->view('admin/admin_home_view', $data);
    }

    function checkLogin() {

        if ($this->router->fetch_class() == 'admin' && $this->router->fetch_method() != 'index' && $this->router->fetch_method() != 'login') {
            if ($this->session->userdata('session_admin_id') == '') {
                $data['error'] = 'login';
                redirect(base_url() . 'admin/index');
            }
        }
    }

}

?>