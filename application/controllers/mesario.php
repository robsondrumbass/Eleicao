<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Mesario extends CI_Controller{
		public function index(){	
		
			$content = array("urna"=>308);
			//$this->load->template_conteudo('mesario',$content);
			$this->load->view('mesario',$content);
		}
	}