<?php

	class Printing extends CI_Controller {

		public function so($id){
			$this->load->model('salesorder_model', 'so', true);
			$this->load->model('salesorder_sub', 'sos', true);

			$data = array(
				'head'	=> $this->so->fetch(array($this->so->primary => $id))->row(),
				'sub'	=> $this->sos->fetch(array($this->so->primary => $id))->result()
			);
		}

	}