<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class artigos extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
    
    public function ver($slug_artigo = null){
        $this->db->where('slug_artigo',$slug_artigo);
		$data['artigos'] = $this->db->get('artigos')->result();
        
        $this->load->view('html_header');
		$this->load->view('cabecalho');
        $this->load->view('ver_artigos', $data);
        $this->load->view('rodape');
		$this->load->view('html_footer');
	}

    
    public function buscar(){
        $busca = $this->input->post('busca');
        $data2['busca'] = $busca;

        $this->db->like('nome',$busca);
        $this->db->or_like('texto',$busca);
        $data2['artigos'] = $this->db->get('artigos')->result();
        
        $this->load->view('html_header');
		$this->load->view('cabecalho');
        $this->load->view('resultado_busca', $data2);
        $this->load->view('rodape');
		$this->load->view('html_footer');        
	}
	    
	public function index(){	
		$this->db->select('a.id_artigo,a.nome,a.slug_artigo,a.texto,a.foto');
		$this->db->from('artigos a');
		$this->db->order_by('a.nome','RANDOM');		
		$data2['artigos'] = $this->db->get()->result();
        
        
        
        //Carregando as views.
		$this->load->view('html_header');
		$this->load->view('cabecalho');
        $this->load->view('artigos', $data2);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	

}