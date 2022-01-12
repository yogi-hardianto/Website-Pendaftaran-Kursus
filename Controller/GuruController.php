<?php
class GuruController
{
    private $model;

    /**
    * Function ini adalah constructor yang berguna menginisialisasi obyek siswa Model
    */
    public function __construct()
    {
        $this->model = new GuruModel();
    }

     /*Function index berfungsi untuk mengatur tampilan awal halaman siswa*/
    public function index()
    {
        $id = $_SESSION['petugas']['id'];
        $datasiswa = $this->model->get($id);
        extract($datasiswa);
        require_once("View/guru/index.php");
    }
    
    public function create()
    {
        require_once("View/guru/create.php");
    }
}
?>