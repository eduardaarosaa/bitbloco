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
		$data['data'] = $this->Model_principal->ranking();	
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('tela_principal',$data);
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
		$this->form_validation->set_rules('senha', 'o campo senha é obrigatório','required');

		$cont = rand();
		
		if($this->form_validation->run()==true){
			
			$data = array(
				'nome' => $this->input->post('nome'),
				'email' => $this->input->post('email'),
				'senha' => $this->input->post('senha'),
				'carteira'=>$cont
			
			   
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
						
				  $auth = $this->Model_principal->login($dados); 

				
				  
				
					   if($auth){
					$sessao = array(
						'cod'=> $auth->cod,
											'nome'=>$auth->nome,
											'email'=>$auth->email,
											'carteira'=>$auth->carteira,
											'quantidade'=>$auth->quantidade,
											
											 'login' => true
											 
											
					);
					
				
				 $data['data'] = $this->Model_principal->ranking();	
				 $this->session->set_userdata($sessao);
				 $this->load->view('header',$dados);
				 $this->load->view('menu',$data);
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
						$data['data'] = $this->Model_principal->ranking();
						$this->load->view('tela_principal',$data);
					}

					public function site(){
						$this->load->view('site');
					}

					public function resposta(){

						$dados = array (
							'resposta' => $this->input->post('resposta')
						
						);
						//var_dump($dados);
						
						$dados['dados'] = $this->Model_principal->resposta($dados);

					
							

						if ($resposta = false){
							$this->load->view('errou');
						}else{
						$this->load->view('acertou');

					}
	}
	public function transferencia(){
		//$data = 'null';
		$this->form_validation->set_rules('carteira', 'o campo carteira é obrigatório', 'required');
		$this->form_validation->set_rules('quantidade_btc','o campo quantidade é obrigatório', 'required');
		
		if($this->form_validation->run()==true){
			
			$data = array(
				'carteira' => $this->input->post('carteira'),
				'quantidade_btc' => $this->input->post('quantidade_btc'),
			   
			);

			//var_dump($data);

			$this->Model_principal->transferencia($data);
			redirect("Welcome/tela_carteira", 'redirect');
	}
}
}