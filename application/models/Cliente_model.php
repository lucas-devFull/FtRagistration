<?php 

    class Cliente_model extends MY_Model{

        public function __construct()
        {
            parent::__construct();
            $this->setBanco("cliente",'cli_id');
        }

        
    }

?>          