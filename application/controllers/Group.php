<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$user_info = array();
		
		if ($this->facebook->is_authenticated()) {
			$user = $this->facebook->request('get', '/me?fields=id,name,email,picture,location ,link, bio');
			if (!isset($user['error'])) {
				$user_info = $user;
			}
		} else {
			redirect('user/login', 'refresh');
		}

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
		                 array(
		                 	'message' => $description,
		                 	 'link' => $url,
		                  ),
		                  $access_token);
		$post = $post->getGraphNode()->asArray();

		if($post) {
			$this->session->set_flashdata('message', 'Bai viet da duoc len lich thanh cong');
		} else {
			$this->session->set_flashdata('message', 'Bai viet chua duoc len lich, vui long thu lai');
		}
	}

    /**
     * @todo : Schedule Post
     * User: SonHA
     */
	public function post() {
		$data['title'] = 'Create Group Schedule';
		$data['user'] = $this->user_info;
		$access_token = $this->facebook->is_authenticated();
		$data['groups'] = $this->facebook->request('get', '/me/groups?limit=1000');

		if(isset($_POST['submit'])) {
			$all_group_info = $_POST['group_info'];  
			$type = $_POST['type'];  

			foreach($all_group_info as $key => $group_info) {
				$group_id = $group_info;
				$fb = $this->facebook->object();
				if($type == 'Status') {
					$post_status = $_POST['status'];
					$this->facebook_publishing($fb, $group_id, $access_token, null, $post_status);
				} elseif($type == 'Link') {
					$link_url = $_POST['link_url'];
//					$link_preview_image = $_POST['link_preview_image'];
					$link_message = $_POST['link_message'];
//					$link_title = $_POST['link_title'];
//					$link_description = $_POST['link_description'];
//					$link_caption = $_POST['link_caption'];
					$this->facebook_publishing($fb, $group_id, $access_token, $link_url, $link_message);
				} elseif($type == 'Photo') {
					$photo_image_url = $_POST['photo_image_url'];
					$photo_description = $_POST['photo_description'];
					$this->facebook_publishing($fb, $group_id,  $access_token, $photo_image_url, $photo_description);
				} elseif($type == 'Video') {
					$video_url = $_POST['video_url'];
					$video_description = $_POST['video_description'];
					$this->facebook_publishing($fb, $group_id,  $access_token, $video_url, $video_description);
				} 
			}
		}

		$this->load->view('layouts/partial_top', $data);
		$this->load->view('group/post', $data);	
		$this->load->view('layouts/partial_bottom');
	}

}
