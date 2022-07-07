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
                            <h1 class="m-0 text-dark">Pekerjaan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Pekerjaan</li>
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
                                            <label for="" class="col-sm-2 col-form-label">Manpower</label>
                                            <div class="col-sm-10">
                                                <select class="form control select2" name="id_manpower" data-placeholder="Pilih" style="width: 100%;" required>
                                                    <option value=""></option>
                                                    <?php
                                                    $manpower = $koneksi->query("SELECT * FROM manpower ORDER BY id_manpower DESC");
                                                    foreach ($manpower as $item) {
                                                    ?>
                                                        <option value="<?= $item['id_manpower'] ?>"> <?= $item['nama'] ?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Total Hadir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="tot_hadir">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Total HM</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="tot_hm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Jumlah Alpa</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="jum_alpa">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Jumlah Ijin</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="jum_ijin">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Jumlah Hadir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="jum_hadir">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Tanggal Pekerjaan</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tanggal_pekerjaan">
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/pekerjaan/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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
        $id_manpower         = $_POST['id_manpower'];
        $tot_hadir         = $_POST['tot_hadir'];
        $tot_hm         = $_POST['tot_hm'];
        $jum_alpa         = $_POST['jum_alpa'];
        $jum_ijin         = $_POST['jum_ijin'];
        $jum_hadir         = $_POST['jum_hadir'];
        $tanggal_pekerjaan         = $_POST['tanggal_pekerjaan'];

        $submit = $koneksi->query("INSERT INTO pekerjaan VALUES (
            NULL,
            '$id_manpower',
            '$tot_hadir',
            '$tot_hm',
            '$jum_alpa',
            '$jum_ijin',
            '$jum_hadir',
            '$tanggal_pekerjaan'
            )");
        // var_dump($submit, $koneksi->error);
        // die();

        if ($submit) {
            $_SESSION['pesan'] = "Data Ditambahkan";
            echo "<script>window.location.replace('../pekerjaan/');</script>";
        }
    }
    ?>


</body>

</html>