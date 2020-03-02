<?php
class usuarios_model extends CI_Model {
	
	public function buscarDados($dados = array()){

		$secção = $this->session->userdata["usuario_logado"];

		if(isset($dados['id'])){
			$this->db->where("usu_id",$dados["id"]);
			$this->db->where(substr("usuario",0,3)."_id",$secção["usu_id"]);
			return $this->db->get("usuario")->result_array();
		}else if(empty($this->join)){
			$this->db->where(substr("usuario",0,3)."_id",$secção["usu_id"]);
			return $this->db->get("usuario")->result_array();
		}else{
			
			$this->db->select($this->select);
			$this->db->from("usuario");
			$this->db->where(substr("usuario",0,3)."_id_usuario",$secção["usu_id"]);
			foreach($this->join as $value){
				$this->db->join($value[0],$value[1]);    
			}
			$this->db->where(substr("usuario",0,3)."_id_usuario",$secção["usu_id"]);
		   return $this->db->get()->result_array();
		} 
			$this->db->where(substr("usuario",0,3)."_id_usuario",$secção["usu_id"]);
		return $this->db->get()->result_array();
		}
		public function AdicionaDados($dados){
		return $this->db->insert("usuario",$dados);
		}
	
		
		public function AtualizaDados($dados = array()){
		$this->db->where("usu_id",$dados["usu_id"]);
		if(isset($dados['usu_senha'])){
		$dados['usu_senha'] = md5($dados['usu_senha']);
		}
		
		if(isset($dados["usu_nome"])){
		session_destroy();
		session_name($dados['usu_nome']);
		}
		
		
		$this->db->set($dados);
			return $this->db->update("usuario",$dados);
		}
		
    	public function salva($usuario) {
        $this->db->insert("usuario", $usuario);
    	}

    public function buscaPorEmailESenha($email,$senha) {
		$senhaMd5 = md5($senha);
	    $this->db->where("usu_email", $email);
	    $this->db->where("usu_senha", $senhaMd5);
	    $usuario = $this->db->get("usuario")->row_array();
	    
	    return $usuario;
	}
}

