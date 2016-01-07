<?php

	class Packaging extends CI_Model{

		protected	$tbl		= 'packaging';
		private 	$primary	= 'pack_id';

		public function fetch(){
			return $this->db->get($this->tbl);
		}

	}