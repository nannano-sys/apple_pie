<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
		$this->load->helper('url');
	}

	//  トップページ
	public function index()
	{
		$post = $this->post_model->get_post();
		foreach($post as $item) {
			if (mb_strlen($item['post_content']) >= 20) {
				$item['post_content'] = mb_substr($item['post_content'], 0, 20) . '....';
			}
		}
		$ua = $_SERVER['HTTP_USER_AGENT'];
		if(preg_match('/Android/', $ua) || preg_match('/iPhone/', $ua)){
			$this->smarty->assign("post", $post);
			$this->view('post_top_sp.tpl');
		}else{
			$this->smarty->assign("post", $post);
			$this->view('post_top.tpl');
		}
		// $this->load->view('welcome_message');
	}
}
