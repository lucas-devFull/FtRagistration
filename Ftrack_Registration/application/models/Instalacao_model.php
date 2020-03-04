<?php

class Instalacao_model extends MY_Model{

    public function __construct()
    {
        parent::__construct();
            $join =  array(
                'tabela_rastreadores' => array("equipamento","ins_id_equipamento = equ_id"),
                'tabela_rastreado' => array('rastreado', 'ins_id_rastreado = ras_id'),
            );

        $select = "instalacao.ins_id,equipamento.equ_numero_chip as equ_Numero do chip,rastreado.ras_descricao as ras_Descricao do Rastreado,rastreado.ras_tipo as ras_Tipo do Rastreado";

        $this->setBanco("instalacao","ins_id",$join,$select);
    }
}

?>