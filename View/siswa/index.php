<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/siswaindex.css">
    <title>KURSUS RUANG BELAJAR</title>
</head>
<body>

        <div class="container">
            <header>Selamat Datang <?= $_SESSION['siswa']['nama'] ?></header>
            <nav>
                <!-- Navigasi menu -->
                <ul class="fixed">
                    <li><a href="#datadiri">Data Diri</a></li>
                    <li><a href="#">Pembayaran</a></li>
                    <li><a href="#">Daftar Kursus</a></li>
                    <li><a href="index.php?page=auth&aksi=logout">Logout</a></li>
                </ul>
                    <br><br><br><br>

                    <!-- Data Diri -->
                <div class="pro-table">
                    <table class="tabel" id="datadiri">
                        <tr>
                            <th colspan="3" class="profil">PROFIL</th>
                            <th><button class="edit" type="button" href="index.php?page=siswa&aksi=edit">Edit Profil</button></th>
                            
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>:</td>
                            <td><label class="isi"><?= $datasiswa['id'] ?></label></td>
                        </tr>
                        <tr>
                            <td>NAMA</td>
                            <td>:</td>
                            <td><label class="isi"><?= $datasiswa['nama'] ?></label></td>
                        </tr>
                        
                        <tr>
                            <td>PASSWORD</td>
                            <td>:</td>
                            <td><label class="isi" type="password"><?= $datasiswa['password'] ?></label></td>
                        </tr>
                        <tr>
                            <td>KELAS</td>
                            <td>:</td>
                            <td><label class="isi"><?= $datasiswa['kelas'] ?></label></td>
                        </tr>
                        <tr>
                            <td>NO TELEPON</td>
                            <td>:</td>
                            <td><label class="isi"><?= $datasiswa['nomor_hp'] ?></label></td>
                        </tr>
                        <tr>
                            <td>ALAMAT</td>
                            <td>:</td>
                            <td><label class="isi"><?= $datasiswa['alamat'] ?></label></td>
                        </tr>

                    </table>
                </div>

                <!-- Pembayaran -->
                <!-- Daftar Kursus -->
                <!-- logout -->
            </nav>
        </div>
        
        <!-- <script>
        window.alert("SELAMAT DATANG DI HALAMAN SISWA");
        </script> -->

</body>
</html>