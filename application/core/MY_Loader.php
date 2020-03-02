<?php defined('BASEPATH') or exit('No direct script access allowed');


    class MY_Loader extends CI_Loader{
        public function template($caminho, $data) {
            $this->view("generics/header.php",$data);
            $this->view($caminho, $data);
            $this->view("generics/footer.php",$data);
        }
    }