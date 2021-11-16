<?php

class AuthModel
{
    
    public function prosesAuthAdmin($nama, $password)
    {
        $sql = "SELECT * FROM admin WHERE nama='$nama' and password='$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

}

//Array Assosiatif
// $tes = new AuthModel();
// var_export($tes->prosesStorePraktikan('indah','06.2019.1.07111','0987654321','123'));
// die();
