<?php

	class Customers extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('customers_model', 'customers', true);
		}
		public function getData(){
			$this->load->view('customers/getData', array('fetch' => $this->customers->getData($_POST['sales_id'])));
		}
		public function index(){
			$data = array(
				'title'		=> 'Customers',
				'content'	=> 'customers/index',
				'js'		=> array('core/jquery.dataTables.min',
									'jquery-validation/dist/jquery.validate.min',
									'jquery-validation/dist/additional-methods.min',
									'bootstrap-wizard/jquery.bootstrap.wizard.min',
									'select2/select2.min',
									'customers-form'
									),
				'css'		=> array('jquery.dataTables',
									'select2/select2-metronic',
									'select2/select2'
									),
				'fetch'		=> $this->customers->fetch()
			);
			$this->load->view('base', $data);
		}
		
		public function delete($cust_id){
			$this->customers->delete($cust_id);

			$this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> A customer data has been deleted.</div>');
			redirect('customers');
		}
		
		public function add(){
			$this->load->model('region', 'reg', true);
			
			$data = array(
				'title'			=> 'Add Customers',
				'content'		=> 'customers/add',
				'js'		=> array('jquery-validation/dist/jquery.validate.min',
									'jquery-validation/dist/additional-methods.min',
									'bootstrap-wizard/jquery.bootstrap.wizard.min',
									'select2/select2.min',
									'bootstrap-timepicker/js/bootstrap-timepicker.min',
									'custom/components-pickers',
									'customers-form'
									),
				'css'		=> array('select2/select2-metronic',
									'select2/select2',
									'bootstrap-timepicker/css/bootstrap-timepicker.min'
									),
				'region'		=> $this->reg->fetch(),
			);

			$this->load->view('base', $data);
		}
		public function store(){
			$vals = array(
				'cust_company' 			=> trim($this->input->post('cust_company')),
				'cust_business' 		=> $this->input->post('cust_business'),
				'cust_product' 			=> trim($this->input->post('cust_product')),
				'cust_pers' 			=> trim($this->input->post('cust_pers')),
				'cust_persposition' 	=> trim($this->input->post('cust_persposition')),
				'cust_email' 			=> $this->input->post('cust_email'),
				'cust_phone1'		 	=> $this->input->post('cust_phone1'),
				'cust_phone2' 			=> $this->input->post('cust_phone2'),
				'cust_fax1' 			=> $this->input->post('cust_fax1'),
				'cust_fax2' 			=> $this->input->post('cust_fax2'),
				'cust_open' 			=> $this->input->post('cust_open'),
				'cust_close' 			=> $this->input->post('cust_close'),
				'cust_address' 			=> trim($this->input->post('cust_address')),
				'cust_zipcode' 			=> $this->input->post('cust_zipcode'),
				'cust_city' 			=> trim($this->input->post('cust_city')),
				'cust_reg' 				=> $this->input->post('cust_reg'),
				'cust_npwp' 			=> $this->input->post('cust_npwp'),
				'cust_remarks' 			=> $this->input->post('cust_remarks'),
				'visibility'		=> 1,
				'created_at'		=> now(true)
			);
			$this->customers->create($vals);

			$this->session->set_flashdata('message', '<div class="alert alert-success">A new customer successfully added.</div>');
			redirect('customers');
		}
		public function edit($cust_id){
			$this->load->model('region', 'reg', true);
			
			$data = array(
				'title'			=> 'Edit Customer',
				'content'		=> 'customers/edit',
				'js'		=> array('jquery-validation/dist/jquery.validate.min',
									'jquery-validation/dist/additional-methods.min',
									'bootstrap-wizard/jquery.bootstrap.wizard.min',
									'select2/select2.min',
									'bootstrap-timepicker/js/bootstrap-timepicker.min',
									'custom/components-pickers',
									'customers-form'
									),
				'css'		=> array('select2/select2-metronic',
									'select2/select2',
									'bootstrap-timepicker/css/bootstrap-timepicker.min'
									),
				'customers'			=> $this->customers->fetch(array($this->customers->primary => $cust_id))->row(),
				'region'		=> $this->reg->fetch(),
			);
			$this->load->view('base', $data);
		}
		public function update(){
			$cust_id = $this->input->post('cust_id');
			
			$vals = array(
				'cust_company' 			=> trim($this->input->post('cust_company')),
				'cust_business' 		=> $this->input->post('cust_business'),
				'cust_product' 			=> trim($this->input->post('cust_product')),
				'cust_pers' 			=> trim($this->input->post('cust_pers')),
				'cust_persposition' 	=> trim($this->input->post('cust_persposition')),
				'cust_email' 			=> $this->input->post('cust_email'),
				'cust_phone1'		 	=> $this->input->post('cust_phone1'),
				'cust_phone2' 			=> $this->input->post('cust_phone2'),
				'cust_fax1' 			=> $this->input->post('cust_fax1'),
				'cust_fax2' 			=> $this->input->post('cust_fax2'),
				'cust_open' 			=> $this->input->post('cust_open'),
				'cust_close' 			=> $this->input->post('cust_close'),
				'cust_address' 			=> trim($this->input->post('cust_address')),
				'cust_zipcode' 			=> $this->input->post('cust_zipcode'),
				'cust_city' 			=> trim($this->input->post('cust_city')),
				'cust_reg' 				=> $this->input->post('cust_reg'),
				'cust_npwp' 			=> $this->input->post('cust_npwp'),
				'cust_remarks' 			=> $this->input->post('cust_remarks'),
			);
			$this->customers->save($cust_id, $vals);

			$this->session->set_flashdata('message', '<div class="alert alert-info"><strong>Success!</strong> A customer data has been updated.</div>');
			redirect('customers/edit/' . $cust_id);
		}

	}