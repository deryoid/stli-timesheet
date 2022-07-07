<?php
require '../../config/config.php';
require '../../config/koneksi.php';
$id   = $_GET['id'];
$data = $koneksi->query("SELECT * FROM timesheet WHERE id_timesheet = '$id'");
$row  = $data->fetch_array();
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
                            <h1 class="m-0 text-dark">Ubah Timesheet</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Master</li>
                                <li class="breadcrumb-item active">Timesheet</li>
                                <li class="breadcrumb-item active">Ubah Data</li>
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
                                        <h3 class="card-title">Timesheet</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Tanggal</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tanggal_timesheet" value="<?= $row['tanggal_timesheet'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <select class="form control select2" name="id_manpower" data-placeholder="Pilih" style="width: 100%;" required>
                                                    <option value=""></option>
                                                    <?php
                                                    $nama = $koneksi->query("SELECT * FROM manpower ORDER BY id_manpower DESC");
                                                    foreach ($nama as $item) {
                                                    ?>
                                                        <option value="<?= $item['id_manpower'] ?>" <?= $row['id_manpower'] == $item['id_manpower'] ? "selected" : "" ?>> <?= $item['nama'] ?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Lambung</label>
                                            <div class="col-sm-10">
                                                <select class="form control select2" name="id_lambung" data-placeholder="Pilih" style="width: 100%;" required>
                                                    <option value=""></option>
                                                    <?php
                                                    $lambung = $koneksi->query("SELECT * FROM lambung ORDER BY id_lambung DESC");
                                                    foreach ($lambung as $item) {
                                                    ?>
                                                        <option value="<?= $item['id_lambung'] ?>" <?= $row['id_lambung'] == $item['id_lambung'] ? "selected" : "" ?>> <?= $item['nama_lambung'] ?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Shift</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="shift" value="<?= $row['shift'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">HM Awal</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="hm_awal" value="<?= $row['hm_awal'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">HM Akhir</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="hm_akhir" value="<?= $row['hm_akhir'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Jumlah</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="jumlah" value="<?= $row['jumlah'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Job</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="job" value="<?= $row['job'] ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/time/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
                                        <button type="submit" name="submit" class="btn bg-gradient-primary float-right mr-2"><i class="fa fa-save"> Ubah</i></button>
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
        $tanggal_timesheet         = $_POST['tanggal_timesheet'];
        $id_manpower         = $_POST['id_manpower'];
        $id_lambung         = $_POST['id_lambung'];
        $shift         = $_POST['shift'];
        $hm_awal         = $_POST['hm_awal'];
        $hm_akhir         = $_POST['hm_akhir'];
        $jumlah         = $_POST['jumlah'];
        $job         = $_POST['job'];


        $submit = $koneksi->query("UPDATE timesheet SET  
                            tanggal_timesheet = '$tanggal_timesheet',
                            id_manpower = '$id_manpower',
                            id_lambung = '$id_lambung',
                            shift = '$shift',
                            hm_awal = '$hm_awal',
                            hm_akhir = '$hm_akhir',
                            jumlah = '$jumlah',
                            job = '$job'
                            WHERE 
                            id_timesheet = '$id'");
        // var_dump($submit,$koneksi->error);
        // die();
        if ($submit) {
            $_SESSION['pesan'] = "Data Ditambahkan";
            echo "<script>window.location.replace('../time/');</script>";
        }
    }

    ?>

</body>

</html>