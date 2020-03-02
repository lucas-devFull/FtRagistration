<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Usuarios extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model("usuarios_model");
 
        }

        public function Formulario(){

            $secção = $this->session->userdata["usuario_logado"];

            $id= $secção["usu_id"];
            $data = array(
                'form'=>$this->load->view("cadastro/usuario/form",array(),true),

                'css' => array(
                    base_url("assets/css/BaseForm/BaseForm.css"),
                ),

                'js' =>array(
                    base_url("assets/js/generico/adicionar.js"),

                ),
                
                'url_get' => base_url("Usuarios/funcoes"),

                "edita_usuario" => base_url("Usuarios/formulario"),

                'editar_url' => base_url("Usuarios/formulario"),

                'nome' => 'Dashboard',

                'url_id' => $id,
            
                'nameId' => "usu_id",
                
                'select' => base_url("Dashboard/selectsParaOption"),


            );
            
            $this->load->template("generics/BaseForm",$data);
        }

        function selectsParaOption(){

        }


        public function funcoes(){
            $metodo = $this->input->method();
    
            switch ($metodo) {
                case'get':
                    $dados = $this->input->get();
                    if($this->usuarios_model->buscarDados()){
                        echo json_encode($this->usuarios_model->buscarDados($dados));
                    }
                    break;
                
                case 'post':
                    $validacao = array();
                    foreach($this->Input1 as $input){
                        array_push($validacao, array(
                            'field' => $input,
                            'label' => $input,
                            'rules' => 'required')
                        );
                    }
    
                    $this->form_validation->set_rules($validacao);
                    if($this->form_validation->run() == true){
                        $dados = $this->input->post();
                        if ($this->usuarios_model->AdicionaDados($dados)) {
                            echo json_encode(array("status" => true));
                        }
                    }else{
                        echo json_encode(array("status" => false, 'dados' =>validation_errors()));
                    }
                        break;
    
                case "put":
                    $dados =  $this->input->input_stream();
                    if ($this->usuarios_model->AtualizaDados($dados)) {
                        echo json_encode(array("status" => true));
                    }else{
                        echo json_encode(array("status" => false));
                    }
                    break;
    
            }
        }
    }

?>