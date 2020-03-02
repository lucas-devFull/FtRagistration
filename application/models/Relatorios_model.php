<?php 

    class Relatorios_model extends MY_Model{
        private $usuario;

        public function __construct()
        {
            parent::__construct();
            $this->usuario = $this->session->userdata('usuario_logado');
        }
        
        public function buscarDados($dados = array())
        {
            $this->db->select('st_x(eve_localizacao) as lat,st_y(eve_localizacao) as lon, eve_ignicao , eve_gps , eve_gprs ,eve_data_gps,eve_velocidade');
            $this->db->from('evento');
            $this->db->where('eve_id_usuario',$this->usuario['usu_id']);
            $this->db->where('eve_data_gps BETWEEN "'.$dados['data_inicio'].'" and "'.$dados['data_fim'].'"');
            return $this->db->get()->result_array();
        }    
        
        public function buscaLocalizacao( $dados= array()){
            $this->db->select('st_x(ult_eve_localizacao) as lat,st_y(ult_eve_localizacao) as lon');
            $this->db->from('ultimo_evento');
            return $this->db->get()->result_array();
        }
    }

?>