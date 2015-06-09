<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
   
    public function template_urna($content) {
    	$this->view("urna/header.php",$content);
    	$this->view("urna/urna.php",$content);
    	$this->view("urna/footer.php",$content);
    }

}