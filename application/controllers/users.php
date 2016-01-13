<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->data_session = $this->session->all_userdata();
		
		$this->load->model('users_model', 'users', true);
		$this->load->library(array('access','form_validation'));
	}
	function login(){
		if (!empty($this->data_session['userdata'])){
            redirect('home');
        }
        $this->form_validation->set_rules('user_uniq_name', 'Username', 'trim|required');
        $this->form_validation->set_rules('user_password', 'Password', 'trim|required');
//        $this->form_validation->set_rules('token', 'token', 'callback_check_login');
            
        if ($this->form_validation->run() == FALSE) {
            if ($this->session->flashdata('page')){
                $this->session->set_flashdata('page',$this->session->flashdata('page'));
            }
            $data = array(
                'title' => 'Login',
                'content' => 'users/login',
            );
            $this->load->view('blank',$data);
        } else {
            if ($this->session->flashdata('page')){
                $page = $this->session->flashdata('page');
            } else {
                $page = 'home';
            }
            $username   = mysql_real_escape_string($this->input->post('user_uniq_name', TRUE));
            $password   = mysql_real_escape_string(md5($this->input->post('user_password', TRUE)));
            $remember_me   = $this->input->post('remember_me');
            
            if($this->access->login($username, $password, $remember_me)) {
                redirect($page);
            } else {
                if ($this->session->flashdata('page')){
                    $this->session->set_flashdata('page',$page);
                }
                redirect('users/login');
            }
        }
	}
	function logout(){
		$this->access->logout();
        redirect('users/login');
	}
	public function index(){
		$data = array(
			'title'		=> 'Users',
			'content'	=> 'users/index',
			'js'		=> array('core/jquery.dataTables.min'),
			'css'		=> array('jquery.dataTables'),
			'fetch'		=> $this->users->fetch('user_status != 0')
		);

		$this->load->view('base', $data);
	}
	public function delete($user_id){
		$this->users->delete($user_id);

		$this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> The user has been deleted.</div>');
		redirect('users');
	}
	public function add(){
		$data = array(
			'title'			=> 'Add Users',
			'content'		=> 'users/add',
		);

		$this->load->view('base', $data);
	}
	function cek_username(){
        if($_POST['user_uniq_name']){
            $data_user = $this->users->fetch('user_uniq_name = "'.$_POST['user_uniq_name'].'"')->row();
            if(!empty($data_user)){
                $data['status'] = false ; $data['message'] = 'Tidak tersedia';
            } else {
                $data['status'] = true ; $data['message'] = 'Tersedia';
            }
        } else {
            $data['status'] = false ;
            $data['message'] = 'Sorry, user_uniq_name parameter not found!';
        }
        header('Content-Type: application/json');
        echo json_encode($data);
    }
	public function store(){
		$vals = array(
			'user_fullname'		=> $this->input->post('user_fullname'),
			'user_email'	=> $this->input->post('user_email'),
			'user_status'	=> $this->input->post('user_status'),
			'user_uniq_name'=> $this->input->post('user_uniq_name'),
			'user_password'	=> md5($this->input->post('user_password')),
			'created_at'	=> now(true)
		);
		$this->users->create($vals);

		$this->session->set_flashdata('message', '<div class="alert alert-success">A new user successfully added.</div>');
		redirect('users');
	}
	public function edit($user_id){
		$data = array(
			'title'			=> 'Add Users',
			'content'		=> 'users/edit',
			'user'			=> $this->users->fetch(array('user_id' => $user_id))->row(),
		);

		$this->load->view('base', $data);
	}
	public function update(){
		$user_id = $this->input->post('user_id');
		$vals = array(
			'user_fullname'		=> $this->input->post('user_fullname'),
			'user_email'	=> $this->input->post('user_email'),
			'user_status'	=> $this->input->post('user_status'),
		);
		if(!empty($_POST['user_password'])){
			$vals += array('user_password'	=> md5($this->input->post('user_password')));
		}
		$this->users->save($user_id, $vals);

		$this->session->set_flashdata('message', '<div class="alert alert-info"><strong>Success!</strong> The user has been updated.</div>');
		redirect('users/edit/' . $user_id);
	}

}