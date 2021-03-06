<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$user_info = array();
		if ($this->facebook->is_authenticated()) {
			$user = $this->facebook->request('get', '/me?fields=id,name,email,picture,location ,link, bio');
			$feed = $this->facebook->request('get', '/me/posts?limit=5');
			if (!isset($user['error'])) {
				$user_info = $user;
			}
		}
		// Load library and url helper
		$this->load->library('facebook');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->user_info = $user_info;
	}

	public function test() {
		$data['title'] = 'test';
		$data['view'] = 'user/test';
		$this->load->view('layouts/codeto/main', $data);
	}

	public function dashboard() {
		$data['title'] = 'Admin Dashboard - Codeto Master Tool';
		$data['view'] = 'dashboard';
		$data['user'] = array();
		if ($this->facebook->is_authenticated()) {
			$user = $this->facebook->request('get', '/me?fields=id,name,email,picture,location ,link, bio');
//			$feed = $this->facebook->request('get', '/me/posts?limit=5');
			if (!isset($user['error'])) {
				$data['user'] = $user;
			}
		}
		$this->load->view('layouts/codeto/main', $data);
	}

	public function login() {
		$data['user'] = array();
		
		if ($this->facebook->is_authenticated()) {
			$user = $this->facebook->request('get', '/me?fields=id,name,email,picture');
			if (!isset($user['error'])) {
				$data['user'] = $user;
			}
			redirect('user/dashboard', 'refresh');
		}

		$this->load->view('user/login', $data);
	}

	public function profile() {
		$data['user'] = array();
		if ($this->facebook->is_authenticated()) {
			$user = $this->facebook->request('get', '/me?fields=id,name,email,picture,location ,link, bio');
//			$feed = $this->facebook->request('get', '/me/posts?limit=5');
			if (!isset($user['error'])) {
				$data['user'] = $user;
			}
		}

		$this->load->view('layouts/partial_top', $data);
		$this->load->view('user/profile', $data);	
		$this->load->view('layouts/partial_bottom');
	}

	public function list_group() {

		$data['title'] = 'List All Group';
		$data['user'] = $this->user_info;
		$data['groups'] = $this->facebook->request('get', '/me/groups?limit=1000');

		$this->load->view('layouts/partial_top', $data);
		$this->load->view('user/list_group', $data);	
		$this->load->view('layouts/partial_bottom');
	}

	public function list_page() {
		$data['title'] = 'List All Page';
		$data['user'] = $this->user_info;

		if(isset($_POST['submit'])) {
			$search_name = $_POST['search_name'];
			$data['pages'] = $this->facebook->request('get', 'search?q='.$search_name.'&type=page');	
		} else {
			$data['pages'] = $this->facebook->request('get', '/me/accounts?limit=1000');
		}
		$count = count($data['pages']['data']);

		for($i = 0; $i < $count; $i++) {
			$sub_info = $this->facebook->request('get', $data['pages']['data'][$i]['id'].'?fields=about,picture');
			$data['pages']['data'][$i]['other'] = $sub_info;
		}

		// foreach($data['pages']['data'] as $key => $value) {
		// 		$sub_info = $this->facebook->request('get', $data['pages']['data'][$key]['id'].'?fields=about,picture');
		// 		$data['pages']['data'][$key]['other'] = $sub_info;
		// }
		$this->load->view('layouts/partial_top', $data);
		$this->load->view('user/list_page', $data);	
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
