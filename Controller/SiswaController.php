<?php
class SiswaController
{
    private $model;

    /**
    * Function ini adalah constructor yang berguna menginisialisasi obyek siswa Model
    */
    public function __construct()
    {
        $this->model = new SiswaModel();
    }

    /**Function index berfungsi untuk mengatur tampilan awal halaman siswa*/
    public function profil()
    {
        $id = $_SESSION['siswa']['id'];
        $datasiswa = $this->model->get($id);
        extract($datasiswa);
        require_once("View/siswa/profil.php");
    }

    /**
     * Function update berfungsi untuk menyimpan hasil edit
     */
    public function update()
    {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $password = $_POST['password'];
        $alamat = $_POST['alamat'];
        $nomor_hp = $_POST['nomor_hp'];
        $kelas = $_POST['kelas'];
        $gambar = $_POST['gambar'];

        if($this->model->prosesUpdate($nama, $password, $alamat, $nomor_hp, $kelas, $gambar, $id)){
            header("location:index.php?page=siswa&aksi=view&pesan=Berhasil Ubah Data");
        }else{
            header("location:index.php?page=siswa&aksi=view&pesan=Gagal Ubah Data");
        }
    }

    public function daftarkursus()
    {
        require_once("View/siswa/daftarkursus.php");
    }

    public function dashboard()
    {
        require_once("View/siswa/index.php");
    }

    public function jadwal()
    {
        require_once("View/siswa/jadwal.php");
    }

    public function pembayaran()
    {
        require_once("View/siswa/pembayaran.php");
    }
}
?>