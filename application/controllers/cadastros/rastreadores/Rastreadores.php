<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Rastreadores extends MY_Controller{
        private $validaCampos = array();

        public function __construct()
        {
            parent::__construct();
            $this->load->model("Rastreador_model");
            $validaCampos = array(
                "equ_numero_serie","equ_id_produto","equ_numero_chip",
                );
            $this->SelecionaModel($this->Rastreador_model,$validaCampos);
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
                    base_url("assets/libs/bootstrap-table-develop/src/locale/bootstrap-table-pt-BR.js"),
                    base_url("assets/js/generico/inserir_alterar_remover.js"),
                ),

                'adicionar' => "cadastros/rastreadores/Rastreadores/Formulario",
                'nome' => ' Rastreadores',
                'url_get' => base_url("cadastros/rastreadores/Rastreadores/funcoes"),
                'editar_url' => base_url("cadastros/rastreadores/Rastreadores/formulario"),
                "url_id" => $id,
                "edita_usuario" =>"",
                'select' => base_url("cadastros/rastreadores/Rastreadores/selectsParaOption"),



            );
            
            $this->load->template("generics/BaseGrid",$data);
        }

        public function Formulario(){
            $secção = $this->session->userdata["usuario_logado"];
            $id= $secção["usu_id"];

            $data = array(
                'form'=>$this->load->view("cadastro/rastreador/form",array(),true),
                'nome' => 'Rastreadores',
                'url_get' => base_url("cadastros/rastreadores/Rastreadores/funcoes"),
                'editar_url' => base_url("cadastros/rastreadores/Rastreadores/formulario"),
                'nameId' => "equ_id",
                "edita_usuario" =>"",
                'select' => base_url("cadastros/rastreadores/Rastreadores/selectsParaOption"),

                'css' => array(
                    base_url("assets/css/BaseForm/BaseForm.css"),
                ),

                'js' =>array(
                    base_url("assets/js/generico/adicionar.js")
                ),

                "url_id" => $id,
            );
            
            $this->load->template("generics/BaseForm",$data);
        }

        
        public function selectsParaOption(){
            $data = array(
                array("select" => "pro_descricao as descricao, pro_id as id","tabela" => "produto")
            );

            echo json_encode($this->Rastreador_model->PegaResumos($data));
        }
    }

?>