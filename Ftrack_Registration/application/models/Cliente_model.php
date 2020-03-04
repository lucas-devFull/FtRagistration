<?php 

    class Cliente_model extends MY_Model{

        public function __construct()
        {
            parent::__construct();
            $join =  array(
                'tabela_usuario' => array("usuario","cli_id_usuario = usu_id"),
                
            );

            $select = "cliente.cli_id, cliente.cli_endereco, cliente.cli_nome_fantasia, cliente.cli_razao_social, cliente.cli_telefone, cliente.cli_email, usuario.usu_nome";
            $this->setBanco("cliente",'cli_id',$join,$select);
        }

        
    }

?>          