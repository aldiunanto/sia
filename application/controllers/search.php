<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
	public function index()
	{
		$search['title'] = 'Search';
		$this->load->view('search', $search);
	}
}

/* End of file search.php */
/* Location: ./application/controllers/search.php */