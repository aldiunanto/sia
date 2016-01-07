<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('products_model', 'products', true);
	}
	public function index()
	{
		$data = array(
			'title'		=> 'Products',
			'content'	=> 'products/index',
			'js'		=> array('core/jquery.dataTables.min'),
			'css'		=> array('jquery.dataTables'),
			'fetch'		=> $this->products->fetch()->result()
		);

		$this->load->view('base', $data);
	}

}