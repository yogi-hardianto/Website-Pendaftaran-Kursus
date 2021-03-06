<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

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
    <div class="col-md-10 p-5 pt-2">
                    <!-- Page Heading -->
                    <div class="container">
                        <h3><i class="fas fa-chalkboard-teacher mr-3"></i> Daftar Guru </h3><hr>
                        <a href="index.php?page=guru&aksi=create" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-3"></i>Tambah Guru</a>
                        <div class="table-responsive ">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Guru</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Mata Pelajaran</th>
                                    <th colspan="3" scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=1;
                                    foreach($data as $row): ?>
                                    <tr>
                                        <td><?= $no?></td>
                                        <td><?= $row['namaGuru']?></td>
                                        <td><?= $row['nomerGuru']?></td>
                                        <td><?= $row['nipGuru']?></td>
                                        <td><?= $row['namaMapel']?></td>
                                        <td><a href="" class="btn btn-primary">Detail</a></td>
                                        <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-toggle="tooltip" title="Edit"></i></td>
                                        <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Delete"></i></td>
                                    </tr>
                                <?php $no++;
                                    endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
    </div>
    <!-- End of Main Content -->

</body>
</html>