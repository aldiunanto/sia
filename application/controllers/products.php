<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	public function index()
	{
		$products['title'] = 'Products';
		$this->load->view('products', $products);
	}
}

/* End of file products.php */
/* Location: ./application/controllers/products.php */