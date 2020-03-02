<?php

    class Relatorios extends CI_Controller{
        private $validaCampos = array();

        public function __construct()
        {
            parent::__construct();
            $this->load->model("Relatorios_model");
            $validaCampos = array(
                "ins_id_rastreado","eve_data_gps",
                );
        }
        public function index(){
               
            $secção = $this->session->userdata["usuario_logado"];
            $id= $secção["usu_id"];

            $data = array(
                'form'=>$this->load->view("relatorios/form",array(),true),
                'css' => array(
                    base_url("assets/libs/bootstrap-table-develop/src/bootstrap-table.css"),
                    base_url("assets/css/BaseForm/BaseForm.css"),
                ),

                'js' => array(
                    base_url("assets/libs/bootstrap-table-develop/src/bootstrap-table.js"),
                    base_url("assets/libs/bootstrap-table-develop/src/locale/bootstrap-table-pt-BR.js"),
                    base_url("assets/js/Relatorios/relatorios.js")


                ),

                'select' => base_url("cadastros/relatorios/Relatorios/selectsParaOption"),

                'url_get' => base_url("cadastros/relatorios/Relatorios/funcoes"),

                'nome' => ' Relatorios',

                'editar_url' => base_url("relatorios/Relatorios/index"),

                'adicionar' => "cadastros/cliente/cliente/Formulario",
                

                'url_id' => $id,

                "edita_usuario" =>"",

                'nameId' => "cli_id"

            );

            $this->load->template("generics/BaseForm",$data);
        }

        public function BuscaRegistros()
    {
        $dados = $this->input->get();
        echo json_encode($this->Relatorios_model->buscarDados($dados));
    }

        public function localizacao(){
            if($this->Relatorios_model->buscaLocalizacao()){
                echo json_encode(($this->Relatorios_model->buscaLocalizacao()));
            }
        }

        public function selectsParaOption(){
            $data = array(
                array("select" => "ras_descricao as descricao, ras_id as id", "tabela" => "rastreado"),
            );

            echo json_encode($this->Relatorios_model->PegaResumos($data));
        }

    }



?>