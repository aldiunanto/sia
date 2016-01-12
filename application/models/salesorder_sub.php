<?php

	class Salesorder_sub extends CI_Model {

		protected	$tbl		= 'salesorder_sub';
		public 		$primary	= 'sos_id';

		public function fetch($where = null){
			$this->db->select('B.*, A.sos_qty')
					 ->join('products AS B', 'A.prod_id = B.prod_id', 'INNER');

			if(! is_null($where)){ $this->db->where($where); }

			return $this->db->order_by('A.' . $this->primary, 'ASC')->get($this->tbl . ' AS A');	
		}

	}