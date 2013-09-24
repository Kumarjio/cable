<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class layout {

    var $obj;
    var $layout;
    var $page_title;
    var $meta_tag_name;
    var $meta_description;

    function layout($layout = "admin/template/layout_main") {
        $this->obj = & get_instance();
        $this->layout = $layout;
        $this->page_title = "Demo";
    }

    function setLayout($layout) {
        $this->layout = $layout;
    }

    function setField($key, $val) {
        $this->$key = $val;
    }

    function view($view, $data = null, $return = false) {
        $loadedData = array();
        $loadedData['page_title'] = $this->page_title;
        $loadedData['meta_tag_name'] = $this->meta_tag_name;
        $loadedData['meta_description'] = $this->meta_description;
        $loadedData['content_for_layout'] = $this->obj->load->view($view, $data, true);

        if ($return) {
            $output = $this->obj->load->view($this->layout, $loadedData, true);
            return $output;
        } else {
            $this->obj->load->view($this->layout, $loadedData, false);
        }
    }

}

?>