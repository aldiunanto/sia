<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$data = array(
			'title'		=> 'Products',
			'content'	=> 'products/index',
			'js'		=> array('core/jquery.dataTables.min'),
			'css'		=> array('jquery.dataTables')
		);

		$this->load->view('base', $data);
	}

}