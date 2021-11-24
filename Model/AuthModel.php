<?php

class AuthModel
{
    
    public function prosesAuthPetugas($nama, $password)
    {
        $sql = "SELECT * FROM petugas WHERE nama='$nama' and password='$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

}

//Array Assosiatif
// $tes = new AuthModel();
// var_export($tes->prosesAuthPetugas('admin','admin'));
// die();
