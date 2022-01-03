<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class mensagens extends CI_Controller {
	
	public function __construct(){
		parent::__construct();			
		}
        
    public function index(){
		$this->load->library('table');
		$data['contato'] = $this->db->get('contato')->result();
		$this->load->view('administracao/html_header');
		$this->load->view('administracao/menu');
		$this->load->view('administracao/mensagens',$data);
		$this->load->view('administracao/html_footer');
	   }
        
	public function excluir($id){
		$this->db->where('id',$id);
		$this->db->delete('contato');
		redirect(base_url()."administracao/mensagens");
	}     
}