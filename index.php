<?php
//koneksi 
require_once("Koneksi.php");

require_once("Model/AuthModel.php");

require_once("Controller/AuthModel.php");

if (isset($_GET['page']) && isset($_GET['aksi'])) {
    
    session_start();

    $page = $_GET['page']; // Berisi nama page
    $aksi = $_GET['aksi']; // Aksi Dari setiap page

    if ($page == "auth") {
        $auth = new AuthController();
        if ($aksi == 'view') {
            $auth->index();
        } 
        // else if ($aksi == 'loginAslab') {
        //     $auth->login_aslab();
        // } else if ($aksi == 'loginPraktikan') {
        //     $auth->login_praktikan();
        // } else if ($aksi == 'authAslab') {
        //     $auth->authAslab();
        // } else if ($aksi == 'authPraktikan') {
        //     $auth->authPraktikan();
        // } else if ($aksi == 'logout') {
        //     $auth->logout();
        // } else if ($aksi == 'daftarPraktikan') {
        //     $auth->daftarPraktikan();
        // } else if ($aksi == 'storePraktikan') {
        //     $auth->storePraktikan();
        // }
         else {
            echo "Method Not Found";
        }
    } else {
        echo "Page Not Found";
    }
} else {
    header("location: index.php?page=auth&aksi=view"); //Jangan ada spasi habis location
}