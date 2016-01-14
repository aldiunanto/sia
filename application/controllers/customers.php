<?php

	class Customers extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('customers_model', 'customer', true);
		}
		public function getData(){
			$this->load->view('customers/getData', array('fetch' => $this->customer->getData($_POST['sales_id'])));
		}

	}