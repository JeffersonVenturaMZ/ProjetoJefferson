<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class sobrenos extends CI_Controller {
	
	public function __construct(){
		parent::__construct();			
		if(!$this->session->userdata['logado']){
			redirect(base_url()."administracao/home");
		}
	}
	
	public function index(){
		$this->load->library('table');
		$data['sobrenos'] = $this->db->get('sobrenos')->result();
		$this->load->view('administracao/html_header');
		$this->load->view('administracao/menu');
		$this->load->view('administracao/sobrenos',$data);
		$this->load->view('administracao/html_footer');
	}
	
	public function salvar_alteracao(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titulo', 'Titulo', 'required');
		$this->form_validation->set_rules('texto', 'Texto', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}		
			$dados['titulo'] = $this->input->post('titulo');			
			$dados['texto'] = $this->input->post('texto');
            
			$this->db->where('id',$this->input->post('id'));
			$this->db->update('sobrenos',$dados);
			redirect(base_url()."administracao/sobrenos");
		}
	
	
	
	public function adicionar(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titulo', 'Titulo', 'required');
		$this->form_validation->set_rules('texto', 'Texto', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}

			else{
				$dados['titulo'] = $this->input->post('titulo');
				$dados['texto'] = $this->input->post('texto');
				$this->db->insert('sobrenos',$dados);
				redirect(base_url()."administracao/sobrenos");
			}
		
	}

	public function editar($sobrenos = null){
		
		$this->db->where('id',$sobrenos);
		$data['sobrenos'] = $this->db->get('sobrenos')->result();
		
		$this->load->view('administracao/html_header');
		$this->load->view('administracao/menu');
		$this->load->view('administracao/editar_sobrenos',$data);
		$this->load->view('administracao/html_footer');
	}
	
	public function excluir($id){
		$this->db->where('id',$id);
		$this->db->delete('sobrenos');
		redirect(base_url()."administracao/sobrenos");
	} 
}