<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoice extends CI_Controller {
	public function index()
	{
		$invoice['title'] = 'Invoice';
		$this->load->view('invoice', $invoice);
	}
}

/* End of file invoice.php */
/* Location: ./application/controllers/invoice.php */