<?php
    class PetugasController{
        private $model;

        /**
        * Function ini adalah constructor yang berguna menginisialisasi obyek aslab Model
        */
        // public function __construct()
        // {
        //     $this->model = new PetugasModel();
        // }    
        
        // public function index()
        // {
        //     $idPetugas = $_SESSION['aslab']['id'];
        //     $data = $this->model->get($idAslab);
        //     extract($data);//melempar data ke view
        //     require_once("View/aslab/index.php");
        // }

        public function index()
    {
        require_once("View/petugas/index.php");
    }
    }
?>