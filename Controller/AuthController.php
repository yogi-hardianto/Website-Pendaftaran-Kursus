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
        require_once("View/auth/loginSiswa.php");
    }

    public function loginPetugas()
    {
        require_once("View/auth/loginPetugas.php");
    }

    //Function authAslab untuk authentication petugas
    public function authPetugas()
    {
        $nama = $_POST['nama']; //method post mengambil data
        $password = $_POST['password'];
        $data = $this->model->prosesAuthPetugas($nama, $password);

        if($data){// ketika data ada
            $_SESSION['role'] = 'petugas'; //untuk berpindah kehalaman
            $_SESSION['petugas'] = $data;

            header("location: index.php?page=petugas&aksi=view&pesan=Berhasil Login");//lihat di index -> namanya routing
        }else{
            header("location: index.php?page=auth&aksi=loginPetugas&pesan=Password atau Nama salah");
        }
    }

    public function login_petugas()
    {
        require_once("View/login_petugas.php");
    }


}
?>