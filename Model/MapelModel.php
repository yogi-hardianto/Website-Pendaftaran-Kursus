<?php

class MapelModel
{
    /**Function get berfungsi untuk mengambil seluruh data siswa
     * @param integer id berisi id siswa
     */
    public function get($id)
    {
        $sql = "SELECT * FROM mapel WHERE id=$id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }   
}


// Array Assosiatif
//  $tes = new SiswaModel();
//  var_export($tes->get('1'));
//  die();

