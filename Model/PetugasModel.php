<?php

class PetugasModel
{
    public function get($id)
    {
        $sql = "SELECT * FROM petugas WHERE id=$id";
        $query = koneksi()->query($sql);
        return $query->fetch_assoc();
    }  
    
    public function getSiswa()
    {
        $sql = "SELECT * FROM siswa";
        $query = koneksi()->query($sql);
        $hasil = [];
        while($datasiswa = $query->fetch_assoc()){
            $hasil[] = $datasiswa;
        }
        return $hasil; 
    }
}

// Array Assosiatif
//  $tes = new PetugasModel();
//  var_export($tes->get('1'));
//  die();
