<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 5000; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 5000; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 5000; // 50 requests per hour per user/key

		$this->load->model('m_api');
    }
	
    public function log_post()
    {
		date_default_timezone_set("Asia/Jakarta");
		$post = $this->input->post(null, true);
		$mess = [];

		$err = '';
		if(!$post['id_machine']) $err .= ' Id Machine,';
		if($post['status'] == null) $err .= ' Status,';
		if($err != ''){
			$err .= 'Not Found.';
			$mess = [
				'status'	=> 'error',
				'message'	=> $err
			];
			$this->set_response($mess, REST_Controller::HTTP_OK);
			return;
		}
		
		$data = [
			'id_machine' 	=> $post['id_machine'],
			'status'		=> $post['status'],
			'date'			=> date('Y-m-d H:i:s')
		];

		$this->m_api->save_log($data);

		$mess = [
			'status'	=> 'success',
			'message'	=> 'done'
		];
        $this->set_response($mess, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }

}
