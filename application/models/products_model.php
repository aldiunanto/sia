<?php

	class Products_model extends CI_Model{

		protected	$tbl		= 'products';
		private 	$primary	= 'prod_id';

		public function fetch(){
			return $this->db->select('A.*, B.cat_name, C.st_name, D.pack_name')
					 ->join('categories AS B', 'A.cat_id = B.cat_id', 'INNER')
					 ->join('seal_type AS C', 'A.st_id = C.st_id', 'INNER')
					 ->join('packaging AS D', 'A.pack_id = D.pack_id', 'INNER')
					 ->where('A.visibility', 1)
					 ->order_by('A.prod_name', 'ASC')
					 ->get($this->tbl . ' AS A');
		}

	}