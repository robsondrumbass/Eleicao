<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Terminal {
	
	private $Tterminal;
	private $Tstatus = 0;
	private $Teleitor = 0;
	private $Tcod_mesario = 0;
	private $Tcod_regiao = 0;
	private $cookie;
	private $CI;
	
	public function __construct($param){
		$this->CI =& get_instance();
		//$this->CI->load->helper('cookie');
				
		$this->cookie = 'iap_terminal';

		if(!isset($_COOKIE[$this->cookie])){
			$ip = $this->CI->input->ip_address();
			$id = strpos($ip,'.')?explode('.', $ip):explode('.','0.0.0.'.$this->terminalLivre());
			//$this->Tterminal = $id[3];
			$this->Tterminal = 98;
			$this->criar();
		}else{
			$nobanco=$this->CI->terminal_model->get($_COOKIE[$this->cookie]);
			if(count($nobanco)<=0){
				$this->inserir_no_banco();
			}else{
				$this->Tterminal=$nobanco['terminal'];
				$this->Tstatus=$nobanco['status'];
				$this->Teleitor=$nobanco['eleitor'];
				$this->Tcod_mesario=$nobanco['cod_mesario'];
				$this->Tcod_regiao=$nobanco['cod_regiao'];
			}
		}
	}
	public  function id(){return isset($_COOKIE[$this->cookie])?$_COOKIE[$this->cookie]:$this->Tterminal;}
	public  function remover(){$this->removeCookie();}
	public  function dados($format='array',$exibe=FALSE){
		$data = array(
			'terminal'=>(isset($_COOKIE[$this->cookie]))?$_COOKIE[$this->cookie]:$this->Tterminal,
			'status'=>$this->Tstatus,
			'eleitor'=>$this->Teleitor,
			'cod_mesario'=>$this->Tcod_mesario,
			'cod_regiao'=>$this->Tcod_regiao);
		switch ($format) {
			case 'json':
				echo ($exibe)? json_encode($data):'';
				return json_encode($data);
				break;
			default:
				echo ($exibe)?$data:'';
				return $data;
				break;			
		}
	}
	private function criar(){$this->criarCookie();$this->inserir_no_banco();}
	private function criarCookie(){setcookie($this->cookie,$this->Tterminal,time()+64800);} // 18horas (18*60*60)
	private function inserir_no_banco(){
		if(!$this->CI->terminal_model->existe($this->Tterminal)){
			$this->CI->terminal_model->inserir($this->dados());
		}
	}
	private function removeCookie(){setcookie($this->cookie,$this->Tterminal,time()-1);}
	private function terminalLivre(){return rand(300, 400);}
}