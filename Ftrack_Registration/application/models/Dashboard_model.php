<?php

    class Dashboard_model extends CI_Model{

        private $usuario;

        public function __construct()
        {
             $ci = get_instance();
            $this->usuario = $ci->session->userdata["usuario_logado"];;    
        }


        public function buscaLocalizacao( $dados= array()){

            $this->db->select('st_x(ult_eve_localizacao) as lat,st_y(ult_eve_localizacao) as lon,ras_descricao,ras_tipo as tipo,ult_eve_velocidade as velocidade,ult_eve_data_gps,usu_nome');
            $this->db->from('ultimo_evento');
            $this->db->join("rastreado","ult_eve_id_rastreado = ras_id");
            $this->db->join("usuario","ult_eve_id_usuario = usu_id");
            $this->db->where("ult_eve_id_usuario",$this->usuario["usu_id"]);
            return $this->db->get()->result_array();
        }

        public function getTodos(){
            return array(
                $this->db->where(substr("cliente",0,3)."_id_usuario",$this->usuario["usu_id"]),
                $this->db->get("cliente")->result_array(),

                $this->db->where(substr("equipamento",0,3)."_id_usuario",$this->usuario["usu_id"]),
                $this->db->get("equipamento")->result_array(),

                $this->db->where(substr("instalacao",0,3)."_id_usuario",$this->usuario["usu_id"]),
                $this->db->get("instalacao")->result_array(),

                $this->db->where(substr("rastreado",0,3)."_id_usuario",$this->usuario["usu_id"]),
                $this->db->get("rastreado")->result_array());
        }
    }

?>