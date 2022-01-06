<?php
class PetugasController
{
    private $model;
    public function index()
    {
        require_once("View/petugas/index.php");
    }

    public function dataSiswa()
    {
        require_once("View/petugas/Siswa.php");
    }

    public function dataGuru()
    {
        require_once("View/petugas/Guru.php");
    }
}
?>