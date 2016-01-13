<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('sales_model', 'sales', true);
	}
	public function index(){
		$data = array(
			'title'		=> 'Sales',
			'content'	=> 'sales/index',
			'js'		=> array('core/jquery.dataTables.min',
								'jquery-validation/dist/jquery.validate.min',
								'jquery-validation/dist/additional-methods.min',
								'bootstrap-wizard/jquery.bootstrap.wizard.min',
								'select2/select2.min',
								'custom/form-wizard'
								),
			'css'		=> array('jquery.dataTables',
								'select2/select2-metronic',
								'select2/select2'
								),
			'fetch'		=> $this->sales->fetch()
		);
		$this->load->view('base', $data);
	}
	
	public function delete($sales_id){
		$this->sales->delete($sales_id);

		$this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> A sales account has been deleted.</div>');
		redirect('sales');
	}
	
	public function add(){
		$this->load->model('region', 'reg', true);
		
		$data = array(
			'title'			=> 'Add Sales',
			'content'		=> 'sales/add',
			'js'		=> array('jquery-validation/dist/jquery.validate.min',
								'jquery-validation/dist/additional-methods.min',
								'bootstrap-wizard/jquery.bootstrap.wizard.min',
								'select2/select2.min',
								'custom/form-wizard'
								),
			'css'		=> array('select2/select2-metronic',
								'select2/select2'
								),
			'region'		=> $this->reg->fetch(),
		);

		$this->load->view('base', $data);
	}
	public function store(){
		$vals = array(
			'sales_username'	=> trim($this->input->post('sales_username')),
			'sales_pwd'			=> md5($this->input->post('sales_pwd')),
			'sales_email'		=> $this->input->post('sales_email'),
			'sales_fname'		=> trim($this->input->post('sales_fname')),
			'sales_lname'		=> trim($this->input->post('sales_lname')),
			'sales_phone'		=> trim($this->input->post('sales_phone')),
			'sales_gender'		=> $this->input->post('sales_gender'),
			'sales_address'		=> trim($this->input->post('sales_address')),
			'sales_city'		=> trim($this->input->post('sales_city')),
			'sales_reg'			=> $this->input->post('sales_reg'),
			'sales_about'		=> trim($this->input->post('sales_about')),
			'visibility'		=> 1,
			'created_at'		=> now(true)
		);
		$this->sales->create($vals);

		$this->session->set_flashdata('message', '<div class="alert alert-success">A new sales successfully added.</div>');
		redirect('sales');
	}
	public function edit($sales_id){
		$this->load->model('region', 'reg', true);
		
		$data = array(
			'title'			=> 'Edit Sales',
			'content'		=> 'sales/edit',
			'js'		=> array('jquery-validation/dist/jquery.validate.min',
								'jquery-validation/dist/additional-methods.min',
								'bootstrap-wizard/jquery.bootstrap.wizard.min',
								'select2/select2.min',
								'custom/form-wizard'
								),
			'css'		=> array('select2/select2-metronic',
								'select2/select2'
								),
			'sales'			=> $this->sales->fetch(array($this->sales->primary => $sales_id))->row(),
			'region'		=> $this->reg->fetch(),
		);

		$this->load->view('base', $data);
	}
	public function update(){
		$sales_id = $this->input->post('sales_id');
		$sales_pwd = $this->sales->fetch(array($this->sales->primary => $sales_id))->row();
		$pwd = $sales_pwd->sales_pwd;
		if($this->input->post('edit_sales_pwd')){
			if(md5($this->input->post('edit_sales_pwd')) == $pwd){
				if(md5($this->input->post('edit_sales_npwd')) == md5($this->input->post('edit_sales_ncpwd'))){
					$pwd = md5($this->input->post('edit_sales_npwd'));
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Cannot Update!</strong> new password did not match with confirm password</div>');
					redirect('sales/edit/' . $sales_id);
				}
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"><strong>Cannot Update!</strong> invalid password</div>');
				redirect('sales/edit/' . $sales_id);
			}
		}
		$vals = array(
			'sales_username'	=> trim($this->input->post('sales_username')),
			'sales_pwd'			=> $pwd,
			'sales_email'		=> $this->input->post('sales_email'),
			'sales_fname'		=> trim($this->input->post('sales_fname')),
			'sales_lname'		=> trim($this->input->post('sales_lname')),
			'sales_phone'		=> trim($this->input->post('sales_phone')),
			'sales_gender'		=> $this->input->post('sales_gender'),
			'sales_address'		=> trim($this->input->post('sales_address')),
			'sales_city'		=> trim($this->input->post('sales_city')),
			'sales_reg'			=> $this->input->post('sales_reg'),
			'sales_about'		=> trim($this->input->post('sales_about')),
		);
		$this->sales->save($sales_id, $vals);

		$this->session->set_flashdata('message', '<div class="alert alert-info"><strong>Success!</strong> Sales account has been updated.</div>');
		redirect('sales/edit/' . $sales_id);
	}

}