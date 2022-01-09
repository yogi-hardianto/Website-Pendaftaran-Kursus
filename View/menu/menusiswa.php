<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1c0f91b923.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Ruang Belajar | SISWA</title>
</head>
<body>
    <!-- nav awal -->
    <nav class="navbar navbar-expand-lg navbar-light nav-tabs bg-secondary">
        <a class="navbar-brand text-white" href="#">Ruang Belajar | </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <!-- menu navbar -->
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active ml-3">
                        <a class="nav-link text-white font-weight-normal" href="index.php?page=siswa&aksi=view"><i class="fas fa-fw fa-tachometer-alt mr-2"></i>Dashboard</a>
                    </li>
                    <li class="nav-item active ml-3">
                        <a class="nav-link text-white font-weight-normal" href="index.php?page=siswa&aksi=profil"><i class="fas fa-user-alt mr-2"></i>Profil</a>
                    </li>
                    <li class="nav-item active ml-3">
                        <a class="nav-link text-white font-weight-normal" href="index.php?page=siswa&aksi=daftarkursus"><i class="fas fa-clipboard-list mr-2"></i>Daftar Kursus</a>
                    </li>
                    <li class="nav-item active ml-3">
                        <a class="nav-link text-white font-weight-normal" href="index.php?page=siswa&aksi=jadwal"><i class="far fa-calendar-check mr-2"></i>Jadwal Kursus</a>
                    </li>
                    <li class="nav-item active ml-3">
                        <a class="nav-link text-white font-weight-normal" href="index.php?page=siswa&aksi=pembayaran"><i class="fas fa-money-bill-wave mr-2"></i>Pembayaran</a>
                    </li>                 
                </ul>
            </div>
        <!-- end menu navbar -->

        <!-- user id -->
        <div class="form-inline">
            <a class="d-flex align-items-center float-right ml-auto text-white " href="index.php?page=auth&aksi=logout">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Siswa : <?= $_SESSION['siswa']['nama'] ?></div>
            </a>
        </div>
        <!-- end user id -->
    </nav>
    <!-- end nav awal -->
</body>
</html>