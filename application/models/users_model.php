<?php

	class Users_model extends CI_Model{

		protected	$tbl		= 'users';
		public 		$primary	= 'user_id';

		public function fetch($where = null){
			if(! is_null($where)){ $this->db->where($where); }

			return $this->db->order_by($this->primary, 'ASC')->get($this->tbl);
		}
		public function delete($prod_id){
			return $this->db->where($this->primary, $prod_id)
							->update($this->tbl, array('user_status' => 0));
		}
		public function create($vals){
			return $this->db->insert($this->tbl, $vals);
		}
		public function save($prod_id, $args){
			return $this->db->where($this->primary, $prod_id)->update($this->tbl, $args);
		}

	}