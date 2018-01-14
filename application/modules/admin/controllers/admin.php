<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper(array('url','file'));
        $this->load->library(array('form_validation','ion_auth','session'));
        if (!$this->ion_auth->logged_in()) {//cek login ga?
    		redirect('admin/auth/login','refresh');
    	}else{
            if (!$this->ion_auth->in_group('admin')) {//cek admin ga?
                redirect('admin/auth/login','refresh');
            }
        }
        log_message('debug', 'eSHal-code : Admin class loaded');
    }

    function index() {
        $data['page'] = $this->config->item('eshal_code_template_dir_admin') . "../view_admin";
        $data['module'] = 'admin';
        $this->load->view($this->_containers, $data);
    }
}