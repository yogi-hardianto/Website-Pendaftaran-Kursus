<?php

/**
 * Function koneksi ini adalah fungsi untuk membuat koneksi ke database
 */

 function koneksi()
 {
     $db_host = "https://sql597.main-hosting.eu";
     $db_user = "yogi";
     $db_password = "Yogihardianto22";
     $db_database = "u871255742_db_kursus";

try {
    return new mysqli($db_host,$db_user,$db_password,$db_database);
    } catch (Exception $e){
        echo "Terjadi kesalahan koneksi database";
    }
 }
 