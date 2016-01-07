<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('products_model', 'product', true);
	}
	public function index(){
		$data = array(
			'title'		=> 'Products',
			'content'	=> 'products/index',
			'js'		=> array('core/jquery.dataTables.min'),
			'css'		=> array('jquery.dataTables'),
			'fetch'		=> $this->product->fetch()
		);

		$this->load->view('base', $data);
	}
	public function delete($prod_id){
		$this->product->delete($prod_id);

		$this->session->set_flashdata('deleted', '<div class="alert alert-success"><strong>Success!</strong> The product has been deleted.</div>');
		redirect('products');
	}
	public function add(){
		$this->load->model('categories', 'category', true);
		$this->load->model('seal_type', 'st', true);
		$this->load->model('packaging', 'packs', true);

		$data = array(
			'title'			=> 'Add Product',
			'content'		=> 'products/add',
			'categories'	=> $this->category->fetch(),
			'seal_type'		=> $this->st->fetch(),
			'packs'			=> $this->packs->fetch()
		);

		$this->load->view('base', $data);
	}
	public function store(){
		print_r($_POST);
	}

}