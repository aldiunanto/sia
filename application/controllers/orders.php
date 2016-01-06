<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {
	public function index()
	{
		$orders['title'] = 'Orders';
		$this->load->view('orders', $orders);
	}
}

/* End of file orders.php */
/* Location: ./application/controllers/orders.php */