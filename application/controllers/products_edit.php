<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_edit extends CI_Controller {
	public function index()
	{
		$products_edit['title'] = 'Products Edit';
		$this->load->view('products_edit', $products_edit);
	}
}

/* End of file products_edit.php */
/* Location: ./application/controllers/products_edit.php */