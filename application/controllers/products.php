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

		$this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> The product has been deleted.</div>');
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
		$vals = array(
			'cat_id'		=> $this->input->post('cat_id'),
			'st_id'			=> $this->input->post('st_id'),
			'pack_id'		=> $this->input->post('pack_id'),
			'prod_name'		=> trim($this->input->post('prod_name')),
			'prod_width'	=> trim($this->input->post('prod_width')),
			'prod_guzzet'	=> trim($this->input->post('prod_guzzet')),
			'prod_length'	=> trim($this->input->post('prod_length')),
			'prod_thickness'=> trim($this->input->post('prod_thickness')),
			'prod_emboss'	=> $this->input->post('prod_emboss'),
			'visibility'	=> 1,
			'created_at'	=> now(true)
		);
		$this->product->create($vals);

		$this->session->set_flashdata('message', '<div class="alert alert-success">A new product successfully added.</div>');
		redirect('products');
	}
	public function edit($prod_id){
		$this->load->model('categories', 'category', true);
		$this->load->model('seal_type', 'st', true);
		$this->load->model('packaging', 'packs', true);

		$data = array(
			'title'			=> 'Add Product',
			'content'		=> 'products/edit',
			'prod'			=> $this->product->fetch(array($this->product->primary => $prod_id))->row(),
			'categories'	=> $this->category->fetch(),
			'seal_type'		=> $this->st->fetch(),
			'packs'			=> $this->packs->fetch()
		);

		$this->load->view('base', $data);
	}
	public function update(){
		$prod_id = $this->input->post('prod_id');
		$vals = array(
			'cat_id'		=> $this->input->post('cat_id'),
			'st_id'			=> $this->input->post('st_id'),
			'pack_id'		=> $this->input->post('pack_id'),
			'prod_name'		=> trim($this->input->post('prod_name')),
			'prod_width'	=> trim($this->input->post('prod_width')),
			'prod_guzzet'	=> trim($this->input->post('prod_guzzet')),
			'prod_length'	=> trim($this->input->post('prod_length')),
			'prod_thickness'=> trim($this->input->post('prod_thickness')),
			'prod_emboss'	=> $this->input->post('prod_emboss')
		);
		$this->product->save($prod_id, $vals);

		$this->session->set_flashdata('message', '<div class="alert alert-info"><strong>Success!</strong> The product has been updated.</div>');
		redirect('products/edit/' . $prod_id);
	}
	public function getData(){
		$this->load->view('products/getData', array('fetch' => $this->product->fetch()));
	}
	public function getInfo(){
		$row = $this->product->fetch(array($this->product->primary => $_POST['prod_id']))->row();
		echo json_encode($row);
	}

}