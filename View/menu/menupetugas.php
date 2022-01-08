<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- nav awal -->
    <nav class="navbar navbar-expand-lg navbar-light nav-tabs bg-primary">
        <a class="navbar-brand text-white" href="#">Ruang Belajar | </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <!-- menu navbar -->
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active ml-3">
                        <a class="nav-link text-white font-weight-normal" href="index.php?page=petugas&aksi=view">Dashboard</a>
                    </li>
                    <li class="nav-item active ml-3">
                        <a class="nav-link text-white font-weight-normal" href="index.php?page=petugas&aksi=dataSiswa">Management Siswa</a>
                    </li>
                    <li class="nav-item active ml-3">
                        <a class="nav-link text-white font-weight-normal" href="index.php?page=petugas&aksi=dataGuru">Management Guru</a>
                    </li>
                    <li class="nav-item dropdown ml-3">
                        <a class="nav-link dropdown-toggle text-white font-weight-normal" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Management Pembayaran</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Management Data Praktikum</a>
                            <a class="dropdown-item" href="#">Management Data Modul</a>
                            <a class="dropdown-item" href="#">Management Pendaftaran Praktikum</a>
                        </div>
                    </li>
                    <li class="nav-item active ml-3">
                        <a class="nav-link text-white font-weight-normal" href="#">Management Jadwal</a>
                    </li>
                </ul>
            </div>
        <!-- end menu navbar -->

        <!-- user id -->
        <div class="form-inline">
            <a class="d-flex align-items-center float-right ml-auto text-white " href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div class="sidebar-brand-text mx-3">=NamaSiswa=</div>
            </a>
        </div>
        <!-- end user id -->
    </nav>
    <!-- end nav awal -->
</body>
</html>