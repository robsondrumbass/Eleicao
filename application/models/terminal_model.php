<?php
/*
 * Anotações Importantes
 * 
 * 
 * */

	class Terminal_model extends CI_Model {
		private $tabela = 'terminal';
		function get($terminal){
			$this->db->where("terminal",$terminal);		
			return $this->db->get($this->tabela)->row_array();
		}
		
		function setStatus($terminal,$status){
			$this->db->where("terminal",$terminal);
			$this->db->update('terminal', array('status'=>$status));
			$this->db->where("terminal",$terminal);
			return $this->db->get($this->tabela)->row_array();
		}
		public function inserir($t)
		{
			$this->db->where($this->tabela,$t['terminal']);
			$this->db->insert($this->tabela,$t);
			
		}
		public function existe($terminal){
			$this->db->where('terminal', $terminal);
			$this->db->from($this->tabela);
			return ($this->db->count_all_results()>0)? TRUE:FALSE;
		}
	}	