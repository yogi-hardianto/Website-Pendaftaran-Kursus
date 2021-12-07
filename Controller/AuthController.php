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

    public function loginSiswa()
    {
        require_once("View/auth/loginSiswa.php");
    }

    //Function untuk authentication 
    public function authSiswa()
    {
        $nama = $_POST['nama']; //method post mengambil data
        $password = $_POST['password'];
        $data = $this->model->prosesAuthSiswa($nama, $password);

        if($data){// ketika data ada
            $_SESSION['role'] = 'siswa'; //untuk berpindah kehalaman
            $_SESSION['siswa'] = $data;

            header("location: index.php?page=siswa&aksi=view&pesan=Berhasil Login");//lihat di index -> namanya routing
        }else{
            header("location: index.php?page=auth&aksi=loginSiswa&pesan=Password atau Nama salah");
        }
    }

    //Function untuk authentication 
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

     /**
     * Function store berfungsi untuk memproses data untuk di tambahkan 
     */
     public function storeSiswa()
     {
         $nama = $_POST['nama'];
         $password = $_POST['password'];
         $alamat = $_POST['alamat'];
         $nomor_hp = $_POST['nomor_hp'];
         $kelas = $_POST['kelas'];
         if($this->model->prosesStoreSiswa($nama,$password,$alamat,$nomor_hp,$kelas)){
             header("location: index.php?page=auth&aksi=view&pesan=Berhasil Daftar");
         }else{
             header("location: index.php?page=auth&aksi=daftar&pesan=Gagal Daftar");
         }
     }
     
     public function logout()
     {
         session_destroy();
         header("location:index.php?page=auth&aksi=view&pesan=Berhasil Logput");
     }


}
?>