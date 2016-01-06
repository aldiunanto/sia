<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$contact['title'] = 'Contact';
		$this->load->view('contact', $contact);
	}
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */