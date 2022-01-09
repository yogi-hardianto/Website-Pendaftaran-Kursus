<?php
class DaftarController
{
    private $model;

    /**
    * Function ini adalah constructor yang berguna menginisialisasi obyek siswa Model
    */
    public function __construct()
    {
        $this->model = new DaftarModel();
    }

     /*Function index berfungsi untuk mengatur tampilan awal halaman siswa*/
    public function index()
    {
        $id = $_SESSION['petugas']['id'];
        $datasiswa = $this->model->get($id);
        extract($datasiswa);
        require_once("View/daftar/index.php");
    }
    
    public function create()
    {
        require_once("View/daftar/create.php");
    }
}
?>