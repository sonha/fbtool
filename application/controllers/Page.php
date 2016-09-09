<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

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
		$data['user'] = $this->user_info;
		$this->load->view('layouts/partial_top', $data);
		$this->load->view('page/test');	
		$this->load->view('layouts/partial_bottom');
	}

	public function post() {
		$data['title'] = 'Create Schedule';
		$data['user'] = $this->user_info;
		$data['pages'] = $this->facebook->request('get', '/me/accounts?limit=1000');

		if(isset($_POST['submit'])) {
			var_dump($_POST);die;
			$page_info = $_POST['page_info'];  // select co value dang : page_id-page_access_token de tien lay token
			$page_id = explode('-', $page_info)[0];
			$page_token = explode('-', $page_info)[1];
			$fb = $this->facebook->object();

			$post = $fb->post('/'.$page_id .'/feed',
	                 array('message' => 'Test Posting',
	                        'link' => 'http://dantri.com.vn/xa-hoi/mot-nguoi-rai-30-ty-dong-chay-vao-dai-bieu-quoc-hoi-de-lam-gi-20160908113327704.htm',
	                        // 'published' => false,
	                        // 'place' => $place,
	                        // 'scheduled_publish_time' => $now
	                  ),
	                  $page_token);
		    $post = $post->getGraphNode()->asArray();
		    print_r($post);die;
		}

		$this->load->view('layouts/partial_top', $data);
		$this->load->view('page/post', $data);	
		$this->load->view('layouts/partial_bottom');
	}

}
