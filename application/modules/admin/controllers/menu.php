<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends MY_Controller {

    function __construct() {
        parent::__construct();
        log_message('debug', 'eSHal-code : Menu class loaded');
    }

    function index() {
        $data['page'] = $this->config->item('eshal_code_template_dir_admin') . "../view_menu";
        $data['module'] = 'admin';
        $this->load->view($this->_containers, $data);
    }
}