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
                        <h3><i class="fas fa-thumbtack mr-3"></i> Daftar Jadwal Pelajaran </h3><hr>
                        <a href="index.php?page=mapel&aksi=create" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-3"></i>Tambah Mata Pelajaran</a>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Guru Pengajar</th>
                                    <th scope="col">Hari</th>
                                    <th scope="col">Jam</th>
                                    <th colspan="3" scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=1;
                                foreach($data as $row): ?>
                                    <tr>
                                      <td><?= $no?></td>
                                    <td><?= $row['namaMapel']?></td>
                                    <td><?= $row['namaGuru']?></td>
                                    <td><?= $row['hari']?></td>
                                    <td><?= $row['jam']?></td>
                                    <td>
                                    <!-- # nanti di ganti saat modul 3 -->
                                    <?php if($row['status'] == '0') : ?>
                                        <a href="index.php?page=daftarprak&aksi=verif&id=<?= $row['idDaftar'];?>" class="btn btn-success">Verif</a>
                                        <!-- <td><i class="bg-danger p-2 text-white rounded d-flex justify-content-center" data-toggle="tooltip" data-placement="top" title="Not-Active">Deactivate</i></td> -->
                                    <?php else : ?>
                                        <a href="index.php?page=daftarprak&aksi=unVerif&id=<?= $row['idDaftar'];?>&idPraktikan=<?= $row['idPraktikan'];?>" class="btn btn-danger">Un-Verif</a>
                                        <!-- <td><i class="bg-success p-2 text-white rounded d-flex justify-content-center" data-toggle="tooltip" data-placement="top" title="Active">Activate</i></td> --> 
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php $no++;
                            endforeach;?>                                    
                                </tbody>
                            </table>
                        </div>
                        <script>
                            $(function () {
                             $('[data-toggle="tooltip"]').tooltip()
                            })
                        </script>
                    </div>
    </div>
    <!-- End of Main Content -->

</body>
</html>