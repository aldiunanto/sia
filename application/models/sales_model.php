<?php

	class Sales_model extends CI_Model{

		protected	$tbl		= 'sales';
		public 		$primary	= 'sales_id';

		public function fetch($where = null){
			$this->db->select('A.*, B.reg_name')
					 ->join('region AS B', 'A.sales_reg = B.reg_id', 'INNER')
					 ->where('A.visibility', 1);
			if(! is_null($where)){ $this->db->where($where); }

			return $this->db->order_by('A.sales_username', 'ASC')->get($this->tbl . ' AS A');
		}
		public function delete($sales_id){
			return $this->db->where($this->primary, $sales_id)
							->update($this->tbl, array('visibility' => 2));
		}
		
		public function create($vals){
			return $this->db->insert($this->tbl, $vals);
		}
		public function save($sales_id, $args){
			return $this->db->where($this->primary, $sales_id)->update($this->tbl, $args);
		}

	}