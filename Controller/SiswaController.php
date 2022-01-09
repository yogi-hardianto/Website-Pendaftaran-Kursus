<?php
class SiswaController
{
    private $model;

    /**
    * Function ini adalah constructor yang berguna menginisialisasi obyek siswa Model
    */
    public function __construct()
    {
        $this->model = new SiswaModel();
    }

    /**Function index berfungsi untuk mengatur tampilan awal halaman siswa*/
    public function index()
    {
        $id = $_SESSION['siswa']['id'];
        $datasiswa = $this->model->get($id);
        extract($datasiswa);
        require_once("View/siswa/index.php");
    }

    public function daftarkursus()
    {
        require_once("View/siswa/daftarkursus.php");
    }

    public function profil()
    {
        require_once("View/siswa/profil.php");
    }

    public function jadwal()
    {
        require_once("View/siswa/jadwal.php");
    }

    public function pembayaran()
    {
        require_once("View/siswa/pembayaran.php");
    }
}
?>