<?php

	class Salesorder extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('salesorder_model', 'so', true);
		}
		public function index(){
			$data = array(
				'title'		=> 'Sales Order',
				'content'	=> 'salesorder/index',
				'js'		=> array('core/jquery.dataTables.min'),
				'css'		=> array('jquery.dataTables'),
				'fetch'		=> $this->so->fetch()
			);

			$this->load->view('base', $data);
		}

	}