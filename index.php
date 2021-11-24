<?php
//koneksi 
require_once("Koneksi.php");

//memanggil file di Model
require_once("Model/AuthModel.php");

//memanggil file di Controller
require_once("Controller/AuthController.php");
require_once("Controller/PetugasController.php");


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

    else {
        echo "Page Not Found";
    }
}else {
    header("location: index.php?page=auth&aksi=view"); //Jangan ada spasi habis location
}