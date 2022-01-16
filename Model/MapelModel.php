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

    public function getJadwal()
    {
        $sql = "SELECT mapel.nama as namaMapel, guru.nama as namaGuru, jadwal.hari as hari, jadwal.jam as jam, status FROM jadwal
        join guru on guru.id = jadwal.id_guru
        join mapel on mapel.id = jadwal.id_mapel";
        
        $query = koneksi()->query($sql);
        $hasil = [];
        while($datamapel = $query->fetch_assoc())
        {
            $hasil[] = $datamapel;
        }
        return $hasil;
    }
}


// Array Assosiatif
//  $tes = new MapelModel();
//  var_export($tes->getjadwal());
//  die();

