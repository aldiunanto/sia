<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('products_model', 'products', true);
	}
	public function index(){
		$data = array(
			'title'		=> 'Products',
			'content'	=> 'products/index',
			'js'		=> array('core/jquery.dataTables.min'),
			'css'		=> array('jquery.dataTables'),
			'fetch'		=> $this->products->fetch()->result()
		);

		$this->load->view('base', $data);
	}
	public function delete($prod_id){
		$this->products->delete($prod_id);

		$this->session->set_flashdata('deleted', '<div class="alert alert-success"><strong>Success!</strong> The product has been deleted.</div>');
		redirect('products');
	}
	public function add(){
		$data = array(
			'title'		=> 'Add Product',
			'content'	=> 'products/add'
		);

		$this->load->view('base', $data);
	}

}