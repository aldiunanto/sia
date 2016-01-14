<?php

	class Customers_model extends CI_Model {

		protected	$tbl		= 'customers';
		public 		$primary	= 'cust_id';

		public function getData($sales_id){
			return $this->db->select($this->primary . ', cust_name')
							->where('sales_id', $sales_id)
							->order_by('cust_name', 'ASC')
							->get($this->tbl);
		}

	}