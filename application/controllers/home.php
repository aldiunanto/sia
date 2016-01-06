<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array(
			'title'		=> 'Homepage',
			'content'	=> 'home/index'
		);

		$this->load->view('base', $data);
	}

}