<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class sobrenos extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
    
	    
	public function index(){	
        
        $data['sobrenos'] = $this->db->get('sobrenos')->result();

        //Carregando as views.
		$this->load->view('html_header');
		$this->load->view('cabecalho');
        $this->load->view('sobrenos',$data);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	

}