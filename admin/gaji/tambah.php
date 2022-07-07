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
                            <h1 class="m-0 text-dark">Gaji</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Gaji</li>
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
                                        <h3 class="card-title">Pekerjaan</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Manpower (Pekerjaan)</label>
                                            <div class="col-sm-10">
                                                <select class="form control select2" name="id_pekerjaan" data-placeholder="Pilih" style="width: 100%;" required>
                                                    <option value=""></option>
                                                    <?php
                                                    $pekerjaan = $koneksi->query("SELECT * FROM pekerjaan AS p
                                                    LEFT JOIN manpower AS m ON p.id_manpower = m.id_manpower");
                                                    foreach ($pekerjaan as $item) {
                                                    ?>
                                                        <option value="<?= $item['id_pekerjaan'] ?>"> <?= $item['nama'] ?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Tunjangan Timesheet</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="tunj_timesheet">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label"> HM</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="hm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Potongan Absensi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="pot_absensi">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">BPJS Ketenaga Kerjaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="bpjs_tk">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">BPJS Kesehatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="bpjs_kes">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Potongan Admin</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="pot_admin">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">MCU</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="mcu">
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/gaji/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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
        $id_pekerjaan         = $_POST['id_pekerjaan'];
        $tunj_timesheet         = $_POST['tunj_timesheet'];
        $hm         = $_POST['hm'];
        $pot_absensi         = $_POST['pot_absensi'];
        $bpjs_tk         = $_POST['bpjs_tk'];
        $bpjs_kes         = $_POST['bpjs_kes'];
        $pot_admin         = $_POST['pot_admin'];
        $mcu         = $_POST['mcu'];

        $submit = $koneksi->query("INSERT INTO gaji VALUES (
            NULL,
            '$id_pekerjaan',
            '$tunj_timesheet',
            '$hm',
            '$pot_absensi',
            '$bpjs_tk',
            '$bpjs_kes',
            '$pot_admin',
            '$mcu'
            )");
        // var_dump($submit, $koneksi->error);
        // die();

        if ($submit) {
            $_SESSION['pesan'] = "Data Ditambahkan";
            echo "<script>window.location.replace('../gaji/');</script>";
        }
    }
    ?>


</body>

</html>