<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Este controller tem o objetivo de tratar e responder todas as requisições efetuadas por ajax
 * Para funcionar, devemos tratar as requisições por POST
 * Junto com o POST devemos sitar um codigo que será uma das variaveis e seu valor, para impedir requisições invalidas ou externas
 * Todas as informações acima podem sofrer mudanças de acordo com o andar do projeto
 * */
 
 
 /*
  * Usando
  *
  * /sync/urna/5	(retorna dados terminal 5) 
  * /sync/urna/5/2	(insere status 2 no terminal 5)
  * */
 
class sync extends CI_Controller{
	public function _remap($func,$parm=NULL){
		//$this->output->enable_profiler(TRUE);
		//if ($this->agent->is_mobile()){
			if($func=='urna'){
				$p1 = isset($parm[0])?$parm[0]:NULL;
				$p2 = isset($parm[1])?$parm[1]:NULL;
				if($p1==NULL && isset($_POST['terminal'])){
					$p1 = $_POST['terminal'];
				}
				if($p2==NULL && isset($_POST['status'])){
					$p2 = $_POST['status'];
				}
				$this->urna($p1,$p2);
			}
		//}
	}
	private function urna($terminal,$set){
		if(isset($terminal)){
			$this->load->model('Terminal_model','term');
			if(isset($set)){
				echo json_encode($this->term->setStatus($terminal,$set));
				//echo json_encode($this->term->get($terminal));
			}else{
				echo json_encode($this->term->get($terminal));
			}
		}else{
		}
	}
}