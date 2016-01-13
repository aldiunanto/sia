<?php

	class Salesorder_sub extends CI_Model {

		protected	$tbl		= 'salesorder_sub';
		public 		$primary	= 'sos_id';

		public function fetch($where = null){
			$this->db->select('B.*, A.sos_qty, C.cat_name, D.st_name, E.pack_name')
					 ->join('products AS B', 'A.prod_id = B.prod_id', 'INNER')
					 ->join('categories AS C', 'B.cat_id = C.cat_id', 'INNER')
					 ->join('seal_type AS D', 'B.st_id = D.st_id', 'INNER')
					 ->join('packaging AS E', 'B.pack_id = E.pack_id', 'INNER');

			if(! is_null($where)){ $this->db->where($where); }

			return $this->db->order_by('A.' . $this->primary, 'ASC')->get($this->tbl . ' AS A');	
		}

	}