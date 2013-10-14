<?php

/**
 * This class will decide the language choose by the admin or user.
 */
class Lanugage_Change {

    /**
     * This function checks the session and get the language according to the session set
     * @return string : language name
     */
    function getLanguage() {

        //by default set to english language
        $language_id = 1;

        //if admin session is running the set admin language
        if (get_instance()->session->userdata('admin_details') != '') {
            $session_data = get_instance()->session->userdata('admin_details');
            if (isset($session_data['session_admin_language']) && $session_data['session_admin_language'] != "")
                $language_id = $session_data['session_admin_language'];
            else
                $language_id = 1;
        }

        // 0 = Dutch
        // 1 = English
        if ($language_id == 1) {
            $lang = "english";
        } else if ($language_id == 2) {
            $lang = "gujarati";
        }

        return $lang;
    }

    /**
     * This function will set the language and get the content accoridng to language set.
     * @param type $file : from which the content should be get.
     * @return boolean
     */
    public static function setLanguage() {
        $lang = new Lanugage_Change();
        $ci = & get_instance();
        $ci->language = $lang->getLanguage();
        $ci->config->set_item('language', $ci->language);
        $files = $lang->getAdminFiles();
        foreach ($files as $file) {
            $ci->lang->load($file, $ci->language);
        }
    }

    function getAdminFiles() {
        $lang = new Lanugage_Change();
        $ci = & get_instance();
        $controller = $ci->uri->rsegment(1);

        $controller_lang_file_mapping = $lang->filesArrayForAdmin();
        $files = array();
        $files[] = 'admin/main_layout'; // the default files that are always loaded

        if (isset($controller_lang_file_mapping[$controller])) {
            foreach ($controller_lang_file_mapping[$controller] as $value) {
                $files[] = $value;
            }
        }

        return $files;
    }

    function filesArrayForAdmin() {
        $controller_lang_file_mapping = array();

        $controller_lang_file_mapping['profile'][] = 'admin/profile';

        return $controller_lang_file_mapping;
    }

}

?>