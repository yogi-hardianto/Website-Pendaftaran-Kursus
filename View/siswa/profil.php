<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Siswa | Profil</title>

    <!-- Custom fonts for this template-->
    <script src="https://kit.fontawesome.com/1c0f91b923.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <!-- <link rel="stylesheet" href="assets/css/stylesiswa.css"> -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body id="page-top">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content mt-3">
        <!-- Begin Page Content -->
        <div class="container-fluid mt-3">

            <!-- Page Heading -->
            <h3><i class="fas fa-user-alt mr-2"></i> PROFIL <hr></h3>
            <div class="container">
                <div class="d-flex justify-content-center">
                    <img src="assets/img/upload/1.jpg" width="200" height="200" alt="...">
                </div>                
                <div class="container mt-2">    
                    <form action="index.php?page=siswa&aksi=update" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $datasiswa['id']?>">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" value="<?= $datasiswa['nama']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" value="<?= $datasiswa['password']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <input type="text" name="alamat" class="form-control" value="<?= $datasiswa['alamat']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="notlp" class="col-sm-2 col-form-label">Nomor Hp</label>
                            <div class="col-sm-10">
                            <input type="text" name="nomor_hp" class="form-control" value="<?= $datasiswa['nomor_hp']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                            <input type="text" name="kelas" class="form-control" value="<?= $datasiswa['kelas']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gambar" class="col-sm-2 col-form-label">Upload Foto</label>
                            <div class="col-sm-10">
                                <input type="file" name="gambar"">   
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            </div>

    </div>
    <!-- End of Main Content -->

</body>
</html>