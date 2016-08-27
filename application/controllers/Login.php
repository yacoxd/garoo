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
		}

		if (isset($_GET['code'])) {
			
			$this->googleplus->getAuthenticate();
			$this->session->set_userdata('login',true);
			$this->session->set_userdata('user_profile',$this->googleplus->getUserInfo());
			redirect(base_url(). 'google_login');
		} 

		$data['login_url_google'] = $this->googleplus->loginURL();
        $data['content'] = 'login'; 
        $this->load->view('template', $data);
	}

	public function google_login() {

		if($this->session->userdata('login') != true){
			redirect(base_url());
		}

		$data['user_profile'] = $this->session->userdata('user_profile');
		print_r($data);

	}

	public function logout(){
		
		$this->session->sess_destroy();
		$this->googleplus->revokeToken();
		redirect(base_url());
		
	}
    
}
