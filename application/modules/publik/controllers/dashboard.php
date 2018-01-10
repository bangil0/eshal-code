<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    function __construct() {
        parent::__construct();
        log_message('debug', 'eSHal-code : Publik class loaded');
    }

    function index() {
        $data['page'] = $this->config->item('eshal_code_template_dir_publik') . "view_publik_dashboard";
        $data['module'] = 'publik';
        $this->load->view($this->_container, $data);
    }
}