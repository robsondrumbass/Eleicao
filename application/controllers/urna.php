<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Anotações Importantes
 * 
 * A sequencia de tela para uma votação é baseada na abrangencia e região em votação
 * 
 * Votação para abrangencia 1 = GERAL
 * Votação para abrangencia MAIOR QUE 1 = REGIONAL
 * 
 * */

	class Urna extends CI_Controller{
		
		public function define_terminal($numero_terminal){
			
			/*SESSION*/$this->session->set_userdata("terminal",$numero_terminal);
			/*REDIRECT*/redirect("urna/terminal");
		
		}
		
		public function terminal(){
			
			/*SESSION*/
			$terminal = $this->session->userdata('terminal');
			
			/*CONTENT*/
			$content = array("terminal"=>$terminal);
			
			/*VIEW*/$this->load->template_urna($content);
			
		}
		
		public function encerra_terminal(){
			
			/*SESSION*/
			$this->session->sess_destroy();
			
			echo "Terminal Encerrado";	
				
		}
		
		 /*public function index($parm=NULL){
			
			$parametros = array('regiao'=>99);
			$this->load->library('Regiao',$parametros);
			
			$term = array('terminal'=>$_COOKIE['iap_terminal']);
			var_dump($term);
			$this->terminal_model->inserir($term);
			
			$content = array('terminal'=>$_COOKIE['iap_terminal']);
			$this->load->template_urna($content);
		
		}
		public function terminal($id){
			
			/*
			$this->output->enable_profiler(TRUE);
			
			isset($_COOKIE['iap_terminal'])?setcookie("iap_terminal",$id,time()-1):'';
			setcookie('iap_terminal',$id,time()+64800);
			redirect("urna");
			
			$this->load->view("popup.php");
			
			
			}*/
	}