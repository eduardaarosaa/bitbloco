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
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('tela_principal');
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

	

}
