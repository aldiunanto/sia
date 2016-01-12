<?php

	class Salesorder_model extends CI_Model {

		protected	$tbl		= 'salesorder';
		public 		$primary	= 'so_id';

		public function fetch(){
			return $this->db->select('A.*, B.sales_name, C.cust_name')
					 ->join('sales AS B', 'A.sales_id = B.sales_id', 'INNER')
					 ->join('customer AS C', 'A.cust_id = C.cust_id', 'INNER')
					 ->where('A.visibility', 1)
					 ->order_by('A.created_at', 'DESC')
					 ->get($this->tbl . ' AS A');	
		}

	}