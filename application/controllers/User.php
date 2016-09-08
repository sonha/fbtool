<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// Load library and url helper
		$this->load->library('facebook');
		$this->load->helper('url');
	}

	public function login() {
		$data['user'] = array();
		// Check if user is logged in
		if ($this->facebook->is_authenticated())
		{
			// User logged in, get user details
			$user = $this->facebook->request('get', '/me?fields=id,name,email,picture');
			if (!isset($user['error']))
			{
				$data['user'] = $user;
			}
			// header("Location: https://www.google.com.vn/?gws_rd=ssl");
			redirect('user/profile', 'refresh');
		}

		$this->load->view('user/login', $data);
	}

	public function profile() {
		$data['user'] = array();
		// Check if user is logged in
		if ($this->facebook->is_authenticated())
		{
			// User logged in, get user details
			$user = $this->facebook->request('get', '/me?fields=id,name,email,picture,location ,link, bio');
			$feed = $this->facebook->request('get', '/me?feed');
			var_dump($feed);die;
			if (!isset($user['error']))
			{
				$data['user'] = $user;
			}
		}

		$this->load->view('layouts/partial_top', $data);
		$this->load->view('user/profile', $data);	
		$this->load->view('layouts/partial_bottom');
	}

	/**
	 * Logout for web redirect example
	 *
	 * @return  [type]  [description]
	 */
	public function logout()
	{
		$this->facebook->destroy_session();
		redirect('user/login', redirect);
	}
}
