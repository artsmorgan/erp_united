<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Modal extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }

    /*     * *default functin, redirects to login page if no admin logged in yet** */

    public function index() {
        
    }

    /*
     * 	$page_name		=	The name of page
     */

    function popup($module_type = '', $page_name = '', $param3 = '', $param4 = '') {
        $page_data['param3']    = $param3;
        $page_data['param4']    = $param4;
        $this->load->view($module_type . '/' . $page_name . '.php', $page_data);

        echo '<script src="' . base_url() . 'assets/js/neon-custom-ajax.js"></script>';
    }
}

?>