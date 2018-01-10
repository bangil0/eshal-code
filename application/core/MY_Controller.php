<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    var $_container;
    var $_modules;

    function __construct() {
        parent::__construct();
        $this->load->helper('url');

        $this->load->config('eshal_code');

        // Set container variable
        $this->_container 	= $this->config->item('eshal_code_template_dir_publik') . "layout.php";
		$this->_containers 	= $this->config->item('eshal_code_template_dir_admin') . "layout.php";
        $this->_modules 	= $this->config->item('modules_locations');

        log_message('debug', 'eSHal-Code : MY_Controller class loaded');
    }
}