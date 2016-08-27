<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //Helper
        $this->load->helper('facebook_helper');

    }


	public function index()
	{

		$data = array();
		$data['facebook_data'] = facebook_login();  

		if (isset($data['facebook_data']['user_profile'])) {
			print_r($data['facebook_data']);
				

			die();
		}

        $data['content'] = 'login'; 
        $this->load->view('template', $data);
	}
    
}
