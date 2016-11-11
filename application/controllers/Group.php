<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends CI_Controller {

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
		} else {
			redirect('user/login', 'refresh');
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

	public function facebook_publishing($fb = null, $group_id = null, $access_token = null, $url = null, $description = null) {
		$post = $fb->post('/'.$group_id .'/feed',
		                 array('message' => $description,
		                        'link' => $url,
		                  ));
		return $post = $post->getGraphNode()->asArray();
	}


	public function post() {
		$data['title'] = 'Create Group Schedule';
		$data['user'] = $this->user_info;
		$access_token = $this->facebook->is_authenticated();
		// var_dump($token);die;
		$data['groups'] = $this->facebook->request('get', '/me/groups?limit=1000');
		// var_dump($data['groups']);die;
		if(isset($_POST['submit'])) {
			$all_group_info = $_POST['group_info'];  
			// var_dump($all_group_info);die;
			$type = $_POST['type'];  

			foreach($all_group_info as $key => $group_info) {
				$group_id = $group_info;
				$fb = $this->facebook->object();
				$mesage = $_POST['status'];
				if($type == 'Status') {
					$post_status = $_POST['status'];
					$this->facebook_publishing($fb, $group_id, $access_token, null, $post_status);
				} elseif($type == 'Link') {
					$link_url = $_POST['link_url'];
					$link_preview_image = $_POST['link_preview_image'];
					$link_message = $_POST['link_message'];
					$link_title = $_POST['link_title'];
					$link_description = $_POST['link_description'];
					$link_caption = $_POST['link_caption'];
					$this->facebook_publishing($fb, $group_id, $access_token, $link_url, $link_message);
				} elseif($type == 'Photo') {
					$photo_image_url = $_POST['photo_image_url'];
					$photo_description = $_POST['photo_description'];
					$this->facebook_publishing($fb, $group_id,  $access_token, $photo_image_url, $photo_description);
				} elseif($type == 'Video') {
					$video_url = $_POST['video_url'];
					// $video_title = $_POST['video_title'];
					$video_description = $_POST['video_description'];
					$this->facebook_publishing($fb, $group_id,  $access_token, $video_url, $video_description);
					// die('vvv');
				} 
			}
		}

		$this->load->view('layouts/partial_top', $data);
		$this->load->view('group/post', $data);	
		$this->load->view('layouts/partial_bottom');
	}

}
