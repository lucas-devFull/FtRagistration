<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
    private $model;
    private $Input1 = array();
    
    public function __construct(){
        parent::__construct();
        valida_session();
        }    
    
    function SelecionaModel($model,$Input1 = array()){
        $this->model = $model;
        $this->Input1 = $Input1;
    }

    public function funcoes(){
        $metodo = $this->input->method();

        switch ($metodo) {
            case'get':
                $dados = $this->input->get();
                if($this->model->buscarDados()){
                    echo json_encode($this->model->buscarDados($dados));
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
                    if ($this->model->AdicionaDados($dados)) {
                        echo json_encode(array("status" => true));
                    }
                }else{
                    echo json_encode(array("status" => false, 'dados' =>validation_errors()));
                }
                    break;

                
            case "delete":
                $dados = $this->input->input_stream();
                if ($this->model->RemoverDados($dados)) {
                    echo json_encode(array("status" => true));
                }else{
                    echo json_encode(array("status" => false));
                }
                break;
            
            case "put":
            $dados =  $this->input->input_stream();
            if ($this->model->AtualizaDados($dados)) {
                echo json_encode(array("status" => true));
            }else{
                echo json_encode(array("status" => false));
            }
            break;

        }
    }
    
    
}

?>