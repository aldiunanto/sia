<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$login['title'] = 'Login';
		$this->load->view('login', $login);
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */