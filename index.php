<?php
//koneksi 
require_once("Koneksi.php");

//memanggil file di Model
require_once("Model/AuthModel.php");
require_once("Model/SiswaModel.php");

//memanggil file di Controller
require_once("Controller/AuthController.php");
require_once("Controller/PetugasController.php");
require_once("Controller/SiswaController.php");

if (isset($_GET['page']) && isset($_GET['aksi'])) {
    
    session_start();

    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page

    if ($page == "auth") {
        $auth = new AuthController();
        if ($aksi == 'view') {
            $auth->index();
        }else if($aksi == 'loginPetugas'){
            $auth->loginPetugas();
        }else if($aksi == "authPetugas"){
            $auth->authPetugas();
        }else if($aksi == "daftar"){
            $auth->daftar();
        }else if($aksi == 'loginSiswa'){
            $auth->loginSiswa();
        }else if($aksi =='authSiswa'){
            $auth->authSiswa();
        }else if($aksi =='storeSiswa'){
            $auth->storeSiswa();
        }else if($aksi == 'logout'){
            $auth->logout();
        }else if($aksi == 'dataSiswa'){
            $auth->dataSiswa();
        }else if($aksi == 'dataGuru'){
            $auth->dataGuru();
        }
        else {
            echo "Method Not Found";
        }
    } 
    
    else if($page == "petugas"){
        require_once("View/petugas/index.php");

        if($_SESSION['role'] == 'petugas')
        {
            $petugas = new PetugasController();
            if ($aksi == 'view') {
                $petugas->index();
            }else {
                echo "Method Not Found";
            }
         } else {
            header("location: index.php?page=auth&aksi=loginPetugas");
         }
    }

    else if($page == "siswa"){
        require_once("View/siswa/index.php");

        if($_SESSION['role'] == 'siswa')
        {
            $siswa = new SiswaController();
            if ($aksi == 'view') {
                $siswa->index();
            }else if($aksi == 'edit'){
                // $siswa->edit();
            }else if($aksi == 'profil'){
                $siswa->profil();
            }else if($aksi == 'dashboard'){
                $siswa->dashboard();
            }
            else {
                echo "Method Not Found";
            }
         } else {
            header("location: index.php?page=auth&aksi=loginSiswa");
         }
    }

    else {
        echo "Page Not Found";
    }
}else {
    header("location: index.php?page=auth&aksi=view"); //Jangan ada spasi habis location
}