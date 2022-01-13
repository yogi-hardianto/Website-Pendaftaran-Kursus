<?php

/**
 * Function koneksi ini adalah fungsi untuk membuat koneksi ke database
 */

 function koneksi()
 {
     $db_host = "https://auth-db597.hostinger.com/index.php?route=/database/structure&server=1&db=u871255742_db_kursus";
     $db_user = "yogi";
     $db_password = "Yogihardianto22";
     $db_database = "db_kursus";

try {
    return new mysqli($db_host,$db_user,$db_password,$db_database);
    } catch (Exception $e){
        echo "Terjadi kesalahan koneksi database";
    }
 }
 