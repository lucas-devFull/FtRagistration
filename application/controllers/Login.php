<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("usuarios_model");
    
	}

	public function index()
	{
		$this->load->view("login.php");
	}
	public function autenticar(){
			$email = $this->input->post("email");
			$senha = $this->input->post("senha");
			$usuario = $this->usuarios_model->buscaPorEmailESenha($email, $senha);
			
			if($usuario) {
				$this->session->set_userdata("usuario_logado",$usuario);
				echo json_encode(array("status" => true));
			} else {
				$this->session->set_flashdata("danger" ,"Usuário ou senha inválida");
				echo json_encode(array("status" => false));

			}
	}

	public function logout(){
		$this->session->unset_userdata("usuario_logado");
		redirect("/");
	}
}
