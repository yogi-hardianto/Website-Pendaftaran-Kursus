<?php

class AuthModel
{
    
    public function prosesAuthPetugas($nama, $password)
    {
        $sql = "SELECT * FROM petugas WHERE nama='$nama' and password='$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    public function prosesAuthSiswa($nama, $password)
    {
        $sql = "SELECT * FROM siswa WHERE nama='$nama' and password='$password'";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }

    /**
     * Function store berfungsi untuk menambahkan data ke database
     */
    public function prosesStoreSiswa($nama,$password,$alamat,$nomor_hp,$kelas)
    {
        $sql = "INSERT INTO siswa(nama,password,alamat,nomor_hp,kelas) VALUES('$nama','$password','$alamat','$nomor_hp','$kelas')";
        return koneksi()->query($sql);
    }

}

//Array Assosiatif
// $tes = new AuthModel();
// var_export($tes->prosesAuthSiswa('Dian','123'));
// die();
