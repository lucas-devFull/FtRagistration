<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    class Dashboard Extends MY_Controller{
    
        public function __construct()
        {
            parent::__construct();
            valida_session();
            $this->load->model('Dashboard_model');
        }

        public function index(){
            $secção = $this->session->userdata["usuario_logado"];
            $id= $secção["usu_id"]; 

            $data = array(
                'css' => array(
                    base_url("assets/libs/bootstrap-table-develop/src/bootstrap-table.css"),
                    base_url("assets/css/Dashboard/dashboard.css")
                           
                ),

                'js'=>array(
                    base_url("assets/libs/bootstrap-table-develop/src/bootstrap-table.js"),
                    base_url("assets/js/Dashboard/dashboard.js"),
                    base_url("assets/js/generico/inserir_alterar_remover.js"),
                    base_url("assets/libs/bootstrap-table-develop/src/locale/bootstrap-table-pt-BR.js"),
                ),
                'url_get' =>  base_url("cadastros/instalacao/Instalacao/funcoes"),

                'editar_url' => "Usuarios/Formulario",

                "edita_usuario" => base_url("Usuarios/formulario"),
                'nome' => ' Dashobard',
                'url_id' => $id,
                'select' => base_url("Dashboard/selectsParaOption"),

                );
        
            $this->load->template("inicio/dashboard",$data);
        }

        public function localizacao(){
            if($this->Dashboard_model->buscaLocalizacao()){
                echo json_encode(($this->Dashboard_model->buscaLocalizacao()));
            }
        }

        public function BuscaTodos(){
            if($this->Dashboard_model->getTodos()){
                echo json_encode(($this->Dashboard_model->getTodos()));
            }
        }
    }

?>