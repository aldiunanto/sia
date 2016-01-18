<?php

	class Invoice extends CI_Model {

		private $tbl		= 'invoice';
		public 	$primary	= 'invo_id';

		public function create($vals){
			return $this->db->insert($this->tbl, $vals);
		}

	}