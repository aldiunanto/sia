<?php

	class Products_model extends CI_Model{

		protected	$tbl		= 'products';
		public 		$primary	= 'prod_id';

		public function fetch($where = null){
			$this->db->select('A.*, B.cat_name, C.st_name, D.pack_name')
					 ->join('categories AS B', 'A.cat_id = B.cat_id', 'INNER')
					 ->join('seal_type AS C', 'A.st_id = C.st_id', 'INNER')
					 ->join('packaging AS D', 'A.pack_id = D.pack_id', 'INNER')
					 ->where('A.visibility', 1);

			if(! is_null($where)){ $this->db->where($where); }

			return $this->db->order_by('A.prod_name', 'ASC')->get($this->tbl . ' AS A');
		}
		public function delete($prod_id){
			return $this->db->where($this->primary, $prod_id)
							->update($this->tbl, array('visibility' => 2));
		}
		public function create($vals){
			return $this->db->insert($this->tbl, $vals);
		}
		public function save($prod_id, $args){
			return $this->db->where($this->primary, $prod_id)->update($this->tbl, $args);
		}

	}