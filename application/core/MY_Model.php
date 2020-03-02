<?php 

class MY_Model extends CI_Model{
    private $nomeColunaDoBanco;
    private $id_da_tabela;
    private $join = array();
    private $select;
    private $usuario = array();

    public function __construct(){
        parent::__construct();

        $ci = get_instance();
        $this->usuario = $this->session->userdata["usuario_logado"];

        
    }

    public function setBanco($nomeColunaDoBanco,$id_da_tabela,$join = array(),$select= array()){
        $this->nomeColunaDoBanco = $nomeColunaDoBanco;
        $this->id_da_tabela = $id_da_tabela;
        $this->join = $join;
        $this->select = $select;
        


    }

    public function buscarDados($dados = array()){
            if(isset($dados['id'])){
                $this->db->where($this->id_da_tabela,$dados["id"]);
                $this->db->where(substr($this->nomeColunaDoBanco,0,3)."_id_usuario",$this->usuario["usu_id"]);
                return $this->db->get($this->nomeColunaDoBanco)->result_array();
            }else if(empty($this->join)){
                $this->db->where(substr($this->nomeColunaDoBanco,0,3)."_id_usuario",$this->usuario["usu_id"]);
                return $this->db->get($this->nomeColunaDoBanco)->result_array();
            }else{
                
                $this->db->select($this->select);
                $this->db->from($this->nomeColunaDoBanco);
                $this->db->where(substr($this->nomeColunaDoBanco,0,3)."_id_usuario",$this->usuario["usu_id"]);
                foreach($this->join as $value){
                    $this->db->join($value[0],$value[1]);    
                }
                $this->db->where(substr($this->nomeColunaDoBanco,0,3)."_id_usuario",$this->usuario["usu_id"]);
               return $this->db->get()->result_array();
            } 
            $this->db->where(substr($this->nomeColunaDoBanco,0,3)."_id_usuario",$this->usuario["usu_id"]);
         return $this->db->get()->result_array();
    }
    public function AdicionaDados($dados){
        $id_usuario = substr($this->nomeColunaDoBanco,0,3)."_id_usuario";
        $dados[$id_usuario] = $this->usuario["usu_id"];
        return $this->db->insert($this->nomeColunaDoBanco,$dados);
    }

    public function RemoverDados($dados){
        $ids = array();
        foreach ($dados['rows'] as $value) {
            $ids [] = $value[$this->id_da_tabela];
        }
        if($this->db->where_in($this->id_da_tabela,$ids)->delete($this->nomeColunaDoBanco)){
            return true;

        }else{
            return $this->db->error();;
        }
    }

    public function AtualizaDados($dados = array()){
        $this->db->where($this->id_da_tabela,$dados[$this->id_da_tabela]);
        if(isset($dados['usu_senha'])){
           $dados['usu_senha'] = md5($dados['usu_senha']);
        }

        if(isset($dados["usu_nome"])){
        session_destroy();
        session_name($dados['usu_nome']);
        }


        $this->db->set($dados);
            return $this->db->update($this->nomeColunaDoBanco,$dados);
    }

    public function PegaResumos($dados){
        $ResultadoResumo = array();
        
        foreach( $dados as $value){
            $this->db->select($value["select"]);
            $this->db->from($value["tabela"]);
          
            $this->db->where((substr($value['tabela'],0,3).'_id_usuario' == 'pro_id_usuario')?'0 <':substr($value['tabela'],0,3).'_id_usuario',$this->usuario['usu_id']);
            array_push($ResultadoResumo,array(
                "tabela" => $value["tabela"],

                "dados" => $this->db->get()->result_array()
            ));
        }
        return $ResultadoResumo;
    }
}

?>