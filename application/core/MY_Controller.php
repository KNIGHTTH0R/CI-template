<?php

class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->page_title = '';
		$this->navbar_menu = array();
    }


	function set_template($main_content='')
	{
        $data = array();
        $data['page_title'] = $this->page_title;
        $data['navbar_menu'] = $this->navbar_menu;
		$template['header'] = $this->load->view('layout/header', $data, TRUE);
		$template['navbar'] = $this->load->view('layout/navbar', $data, TRUE);
		$template['footer'] = $this->load->view('layout/footer', $data, TRUE);
		$template['main_content'] = $main_content;
		$this->load->view('layout/main', $template);
	}
}
