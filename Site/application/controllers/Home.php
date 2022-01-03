<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){					
		
		$this->db->order_by('id_artigo','random');
		$data2['chamadas'] = $this->db->get('artigos',3)->result();
		
		$this->load->view('html_header');
		$this->load->view('cabecalho');
        $this->load->view('home_message', $data2);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}	
}