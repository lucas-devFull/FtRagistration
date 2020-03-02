<?php

    class Veiculos_model extends MY_Model{
        public function __construct()
        {
            parent::__construct();
            $join =  array(
                'tabela_usuario' => array("usuario","ras_id_usuario = usu_id"),                
            );
    
            $select = "ras_id,ras_descricao,ras_identificacao,ras_tipo";

        $this->setBanco("rastreado","ras_id",$join,$select);
        }
    }

?>