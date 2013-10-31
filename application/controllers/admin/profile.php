<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class profile extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library('layout');
        $this->load->model('admin_aunthenticate_model');
        Lanugage_Change::setLanguage();
    }

    function index($image_error = null) {
        $this->layout->setPageTitle('Admin profile');
        $obj = new admin_aunthenticate_model();
        $session = $this->session->userdata('admin_details');
        $data['admin_details'] = $obj->getWhere(array('email' => $session['session_admin_email']));
        $data['image_error'] = $image_error;
        $this->layout->view('admin/profile/edit_profile', $data);
    }

    function editProfileListener() {
        $this->layout->setPageTitle('update profile');
        $this->form_validation->set_rules('name', 'Username', 'trim|required');
        $this->form_validation->set_rules('mail_address', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('language', 'Language', 'trim|required');

        if ($this->input->post('new_password') != '') {
            $this->form_validation->set_rules('new_password', 'New Password', 'trim|required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[new_password]');
        }

        if ($this->form_validation->run() == false) {
            $this->form_validation->set_value('name');
            $this->form_validation->set_value('mail_address');
            $this->form_validation->set_value('language');
            $this->index();
        } else {
            $obj = new admin_aunthenticate_model();
            $session = $this->session->userdata('admin_details');
            $admin_details = $obj->getWhere(array('email' => $session['session_admin_email']));
            $status = null;
            if (!empty($_FILES['admin_image']['name'])) {
                $upload_status = $this->do_upload('admin_image');
                if (isset($upload_status['upload_data'])) {
                    if ($upload_status['upload_data']['file_name'] != '') {
                        $old_location = $admin_details[0]->avtar;
                        if ($old_location != null && $old_location != 'no_image.png') {
                            $full_path_of_old = './assets/admin_images/' . $old_location;
                            $path_to_be_removed = substr($full_path_of_old, 2);
                            if (file_exists($path_to_be_removed)) {
                                unlink($path_to_be_removed);
                            }

                            $full_path_of_old = './assets/admin_images/large_' . $old_location;
                            $path_to_be_removed = substr($full_path_of_old, 2);
                            if (file_exists($path_to_be_removed)) {
                                unlink($path_to_be_removed);
                            }
                        }
                        $obj->avtar = str_replace(' ', '_', $upload_status['upload_data']['file_name']);
                        $status = TRUE;
                    }
                } else if (isset($upload_status['error'])) {
                    $status = $upload_status['error'];
                }
            } else {
                $status = TRUE;
            }

            if ($status === true) {
                $obj->username = $this->input->post('name');
                $obj->mail_address = $this->input->post('mail_address');
                $obj->language = $this->input->post('language');

                if ($this->input->post('new_password') != '') {
                    $obj->password = md5($this->input->post('new_password'));
                }

                $obj->adminid = $session['session_admin_id'];
                $obj->updateData();

                $check_data = $obj->getWhere(array('adminid' => $session['session_admin_id']));
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
                }

                $this->session->set_flashdata('success', 'Update the Data Sucessfully');
               redirect(base_url() . 'admin/profile', 'refresh');
            } else {
                $this->index($status);
            }
        }
    }

    function do_upload($field) {
        $config['upload_path'] = './assets/admin_images';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['overwrite'] = FALSE;
        $config['remove_spaces'] = TRUE;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($field)) {
            $data = array('error' => $this->upload->display_errors());
            // uploading failed. $error will holds the errors.
        } else {
            $data = array('upload_data' => $this->upload->data($field));
            // uploading successfull, now do your further actions
            $image = $data['upload_data']['file_name'];
            $this->load->helper('image_manipulation/image_manipulation');
            include_lib_image_manipulation();
            $magicianObj = new imageLib('./assets/admin_images/' . $image);
            $magicianObj->resizeImage(250, 250, 'landscape');
            $magicianObj->saveImage('./assets/admin_images/' . 'large_' . $image, 100);

            $magicianObj = new imageLib('./assets/admin_images/' . $image);
            $magicianObj->resizeImage(55, 55, 'crop');
            $magicianObj->saveImage('./assets/admin_images/' . $image, 100);
        }

        return $data;
    }

}

?>