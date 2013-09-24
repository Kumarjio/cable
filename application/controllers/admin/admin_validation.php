<?php

/**
 * this page checkes for login 
 */
class admin_validation extends CI_Controller {

    public function __construct() {
        parent::__construct();

// the call to following function stops the user from clicking on back buton.
// it prevents the pages from being cached.
        $this->__clear_cache();
    }

    /**
     * stops the pages from being cached
     * actually clears the cache memory
     */
    private function __clear_cache() {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }

    /**
     * checks login. if the login is not done then redirects the user to logi page
     */
    function checkLogin() {

        $ci = get_instance();
        if ($ci->router->fetch_directory() == "admin/") {
            if ($ci->router->fetch_class() != 'admin_authenticate') {
                if ($ci->session->userdata('admin_details') == false) {
                    redirect(base_url() . 'admin', 'refresh');
                }
            }
        }
    }

}

?>