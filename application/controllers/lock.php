<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lock extends CI_Controller {
	public function index()
	{
		$lock['title'] = 'Lock Screen';
		$this->load->view('lock', $lock);
	}
}

/* End of file lock.php */
/* Location: ./application/controllers/lock.php */