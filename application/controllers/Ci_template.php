<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ci_template extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->template->page_title = 'Simple Codeigniter Library Template';
		$this->template->navbar_menu = array(
				// array(
				// 	'label'		=> 'View Tutorial',
				// 	'url'		=> 'https://codenolimit.com/sdcsdcsdc',
				// 	'active'	=> TRUE,
				// ),
				array(
					'label'		=> 'Download Source Code',
					'url'		=> 'https://github.com/code-no-limit/CI-template',
					'active'	=> FALSE,
				),
			);
	}

	public function index()
	{
		$data = array();
		$this->template->load('default', 'bootstrap/ci_template');
	}


}
