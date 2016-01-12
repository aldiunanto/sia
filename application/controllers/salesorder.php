<?php

	class Salesorder extends CI_Controller {

		public function index(){
			$data = array(
				'title'		=> 'Sales Order',
				'content'	=> 'salesorder/index',
				'js'		=> array('core/jquery.dataTables.min'),
				'css'		=> array('jquery.dataTables')
			);

			$this->load->view('base', $data);
		}

	}