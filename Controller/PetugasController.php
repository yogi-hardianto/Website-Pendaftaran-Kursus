<?php
class PetugasController
{
    private $model;

    /**
    * Function ini adalah constructor yang berguna menginisialisasi obyek siswa Model
    */
    public function __construct()
    {
        $this->model = new PetugasModel();
    }

    /**Function index berfungsi untuk mengatur tampilan awal halaman siswa*/
    public function index()
    {
        $id = $_SESSION['petugas']['id'];
        $datapetugas = $this->model->get($id);
        extract($datapetugas);
        require_once("View/petugas/index.php");
    }

    public function dataSiswa()
    {
        $id = $_SESSION['petugas']['id'];
        $datapetugas = $this->model->get($id);
        extract($datapetugas);
        require_once("View/petugas/Siswa.php");
    }

    public function dataGuru()
    {
        require_once("View/petugas/Guru.php");
    }
}
?>