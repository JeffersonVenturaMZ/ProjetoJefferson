<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class usuario extends CI_Controller {
	
	public function __construct(){
		parent::__construct();			
		if(!$this->session->userdata['logado']){
			redirect(base_url()."administracao/home");
		}
	}
	
	public function index(){
		$this->load->library('table');
		$data['categorias'] = $this->db->get('usuarios')->result();
		$this->load->view('administracao/html_header');
		$this->load->view('administracao/menu');
		$this->load->view('administracao/usuario',$data);
		$this->load->view('administracao/html_footer');
	}
	
	public function adicionar(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('usuario', 'usuario', 'required');
		$this->form_validation->set_rules('senha', 'senha', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$data['usuario'] = $this->input->post('usuario');
			$data['senha'] = $this->input->post('senha');
			$this->db->insert('usuarios',$data);
			redirect(base_url()."administracao/usuario");
		}
	}
	
	public function editar($id){
		$this->db->where('id_usuario',$id);
		$data['usuarios'] = $this->db->get('usuarios')->result();
		$this->load->view('administracao/html_header');
		$this->load->view('administracao/menu');
		$this->load->view('administracao/editar_usuario',$data);
		$this->load->view('administracao/html_footer');
	}
	
	public function salvar_alteracao(){		
		$id = $this->input->post('id_usuario');				
		$this->load->library('form_validation');
		$this->form_validation->set_rules('usuario', 'usuario', 'required');
		$this->form_validation->set_rules('senha', 'senha', 'required');
		if($this->form_validation->run() == FALSE)
		{			
			$this->editar($id);
		}
		else
		{
			$data['usuario'] = $this->input->post('usuario');
			$data['senha'] = $this->input->post('senha');
			$this->db->where('id_usuario',$id);
			$this->db->update('usuarios',$data);
			redirect(base_url()."administracao/usuario");
		}
	}
	
	function excluir($id){
		$this->db->where('id_usuario',$id);
		$this->db->delete('usuarios');
		redirect(base_url()."administracao/usuario");
	}
}