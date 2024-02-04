<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
		$this->load->helper('url');
	}

	//ポスト詳細
	public function index()
	{
		$ua = $_SERVER['HTTP_USER_AGENT'];
		if(preg_match('/Android/', $ua) || preg_match('/iPhone/', $ua)){
			$this->view('post_sp.tpl');
		}else{
			$this->view('post_pc.tpl');
		}
		// $this->load->view('welcome_message');
	}
}
