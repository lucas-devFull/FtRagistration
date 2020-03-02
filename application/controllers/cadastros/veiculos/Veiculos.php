<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Veiculos extends MY_Controller{
        private $validaCampos = array();
        public function __construct()
        {
            parent::__construct();
            $this->load->model("Veiculos_model");
            $validaCampos = array(
                "ras_descricao","ras_identificacao","ras_tipo",
                );
            $this->SelecionaModel($this->Veiculos_model,$validaCampos);
        }
        public function index(){

            $secção = $this->session->userdata["usuario_logado"];
            $id= $secção["usu_id"];

            $data = array(
                'css' => array(
                    base_url("assets/libs/bootstrap-table-develop/src/bootstrap-table.css"),
                    base_url("assets/css/BaseGrid/BaseGrid.css"),
                ),

                'js' => array(
                    base_url("assets/libs/bootstrap-table-develop/src/bootstrap-table.js"),
                    base_url("assets/libs/bootstrap-table-develop/src/locale/bootstrap-table-pt-BR.js"),
                    base_url("assets/js/generico/inserir_alterar_remover.js")

                ),

                'nome' => ' Veiculos',

                'url_get' => base_url("cadastros/veiculos/Veiculos/funcoes"),

                'adicionar' => "cadastros/veiculos/veiculos/Formulario",

                'editar_url' => base_url("cadastros/veiculos/Veiculos/formulario"),

                'nameId' => "ras_id",

                "url_id" => $id,
                
                "edita_usuario" =>"",

                'select' => base_url("cadastros/veiculos/Veiculos/selectsParaOption"),

            );
            
            $this->load->template("generics/BaseGrid",$data);
        }

        public function Formulario(){
            $secção = $this->session->userdata["usuario_logado"];
            $id= $secção["usu_id"];
            
            $data = array(
                'css' => array(
                    base_url("assets/libs/bootstrap-table-develop/src/bootstrap-table.css"),
                    base_url("assets/css/BaseGrid/BaseGrid.css"),
                    base_url("assets/css/BaseForm/BaseForm.css")
                ),

                'js' =>array(
                    base_url("assets/js/generico/adicionar.js")
                ),

                'form'=>$this->load->view("cadastro/veiculo/form",array(),true),
                'nome' => 'Veiculos',
                'url_get' => base_url("cadastros/veiculos/Veiculos/funcoes"),
                'editar_url' => base_url("cadastros/veiculos/Veiculos/formulario"),
                'nameId' => "ras_id",
                "url_id" => $id,
                "edita_usuario" =>"",
                'select' => base_url("cadastros/veiculos/Veiculos/selectsParaOption"),

            );
            
            $this->load->template("generics/BaseForm",$data);
        }

        public function selectsParaOption(){

            echo json_encode($this->Veiculos_model->PegaResumos($data));
        }
    }

?>