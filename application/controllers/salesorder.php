<?php

	class Salesorder extends CI_Controller {

		public function __construct(){
			parent::__construct();

			$this->load->model('salesorder_model', 'so', true);
			$this->load->model('salesorder_sub', 'sos', true);
		}
		public function index(){
			$data = array(
				'title'		=> 'Sales Order',
				'content'	=> 'salesorder/index',
				'js'		=> array('core/jquery.dataTables.min'),
				'css'		=> array('jquery.dataTables'),
				'fetch'		=> $this->so->fetch()
			);

			$this->load->view('base', $data);
		}
		public function detail($so_id){
			$data = array(
				'head'	=> $this->so->fetch(array($this->so->primary => $so_id))->row(),
				'sub'	=> $this->sos->fetch(array('A.' . $this->so->primary => $so_id))->result()
			);

			$this->load->view('salesorder/detail', $data);
		}
		public function delete($prod_id){
			$this->so->delete($prod_id);

			$this->session->set_flashdata('message', '<div class="alert alert-success"><strong>Success!</strong> The Sales Order has been deleted.</div>');
			redirect('salesorder');
		}
		public function add(){
			$this->load->model('sales_model', 'sales', true);

			$data = array(
				'title'		=> 'Add New SO',
				'content'	=> 'salesorder/add',
				'sales'		=> $this->sales->fetch(),
				'css'		=> array('bootstrap-datepicker', 'jquery.dataTables'),
				'js'		=> array('bootstrap-datepicker', 'core/jquery.dataTables.min')
			);

			$this->load->view('base', $data);
		}
		public function generateSONumb(){
			$get = $this->so->getLastNumb($_POST['so_type']);
			$lr = array(
				'01'=>'I','02'=>'II','03'=>'III',
				'04'=>'IV','05'=>'V','06'=>'VI',
				'07'=>'VII','08'=>'VIII','09'=>'IX',
				'10'=>'X','11'=>'XI','12'=>'XII'
			);

			$pref = '';
			$no = ($_POST['so_type'] == 1 ? 'P.' : 'NP.');

			if($get->num_rows() > 0){
				$row 	= $get->row();
				$path 	= explode('/', $row->so_number);
				$first	= explode('.', $path[0]);
				$sec 	= explode('-', $path[1]);

				if(($sec[1] + 1) == date('Y')) $n = '0001';
            	else $n = $first[1] + 1;

	            if(strlen($n) < 4){
	                for($x = 1; $x <= (4 - strlen($n)); $x++){
	                    $pref .= '0';
	                }
	            }
			}else{
				$n = '0001';
			}

			$no .= $pref . $n . '/' . $lr[date('m')] . '-' . date('Y');
			echo $no;
		}
		public function newtr(){
			$this->load->view('salesorder/newtr');
		}

	}