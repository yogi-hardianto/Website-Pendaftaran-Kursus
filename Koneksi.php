<?php

/**
 * Function koneksi ini adalah fungsi untuk membuat koneksi ke database
 */

 function koneksi()
 {
     $db_host = "127.0.0.1:3306";
     $db_user = "yogi";
     $db_password = "Yogihardianto22";
     $db_database = "db_kursus";

try {
    return new mysqli($db_host,$db_user,$db_password,$db_database);
    } catch (Exception $e){
        echo "Terjadi kesalahan koneksi database";
    }
 }
 