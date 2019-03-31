<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
        parent::__construct();
        
        $this->load->model('Model_principal');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->load->library('session');
		
	}
	// telas iniciais
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function tela_login()
	{
		$this->load->view('tela_login');
	}
	
	public function tela_cadastro(){
		$this->load->view('tela_cadastro');
	}
	public function tela_senha()
	{
		$this->load->view('tela_senha');
	}


	//tela principal
	public function tela_principal()

	{
		$dados['dados'] = $this->Model_principal->questoes();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('tela_principal',$dados);
		$this->load->view('rodape');
	}

	//Demais telas do projeto
	public function tela_perfil()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('tela_perfil');
		$this->load->view('rodape');
	}
	public function tela_carteira()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('tela_carteira');
		$this->load->view('rodape');
	}
	public function tela_transferencia(){
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('tela_transferencia');
		$this->load->view('rodape');
	}	
	public function tela_blockchain()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('tela_blockchain');
		$this->load->view('rodape');
	}
	public function tela_simulacao()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('tela_simulacao');
		$this->load->view('rodape');
	}

	public function tela_jogando(){

		$dados['dados'] = $this->Model_principal->questoes();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('tela_jogando',$dados);
		$this->load->view('rodape');
	}

	public function adduser(){
		$data = 'null';
		$this->form_validation->set_rules('nome', 'o campo nome é obrigatório', 'required');
		$this->form_validation->set_rules('email', 'o campo email é obrigatório','required');
		$this->form_validation->set_rules('telefone', 'o campo telefone é obrigatório','required');
		$this->form_validation->set_rules('senha', 'o campo senha é obrigatório','required');
		
		if($this->form_validation->run()==true){
			
			$data = array(
				'nome' => $this->input->post('nome'),
				'email' => $this->input->post('email'),
				'telefone' => $this->input->post('telefone'),
				'senha' => $this->input->post('senha')
			   
			);
			
			var_dump($data);
			
		  $this->Model_principal->adduser($data);
		  
		 redirect("Welcome/tela_login", 'redirect');
		}
	}
	
	public function login(){

		$this->form_validation->set_rules('email','E-mail','required');
		$this->form_validation->set_rules('senha','Senha','required');
			
			
			$dados = array (
				'email' => $this->input->post('email'),
				'senha' => $this->input->post('senha')
			);
					
					if($this->form_validation->run()){
						
						//var_dump($dados);
						
				  $auth = $this->Model_painel->login($dados); 
				  
				
					   if($auth){
					$sessao = array(
						'id'=> $auth->id,
											'nome'=>$auth->nome,
											'email'=>$auth->email,
											 'login' => true
											 
											
					);
					
				
				
				 $this->session->set_userdata($sessao);
				 $this->load->view('header');
				 $this->load->view('tela_principal',$sessao);
				
				} else {
								
				   $this->load->view('tela_login');	
			}
			
					}
		   
					}

					public function logout() {
						$this->session->sess_destroy();
						$this->login();
						$this->load->view('tela_login');
					}

					public function questoes(){
						$dados['dados'] = $this->Model_principal->questoes();
						$this->load->view('tela_jogando',$dados);
					}

					public function ranking(){
						$dados['dados'] = $this->Model_principal->ranking();
						$this->load->view('tela_principal',$dados);
					}

					public function site(){
						$this->load->view('site');
					}
	}
