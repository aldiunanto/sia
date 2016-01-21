<?php

	class Salesorder_model extends CI_Model {

		protected	$tbl		= 'salesorder';
		public 		$primary	= 'so_id';

		public function fetch($where = null){
			$this->db->select('A.*, B.sales_fname, B.sales_lname, C.cust_company, D.invo_id')
					 ->join('sales AS B', 'A.sales_id = B.sales_id', 'INNER')
					 ->join('customers AS C', 'A.cust_id = C.cust_id', 'INNER')
					 ->join('invoice AS D', 'A.so_id = D.so_id', 'LEFT OUTER')
					 ->where('A.visibility', 1);

			if(! is_null($where)){ $this->db->where($where); }

			return $this->db->order_by('A.created_at', 'DESC')->get($this->tbl . ' AS A');	
		}
		public function delete($so_id){
			return $this->db->where($this->primary, $so_id)
							->update($this->tbl, array('visibility' => 2));
		}
		public function create($vals){
			$this->db->insert($this->tbl, $vals);
			return $this->db->insert_id();
		}
		public function save($so_id, $args){
			return $this->db->where($this->primary, $so_id)->update($this->tbl, $args);
		}
		public function getLastNumb($so_type){
			return $this->db->select('so_number')
							->where('so_type', $so_type)
							->order_by('created_at', 'DESC')
							->limit(1)
							->get($this->tbl);
		}

	}