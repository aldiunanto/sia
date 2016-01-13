<?php

	class Region extends CI_Model{

		protected 	$tbl		= 'region';
		private 	$primary	= 'reg_id';

		public function fetch(){
			return $this->db->get($this->tbl);
		}

	}