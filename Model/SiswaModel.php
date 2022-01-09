<?php

class SiswaModel
{
    /**Function get berfungsi untuk mengambil seluruh data siswa
     * @param integer id berisi id siswa
     */
    public function get($id)
    {
        $sql = "SELECT * FROM siswa WHERE id=$id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }  

    /**
     * Function update berfungsi untuk update data siswa pada database    
     */
    public function prosesUpdate($nama, $password, $alamat, $nomor_hp, $kelas, $gambar, $id)
    {
        $sql = "UPDATE siswa SET nama='$nama', password='$password', alamat='$alamat', nomor_hp='$nomor_hp' , kelas='$kelas', gambar='$gambar' WHERE id=$id";
        $query = koneksi()->query($sql);
        return $query;
    }
}


// Array Assosiatif
//  $tes = new SiswaModel();
//  var_export($tes->get('1'));
//  die();
