<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Instalacao extends MY_Controller{
        private $validaCampos = array();

        public function __construct()
        {
            parent::__construct();
            $this->load->model("Instalacao_model");
            $validaCampos = array(
                "ins_id_equipamento","ins_id_rastreado",
                );
            $this->SelecionaModel($this->Instalacao_model,$validaCampos);
        }
        
        public function index(){
            
            $secção = $this->session->userdata["usuario_logado"];
            $id= $secção["usu_id"];

            $data = array(
                'css' => array(
                    base_url("assets/libs/bootstrap-table-develop/src/bootstrap-table.css"),
                    base_url("assets/css/BaseGrid/BaseGrid.css")
                ),

                'js' => array(
                    base_url("assets/libs/bootstrap-table-develop/src/bootstrap-table.js"),
                    base_url("assets/js/generico/inserir_alterar_remover.js"),
                    base_url("assets/libs/bootstrap-table-develop/src/locale/bootstrap-table-pt-BR.js")
                ),

                'nome' => ' Instalacao',

                'adicionar' => "cadastros/instalacao/instalacao/Formulario",

                'editar_url' => base_url("cadastros/instalacao/Instalacao/formulario"),

                'url_get' => base_url("cadastros/instalacao/Instalacao/funcoes"),

                'nameId' => "ins_id",
                
                "url_id" => $id,
                "edita_usuario" =>"",
                'select' => base_url("cadastros/instalacao/Instalacao/selectsParaOption"),


            );
            
            $this->load->template("generics/BaseGrid",$data);
        }

        public function Formulario(){

            $secção = $this->session->userdata["usuario_logado"];
            $id= $secção["usu_id"];

            $data = array(
                'form'=>$this->load->view("cadastro/instalacao/form",array(),true),
    
                'css' => array(
                    base_url("assets/css/BaseForm/BaseForm.css"),
                ),

                
                'js' =>array(
                    base_url("assets/js/generico/adicionar.js")
                ),


                'nome' => 'Instalacao',

                'nameId' => "ins_id",

                'url_get' => base_url("cadastros/instalacao/Instalacao/funcoes"),

                'editar_url' => base_url("cadastros/instalacao/Instalacao/formulario"),      
                
                "url_id" => $id,
                "edita_usuario" =>"",
                'select' => base_url("cadastros/instalacao/Instalacao/selectsParaOption"),


            );
            
            $this->load->template("generics/BaseForm",$data);
        }

        public function selectsParaOption(){
            $data = array(
                array("select" => "equ_numero_chip as descricao, equ_id as id","tabela" => "equipamento"),
                array("select" => "ras_descricao as descricao, ras_id as id", "tabela" => "rastreado"),
            );

            echo json_encode($this->Instalacao_model->PegaResumos($data));
        }
    }

?>