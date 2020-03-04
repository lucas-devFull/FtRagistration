<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Cliente extends MY_Controller{
    private $validaCampos = array();
        public function __construct()
        {
            parent::__construct();
            $this->load->model("Cliente_model");
            $validaCampos = array(
                "cli_nome_fantasia","cli_razao_social","cli_telefone","cli_endereco","cli_email",
                );
            $this->SelecionaModel($this->Cliente_model,$validaCampos);
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

                'url_get' => base_url("cadastros/cliente/Cliente/funcoes"),

                'nome' => ' Cliente',

                'editar_url' => base_url("cadastros/cliente/Cliente/formulario"),

                'adicionar' => "cadastros/cliente/cliente/Formulario",
                

                'url_id' => $id,

                "edita_usuario" =>"",

                'nameId' => "cli_id",

                'select' => base_url("cadastros/cliente/Cliente/selectsParaOption"),

            );
            
            $this->load->template("generics/BaseGrid",$data);
        }

        public function Formulario(){

            $secção = $this->session->userdata["usuario_logado"];
            $id= $secção["usu_id"];
            
            $data = array(
                'form'=>$this->load->view("cadastro/cliente/form",array(),true),

                'css' => array(
                    base_url("assets/css/BaseForm/BaseForm.css"),
                ),

                'js' =>array(
                    base_url("assets/js/generico/adicionar.js")
                ),
                
                'url_get' => base_url("cadastros/cliente/Cliente/funcoes"),
                
                'editar_url' => base_url("cadastros/cliente/Cliente/formulario"),

                'nome' => 'Cliente',

                'url_id' => $id,
                
                'nameId' => "cli_id",

                "edita_usuario" =>"",

                'select' => base_url("cadastros/cliente/Cliente/selectsParaOption"),
            );
            
            $this->load->template("generics/BaseForm",$data);
        }

        function selectsParaOption(){

        }
    }

?>