<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct()
    {
        parent::__construct();

		$this->load->model('m_welcome');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function ajax($type){
		$post = html_escape($this->input->post(null, true));
		$result = "";
		if($type == "get_log"){
			$result = $this->m_welcome->get_log(@$post['type'], @$post['status']);
		}
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($result));
	}
}
