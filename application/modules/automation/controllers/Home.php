	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Home extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			// blank
		}
		
		public function user(){
			$data['sz_Hmvc'] = "Cài đặt mô hình HMVC trên CodeIgniter !";
			$this->load->view('home-template', $data);
		}
		
	}