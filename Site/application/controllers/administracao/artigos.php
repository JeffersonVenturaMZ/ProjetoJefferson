<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class artigos extends CI_Controller {
	
	public function __construct(){
		parent::__construct();			
		if(!$this->session->userdata['logado']){
			redirect(base_url()."administracao/home");
		}
	}
	
	public function index(){
		$this->load->library('table');
		$data['artigos'] = $this->db->get('artigos')->result();
		$this->load->view('administracao/html_header');
		$this->load->view('administracao/menu');
		$this->load->view('administracao/artigos',$data);
		$this->load->view('administracao/html_footer');
	}
	
	public function salvar_alteracao(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('slug_artigo', 'Slug', 'required');
		$this->form_validation->set_rules('texto', 'Texto', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$config['upload_path'] = './assets/imgs/artigos';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1024';
			$config['max_width']  = '800';
			$config['max_height']  = '600';
			$config['encrypt_name'] = true;		
			$this->load->library('upload', $config);
			if($this->upload->do_upload())
			{
				$arquivo_upado = $this->upload->data();
				$dados['foto'] = $arquivo_upado['file_name'];
			}	
			
			$dados['nome'] = $this->input->post('nome');
			$dados['slug_artigo'] = $this->input->post('slug_artigo');
			$dados['texto'] = $this->input->post('texto');
			
            echo "<script type='javascript'>alert('Email enviado com Sucesso!');";

            
			$this->db->where('id_artigo',$this->input->post('id_artigo'));
			$this->db->update('artigos',$dados);
			redirect(base_url()."administracao/artigos");
		}
	}
	
	
	public function adicionar(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('slug_artigo', 'Slug', 'required');
		$this->form_validation->set_rules('texto', 'Texto', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$config['upload_path'] = './assets/imgs/artigos';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1920';
			$config['max_width']  = '1366';
			$config['max_height']  = '768';
			$config['encrypt_name'] = true;		
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				echo $this->upload->display_errors();			
				echo "<a href='javascript:history.go(-1)'>Voltar e corrigir.</a>";
			}	
			else{
				$dados['nome'] = $this->input->post('nome');
				$dados['slug_artigo'] = $this->input->post('slug_artigo');
				$dados['texto'] = $this->input->post('texto');
				$arquivo_upado = $this->upload->data();
				$dados['foto'] = $arquivo_upado['file_name'];
				$this->db->insert('artigos',$dados);
				redirect(base_url()."administracao/artigos");
			}
		}
	}

	public function editar($artigo = null){
		
		$this->db->where('id_artigo',$artigo);
		$data['artigo'] = $this->db->get('artigos')->result();
		
		$this->load->view('administracao/html_header');
		$this->load->view('administracao/menu');
		$this->load->view('administracao/editar_artigo',$data);
		$this->load->view('administracao/html_footer');
	}
	
	public function excluir($id){
		$this->db->where('id_artigo',$id);
		$this->db->delete('artigos');
		redirect(base_url()."administracao/artigos");
	} 
}