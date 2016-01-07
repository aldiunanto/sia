<?php

	class Categories extends CI_Model{

		protected 	$tbl		= 'categories';
		private 	$primary	= 'cat_id';

		public function fetch(){
			return $this->db->get($this->tbl);
		}

	}