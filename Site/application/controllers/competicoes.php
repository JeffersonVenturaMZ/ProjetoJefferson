<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class competicoes extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){	

        
        
        //Carregando as views.
		$this->load->view('html_header');
		$this->load->view('cabecalho');
        $this->load->view('competicoes');
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	

}