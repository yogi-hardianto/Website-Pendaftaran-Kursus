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
            <h3><i class="fas fa-user-alt mr-2"></i> Input Harga <hr></h3>
            <div class="container">
                <div class="d-flex justify-content-center">
                    <img src="assets/img/home4.jpeg" width="200" height="200" alt="...">
                </div>                
                <div class="container mt-2">    
                    <form>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Pelajaran</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <form method="post" class="col-sm-2 col-form-label" enctype="multipart/form-data" action="uploadproses.php">
                                <label for="gambar" class="col-sm-2 col-form-label">Upload Banner</label>
                                <div class="col-sm-10">
                                    <input type="file" name="gambar">   
                                </div>
                            </form>
                        </div>
                        <div class="form-group row">

                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Done</button>
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