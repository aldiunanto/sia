<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$about['title'] = 'About Us'; 
		$this->load->view('about', $about);
	}
}

/* End of file about.php */
/* Location: ./application/controllers/about.php */