<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class contato extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
    
	public function adicionar(){
		$this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('message', 'message', 'required');
        if($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            $data['nome'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['mensagem'] = $this->input->post('message');
            $this->db->insert('contato',$data);
            redirect(base_url()."contato");
        }
	}    
	
	public function index(){					
		
		$this->load->view('html_header');
		$this->load->view('cabecalho');
        $this->load->view('contato');
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}	
}