<?php
require '../../config/config.php';
require '../../config/koneksi.php';
$id   = $_GET['id'];
$data = $koneksi->query("SELECT * FROM project WHERE id_project = '$id'");
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
                            <h1 class="m-0 text-dark">Ubah Project</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Master</li>
                                <li class="breadcrumb-item active">Project</li>
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
                                        <h3 class="card-title">Project</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Lokasi</label>
                                            <div class="col-sm-10">
                                                <select class="form control select2" name="id_lokasi" data-placeholder="Pilih" style="width: 100%;" required>
                                                    <option value=""></option>
                                                    <?php
                                                    $lokasi = $koneksi->query("SELECT * FROM lokasi ORDER BY id_lokasi DESC");
                                                    foreach ($lokasi as $item) {
                                                    ?>
                                                        <option value="<?= $item['id_lokasi'] ?>" <?= $row['id_lokasi'] == $item['id_lokasi'] ? "selected" : "" ?>> <?= $item['nama_lokasi'] ?></option>

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
                                                        <option value="<?= $item['id_unit'] ?>" <?= $row['id_unit'] == $item['id_unit'] ? "selected" : "" ?>> <?= $item['nama_unit'] ?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Manpower</label>
                                            <div class="col-sm-10">
                                                <select class="form control select2" name="id_manpower" data-placeholder="Pilih" style="width: 100%;" required>
                                                    <option value=""></option>
                                                    <?php
                                                    $manpower = $koneksi->query("SELECT * FROM manpower ORDER BY id_manpower DESC");
                                                    foreach ($manpower as $item) {
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


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/project/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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
        $id_lokasi         = $_POST['id_lokasi'];
        $id_unit         = $_POST['id_unit'];
        $id_manpower         = $_POST['id_manpower'];
        $id_lambung         = $_POST['id_lambung'];

        $submit = $koneksi->query("UPDATE project SET  
                            id_lokasi = '$id_lokasi',
                            id_unit = '$id_unit',
                            id_manpower = '$id_manpower',
                            id_lambung = '$id_lambung'
                            WHERE 
                            id_project = '$id'");
        // var_dump($submit,$koneksi->error);
        // die();
        if ($submit) {
            $_SESSION['pesan'] = "Data Ditambahkan";
            echo "<script>window.location.replace('../project/');</script>";
        }
    }

    ?>

</body>

</html>