<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../../templates/head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php
        include '../../templates/navbar.php';
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include '../../templates/sidebar.php';
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Manpower</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Manpower</li>
                                <li class="breadcrumb-item active">Tambah Data</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- left column -->
                    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Horizontal Form -->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Manpower</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">


                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nik">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-10">
                                                <select class="form control select2" name="id_jabatan" data-placeholder="Pilih" style="width: 100%;" required>
                                                    <option value=""></option>
                                                    <?php
                                                    $jabatan = $koneksi->query("SELECT * FROM jabatan ORDER BY id_jabatan DESC");
                                                    foreach ($jabatan as $item) {
                                                    ?>
                                                        <option value="<?= $item['id_jabatan'] ?>"> <?= $item['nama_jabatan'] ?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Unit</label>
                                            <div class="col-sm-10">
                                                <select class="form control select2" name="id_unit" data-placeholder="Pilih" style="width: 100%;" required>
                                                    <option value=""></option>
                                                    <?php
                                                    $unit = $koneksi->query("SELECT * FROM unit ORDER BY id_unit DESC");
                                                    foreach ($unit as $item) {
                                                    ?>
                                                        <option value="<?= $item['id_unit'] ?>"> <?= $item['nama_unit'] ?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Nomor Hp</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="no_hp">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Nomor Rekening</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="no_rekening">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/manpower/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
                                        <button type="submit" name="submit" class="btn bg-gradient-primary float-right mr-2"><i class="fa fa-save"> Simpan</i></button>
                                    </div>
                                    <!-- /.card-footer -->

                                </div>

                            </div>
                            <!--/.col (left) -->
                        </div>

                    </form>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include_once "../../templates/footer.php"; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php include_once "../../templates/script.php"; ?>


    <?php
    if (isset($_POST['submit'])) {
        $nik         = $_POST['nik'];
        $nama         = $_POST['nama'];
        $id_jabatan         = $_POST['id_jabatan'];
        $id_unit         = $_POST['id_unit'];
        $no_hp         = $_POST['no_hp'];
        $email         = $_POST['email'];
        $no_rekening         = $_POST['no_rekening'];



        $submit = $koneksi->query("INSERT INTO manpower  VALUES (
            NULL,
            '$nik',
            '$nama',
            '$id_jabatan',
            '$id_unit',
            '$no_hp',
            '$email',
            '$no_rekening'
            )");
        // var_dump($submit, $koneksi->error);
        // die();

        if ($submit) {
            $_SESSION['pesan'] = "Data Ditambahkan";
            echo "<script>window.location.replace('../manpower/');</script>";
        }
    }
    ?>


</body>

</html>