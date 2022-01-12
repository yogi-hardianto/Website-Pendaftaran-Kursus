<?php

class GuruModel
{
    /**Function get berfungsi untuk mengambil seluruh data siswa
     * @param integer id berisi id siswa
     */
    public function get()
    {
        $sql = "SELECT guru.nama as namaGuru, guru.nomor_hp as nomerGuru, guru.nip as nipGuru, mapel.nama as namaMapel from guru JOIN mapel ON mapel.id = guru.mapel_id";

        $query = koneksi()->query($sql);
        $hasil = [];
        while($data = $query->fetch_assoc())
        {
            $hasil[] = $data;
        }
        return $hasil;
    }   
}


// Array Assosiatif
//  $tes = new GuruModel();
//  var_export($tes->get('2'));
//  die();

