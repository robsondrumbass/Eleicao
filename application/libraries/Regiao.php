<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regiao {
	
	private $regiao;		// Nome da regiao
	private $cod_regiao;	// codigo da regiao	()
	private $apurado;		// Votos Apurados? ( 1 | 0 )
	private $respons1;		// Quem Abriu as Urnas
	private $respons2;		// Quem Abriu as Urnas
	private $respons3;		// Quem Abriu as Urnas
	private $abertura;		// Data da abertura
	private $hr_abert;		// Hora da abertura
	private $fechamento;	// Data do fechamento
	private $hr_fecham;		// Hora do fechamento
	
    public function __construct($parametros)
    {
    	$this->regiao = $parametros['regiao'];

		$CI =& get_instance();
		$CI->load->model('Regiao_model','mdregiao');
        
		$dbregiao = $CI->mdregiao->get($this->regiao);
		
		$this->cod_regiao	= $dbregiao['cod_regiao'];
		$this->apurado		= $dbregiao['apurado'];
		$this->respons1 	= $dbregiao['respons1'];
		$this->respons2 	= $dbregiao['respons2'];
		$this->respons3 	= $dbregiao['respons3'];
		$this->abertura 	= $dbregiao['abertura'];
		$this->hr_abert 	= $dbregiao['hr_abert'];
		$this->fechamento 	= $dbregiao['fechamento'];
		$this->hr_fecham 	= $dbregiao['hr_fecham'];
		
//		echo "<pre>";
//		var_dump($dbregiao);
//		echo "</pre>";
				
    }
	public function apurado(){
		return $this->apurado;
	}
}

?>