<?php
//koneksi 
require_once("Koneksi.php");

//memanggil file di Model
require_once("Model/AuthModel.php");
require_once("Model/SiswaModel.php");
require_once("Model/PetugasModel.php");
require_once("Model/MapelModel.php");
require_once("Model/DaftarModel.php");
require_once("Model/GuruModel.php");

//memanggil file di Controller
require_once("Controller/AuthController.php");
require_once("Controller/PetugasController.php");
require_once("Controller/SiswaController.php");
require_once("Controller/MapelController.php");
require_once("Controller/DaftarController.php");
require_once("Controller/GuruController.php");

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
        }
        else {
            echo "Method Not Found";
        }
    } else if($page == "petugas"){
        require_once("View/menu/menupetugas.php");

        if($_SESSION['role'] == 'petugas')
        {
            $petugas = new PetugasController();
            if ($aksi == 'view') {
                $petugas->index();
            }else if($aksi == 'dataSiswa'){
                $petugas->dataSiswa();
            }else if($aksi == 'dataPembayaran'){
                $petugas->dataPembayaran();
            }
            else {
                echo "Method Not Found";
            }
         } else {
            header("location: index.php?page=auth&aksi=loginPetugas");
         }
    }

    else if($page == "siswa"){
        require_once("View/menu/menusiswa.php");

        if($_SESSION['role'] == 'siswa')
        {
            $siswa = new SiswaController();
            if ($aksi == 'view') {
                $siswa->profil();
            }else if($aksi == 'update'){
                $siswa->update();
            }else if($aksi == 'daftarkursus'){
                $siswa->daftarkursus();
            }else if($aksi == 'jadwal'){
                $siswa->jadwal();
            }else if($aksi == 'pembayaran'){
                $siswa->pembayaran();
            }else if($aksi == 'historypembayaran'){
                $siswa->historypembayaran();
            }
            else {
                echo "Method Not Found";
            }
         } else {
            header("location: index.php?page=auth&aksi=loginSiswa");
         }
    }else if($page == "daftar"){
            require_once("View/menu/menupetugas.php");
    
            if($_SESSION['role'] == 'petugas')
            {
                $daftar = new DaftarController();
                if ($aksi == 'view') {
                    $daftar->index();
                }else if($aksi == 'create'){
                    $daftar->create();
                }
                else {
                    echo "Method Not Found";
                }
             } else {
                header("location: index.php?page=daftar&aksi=view");
         }
    }else if($page == "mapel"){
        require_once("View/menu/menupetugas.php");

        if($_SESSION['role'] == 'petugas')
        {
            $mapel = new MapelController();
            if ($aksi == 'view') {
                $mapel->index();
            }else if($aksi == 'create'){
                $mapel->create();
            }else if($aksi == 'jadwal'){
                $mapel->jadwal();
            }
            else {
                echo "Method Not Found";
            }
         } else {
            header("location: index.php?page=mapel&aksi=view");
         }
    }else if($page == "guru"){
        require_once("View/menu/menupetugas.php");

        if($_SESSION['role'] == 'petugas')
        {
            $guru = new GuruController();
            if ($aksi == 'view') {
                $guru->index();
            }else if($aksi == 'create'){
                $guru->create();
            }
            else {
                echo "Method Not Found";
            }
         } else {
            header("location: index.php?page=mapel&aksi=view");
         }
    }
    else {
        echo "Page Not Found";
    }
}else {
    header("location: index.php?page=auth&aksi=view"); //Jangan ada spasi habis location
}