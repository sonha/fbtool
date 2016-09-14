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

	public function filter() {
		$data['user'] = $this->user_info;


		// $data['pages'] = $this->facebook->request('get', '/1805441692_10205315391363369');
		// var_dump($data['pages']);die;

		$this->load->view('layouts/partial_top', $data);
		$this->load->view('tool/filter_comment');	
		$this->load->view('layouts/partial_bottom');
	}

	function getFacebookId($url) {
    $id =  substr(strrchr($url,'/'),1); 
    // var_dump($id);die;
    $json = file_get_contents('https://graph.facebook.com/'.$id);
    $json = json_decode($json);
    return $json->id;
	}

	public function ajaxGetComment() {
		$after = isset($_POST['pageAfter']) ? $_POST['pageAfter'] : '';
		$data['user'] = $this->user_info;
		// Hien tai dang fix cung duong link nhe
		// Neu can lay link thi chi can 
		$data['comments'] = $this->facebook->request('get', '438867132818613_1123270124378307/comments?after='.$after);
		// $data['comments'] = $this->facebook->request('get', '438867132818613_1124919824213337/comments?after='.$after);
		$data['comments']['pageAfter'] = isset($data['comments']['paging']['cursors']['after']) ? $data['comments']['paging']['cursors']['after'] : '';
		// $data['comments'] = $this->facebook->request('get', '1805441692_10205315391363369/comments'.$after);
		echo json_encode($data['comments']);die;

		// var_dump($_POST);die;

		
	}
}
