<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tool extends CI_Controller {

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

	public function title() {
		$data['user'] = $this->user_info;
		$data['title'] = "Tool tạo tiêu đề gây sốc";
		$this->load->view('layouts/partial_top', $data);
		$this->load->view('tool/title_tool');	
		$this->load->view('layouts/partial_bottom');
	}

	public function filter() {
		$data['user'] = $this->user_info;
		$data['title'] = "Get Comment Tool";
		$this->load->view('layouts/partial_top', $data);
		$this->load->view('tool/filter_comment');	
		$this->load->view('layouts/partial_bottom');
	}

	public function ajaxGetComment() {	
		$after = isset($_POST['pageAfter']) ? $_POST['pageAfter'] : '';
		$sort_by = isset($_POST['sort_by']) ? $_POST['sort_by'] : '';
		$page_url = isset($_POST['page_url']) ? $_POST['page_url'] : '';
		$data['user'] = $this->user_info;

		if($page_url) {
			try {
				$param = explode('/', $page_url );
				$page_name = $param[3];
				$item_type = $param[4];

				if($item_type == 'photos') {
					$item_id = $param[6];
				} elseif($item_type == 'videos') {
					$item_id = $param[5];
				} elseif($item_type == 'posts') {
					$item_id = $param[5];
				}

				$page_info = $this->facebook->request('get', $page_name);
				$object_id = $page_info['id'].'_'.$item_id;
				$data['comments'] = $this->facebook->request('get', $object_id .'/comments?after='.$after.'&order='.$sort_by);
				// var_dump($data['comments']);die;

				//check Regex để lấy email 
				foreach($data['comments']['data'] as $key => $value) {
					$matches_email = array();
					$matches_mobile = array();
					$pattern_email = '/[a-z\d._%+-]+@[a-z\d.-]+\.[a-z]{2,4}\b/i';
					$pattern_mobile = '/\b\d{3}\s*\s*\d{3}\s*\s*\d{4}\b/';
					// $pattern_mobile = '(\+84|0)\d{9,10}';
					preg_match_all($pattern_mobile,$value['message'],$matches_mobile);
					preg_match_all($pattern_email,$value['message'],$matches_email);
					$data['comments']['data'][$key]['email'] = implode(',', $matches_email[0]);
					$data['comments']['data'][$key]['mobile'] = implode(',', $matches_mobile[0]);
				}

				////check Regex để lấy số điện thoại
				
				$data['comments']['pageAfter'] = isset($data['comments']['paging']['cursors']['after']) ? $data['comments']['paging']['cursors']['after'] : '';
				$data['comments']['campaignId'] = $page_info['id'].'_'.$item_id;
				echo json_encode($data['comments']);exit();
			}  catch (Exception $e) {
    			echo "Da xay ra loi";
			}
		} else {
			echo json_encode(array('error_url' => 'Link sai cmnr'));exit();
		}
	}
}
