<?php

class DaftarModel
{
    /**Function get berfungsi untuk mengambil seluruh data siswa
     * @param integer id berisi id siswa
     */
    public function get($id)
    {
        $sql = "SELECT * FROM daftar WHERE id=$id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }
}


// Array Assosiatif
//  $tes = new DaftarModel();
//  var_export($tes->getmapel('1'));
//  die();

