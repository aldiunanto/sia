<?php

	class Salesorder_model extends CI_Model {

		protected	$tbl		= 'salesorder';
		public 		$primary	= 'so_id';

		public function fetch($where = null){
			$this->db->select('A.*, B.sales_fname, B.sales_lname, C.cust_name')
					 ->join('sales AS B', 'A.sales_id = B.sales_id', 'INNER')
					 ->join('customer AS C', 'A.cust_id = C.cust_id', 'INNER')
					 ->where('A.visibility', 1);

			if(! is_null($where)){ $this->db->where($where); }

			return $this->db->order_by('A.created_at', 'DESC')->get($this->tbl . ' AS A');	
		}
		public function delete($so_id){
			return $this->db->where($this->primary, $so_id)
							->update($this->tbl, array('visibility' => 2));
		}
		public function create($vals){
			return $this->db->insert($this->tbl, $vals);
		}
		public function save($so_id, $args){
			return $this->db->where($this->primary, $so_id)->update($this->tbl, $args);
		}

	}