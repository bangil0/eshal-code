<?php
	$this->load->view($this->config->item('eshal_code_template_dir_admin') . 'head');
	$this->load->view($this->config->item('eshal_code_template_dir_admin') . 'header');
	$this->load->view($this->config->item('eshal_code_template_dir_admin') . 'sidebar');
	$this->load->view($this->config->item('eshal_code_template_dir_admin') . 'content');
	$this->load->view($this->config->item('eshal_code_template_dir_admin') . 'footer');