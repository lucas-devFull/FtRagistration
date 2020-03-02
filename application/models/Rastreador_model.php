<?php 

class Rastreador_model extends MY_Model{
   
    public function __construct()
    {
        parent::__construct();
        $join =  array(
            'tabela_produto' => array("produto","equ_id_produto = pro_id"),
            
        );

        $select = "equipamento.equ_id,equipamento.equ_numero_serie as equ_Numero de Serie,equipamento.equ_numero_chip as equ_Numero do chip,produto.pro_descricao as pro_Descricao do Produto";

        $this->setBanco("equipamento","equ_id",$join,$select);
    }
}


?>