<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders_view extends CI_Controller {
	public function index()
	{
		$orders_view['title'] = 'Orders View';
		$this->load->view('orders_view', $orders_view);
	}
}

/* End of file orders_view.php */
/* Location: ./application/controllers/orders_view.php */