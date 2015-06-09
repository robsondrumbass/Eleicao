<?php

	class Regiao_model extends CI_Model {
		
		function get($regiao){
			$this->db->where("cod_regiao",$regiao);		
			return $this->db->get("regiao")->row_array();
		}
	}	