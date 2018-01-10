<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {

    function __construct() {
        parent::__construct();
        log_message('debug', 'eSHal-code : Admin class loaded');
    }

    function index() {
        $data['page'] = $this->config->item('eshal_code_template_dir_admin') . "../view_admin";
        $data['module'] = 'admin';
        $this->load->view($this->_containers, $data);
    }
}