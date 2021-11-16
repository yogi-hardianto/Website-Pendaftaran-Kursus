<?php

class AuthController
{
    private $model;

    /**
    * Function ini adalah constructor yang berguna menginisialisasi obyek aslab Model
    */
    public function __construct()
    {
        $this->model = new AuthModel();
    }

    // Function index berfungsi untuk mengatur tampilan awal
    public function index()
    {
        require_once("View/index.php");
    }

    public function daftar()
    {
        require_once("View/login.php");
    }

}
?>