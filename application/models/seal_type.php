<?php

	class Seal_type extends CI_Model{

		protected	$table		= 'seal_type';
		private 	$primary	= 'st_id';

		public function fetch(){
			return $this->db->get($this->tbl);
		}

	}