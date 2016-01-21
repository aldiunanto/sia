<?php

	class Customers_model extends CI_Model {

		protected	$tbl		= 'customers';
		public 		$primary	= 'cust_id';

		public function getData($sales_id){
			return $this->db->select($this->primary . ', cust_company')
							->where('sales_id', $sales_id)
							->order_by('cust_company', 'ASC')
							->get($this->tbl);
		}
		public function fetch($where = null){
			$this->db->select('A.*, B.reg_name')
					 ->join('region AS B', 'A.cust_reg = B.reg_id', 'INNER')
					 ->where('A.visibility', 1);
			if(! is_null($where)){ $this->db->where($where); }

			return $this->db->order_by('A.cust_company', 'ASC')->get($this->tbl . ' AS A');
		}
		public function delete($cust_id){
			return $this->db->where($this->primary, $cust_id)
							->update($this->tbl, array('visibility' => 2));
		}
		
		public function create($vals){
			return $this->db->insert($this->tbl, $vals);
		}
		public function save($cust_id, $args){
			return $this->db->where($this->primary, $cust_id)->update($this->tbl, $args);
		}

	}