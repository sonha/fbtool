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
		} else {
			redirect('user/login', 'refresh');
		}
		// Load library and url helper
		$this->load->library('facebook');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->user_info = $user_info;
	}

	public function facebook_publishing($fb = null, $page_id = null, $page_token = null, $url = null, $description = null) {
		$post = $fb->post('/'.$page_id .'/feed',
		                 array('message' => $description,
		                        // 'source' => $video_url,
		                        'link' => $url,
		                        // 'published' => false,
		                        // 'place' => $place,
		                        // 'scheduled_publish_time' => $scheduled_publish_time
		                  ),
		                  $page_token);
		return $post = $post->getGraphNode()->asArray();
	}

	public function feed($id) {
		$data['title'] = 'News Feed';
		$data['user'] = $this->user_info;
		$data['feed'] = $this->facebook->request('get', $id.'/feed?limit=10');
		$this->load->view('layouts/partial_top', $data);
		$this->load->view('page/feed', $data);	
		$this->load->view('layouts/partial_bottom');
	}

	public function post() {
		$data['title'] = 'Create Schedule';
		$data['user'] = $this->user_info;
		$data['pages'] = $this->facebook->request('get', '/me/accounts?limit=1000');

		if(isset($_POST['submit'])) {
			$all_page_info = $_POST['page_info'];  // select co value dang : page_id-page_access_token de tien lay token
			$type = $_POST['type'];  // select co value dang : page_id-page_access_token de tien lay token

			foreach($all_page_info as $key => $page_info) {
				$page_id = explode('-', $page_info)[0];
				$page_token = explode('-', $page_info)[1];
				$fb = $this->facebook->object();
				$mesage = $_POST['status'];

				if($type == 'Status') {
					$post_status = $_POST['status'];
				} elseif($type == 'Link') {
					$link_url = $_POST['link_url'];
					$link_preview_image = $_POST['link_preview_image'];
					$link_message = $_POST['link_message'];
					$link_title = $_POST['link_title'];
					$link_description = $_POST['link_description'];
					$link_caption = $_POST['link_caption'];
					$this->facebook_publishing($fb, $page_id, $page_token, $link_url, $link_message);
				} elseif($type == 'Photo') {
					$photo_image_url = $_POST['photo_image_url'];
					$photo_description = $_POST['photo_description'];
					$this->facebook_publishing($fb, $page_id, $page_token, $photo_image_url, $photo_description);
				} elseif($type == 'Video') {
					$video_url = $_POST['video_url'];
					// $video_title = $_POST['video_title'];
					$video_description = $_POST['video_description'];
					$this->facebook_publishing($fb, $page_id, $page_token, $video_url, $video_description);
				} 
			}
		}

		$this->load->view('layouts/partial_top', $data);
		$this->load->view('page/post', $data);	
		$this->load->view('layouts/partial_bottom');
	}

}
