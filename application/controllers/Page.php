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
		$data['title'] = 'List All Group';
		$data['user'] = $this->user_info;
		$data['pages'] = $this->facebook->request('get', '/me/accounts?limit=1000');
		$data['style'] = array(
							base_url() . "assets/AdminLTE/plugins/daterangepicker/daterangepicker.css",
							base_url() . "assets/AdminLTE/plugins/datepicker/datepicker3.css",
							base_url() . "assets/AdminLTE/plugins/iCheck/all.css",
							base_url() . "assets/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.css",
							base_url() . "assets/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css",
							base_url() . "assets/AdminLTE/plugins/select2/select2.min.css",
						);
		$data['scripts'] = array(
							base_url() . "assets/AdminLTE/plugins/select2/select2.full.min.js",
							base_url() . "assets/AdminLTE/plugins/input-mask/jquery.inputmask.js",
							base_url() . "assets/AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js",
							base_url() . "assets/AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js",
							base_url() . "assets/AdminLTE/plugins/daterangepicker/daterangepicker.js",
							base_url() . "assets/AdminLTE/plugins/datepicker/bootstrap-datepicker.js",
							base_url() . "assets/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.js",
							base_url() . "assets/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js",
							base_url() . "assets/AdminLTE/plugins/iCheck/icheck.min.js"
							);

		if(isset($_POST['submit'])) {
			foreach($data['pages']['data']  as $key => $value) {
		      if($value['name'] == 'Body Building') {
		        $page_id = $value['id'];
		        $page_token = $value['access_token'];
		      }
		    }

			$fb = $this->facebook->object();

			$post = $fb->post('/1592733144373244/feed',
	                 array('message' => 'Test Posting',
	                        'link' => 'http://dantri.com.vn/xa-hoi/mot-nguoi-rai-30-ty-dong-chay-vao-dai-bieu-quoc-hoi-de-lam-gi-20160908113327704.htm',
	                        // 'published' => false,
	                        // 'place' => $place,
	                        // 'scheduled_publish_time' => $now
	                  ),
	                  $page_token);
		    $post = $post->getGraphNode()->asArray();
		    print_r($post);
		}

		// var_dump($data['groups']);die;
		$this->load->view('layouts/partial_top', $data);
		$this->load->view('page/post', $data);	
		$this->load->view('layouts/partial_bottom');
	}

}
