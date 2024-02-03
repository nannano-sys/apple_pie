<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

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
