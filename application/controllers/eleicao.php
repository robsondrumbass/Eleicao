<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Eleicao extends CI_Controller{
		public function index(){	
			
			if ($this->agent->is_mobile())
			{redirect("urna");}
			else
			{redirect("mesario");}
			
			//redirect("urna");
			
		}
	}