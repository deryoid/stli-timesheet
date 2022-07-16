<?php
require '../../config/config.php';
require '../../config/koneksi.php';
$id   = $_GET['id'];
$data = $koneksi->query("SELECT * FROM pekerjaan WHERE id_pekerjaan = '$id'");
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
                            <h1 class="m-0 text-dark">Ubah Pekerjaan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Master</li>
                                <li class="breadcrumb-item active">Pekerjaan</li>
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
                                                        <option value="<?= $item['id_manpower'] ?>" <?= $row['id_manpower'] == $item['id_manpower'] ? "selected" : "" ?>> <?= $item['nama'] ?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Total Hadir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="tot_hadir" value="<?= $row['tot_hadir'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">HM AWAL</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="hm_awal" name="hm_awal" value="<?= $row['hm_awal'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">HM AKHIR</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="hm_akhir" name="hm_akhir" value="<?= $row['hm_akhir'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">JAM NO RENT</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="no_rent" name="no_rent" value="<?= $row['no_rent'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Total HM</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tot_hm" name="tot_hm" value="<?= $row['tot_hm'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Jumlah Alpa</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="jum_alpa" value="<?= $row['jum_alpa'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Jumlah Ijin</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="jum_ijin" value="<?= $row['jum_ijin'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Jumlah Hadir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="jum_hadir" value="<?= $row['jum_hadir'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Tanggal Pekerjaan</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tanggal_pekerjaan" value="<?= $row['tanggal_pekerjaan'] ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/pekerjaan/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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
    <script>
        $("#hm_awal, #hm_akhir, #no_rent").keyup(function() {
            var hm_awal = $("#hm_awal").val();
            var hm_akhir = $("#hm_akhir").val();
            var no_rent = $("#no_rent").val();

            if (hm_awal && hm_akhir && no_rent && tot_hm) {
                var total = (parseInt(hm_akhir) - parseInt(hm_awal)) + parseInt(no_rent);
                if (total > 11) {
                    alert('Total HM Maks 11..!')
                    $("#tot_hm").val(0);
                } else {
                    $("#tot_hm").val(total);
                }
            } else {
                $("#tot_hm").val(0);
            }
        });
    </script>

    <?php
    if (isset($_POST['submit'])) {
        $id_manpower         = $_POST['id_manpower'];
        $tot_hadir         = $_POST['tot_hadir'];
        $hm_awal         = $_POST['hm_awal'];
        $hm_akhir         = $_POST['hm_akhir'];
        $no_rent         = $_POST['no_rent'];
        $tot_hm         = $_POST['tot_hm'];
        $jum_alpa         = $_POST['jum_alpa'];
        $jum_ijin         = $_POST['jum_ijin'];
        $jum_hadir         = $_POST['jum_hadir'];
        $tanggal_pekerjaan         = $_POST['tanggal_pekerjaan'];

        $submit = $koneksi->query("UPDATE pekerjaan SET  
                            id_manpower = '$id_manpower',
                            tot_hadir = '$tot_hadir',
                            hm_awal = '$hm_awal',
                            hm_akhir = '$hm_akhir',
                            no_rent = '$no_rent',
                            tot_hm = '$tot_hm',
                            jum_alpa = '$jum_alpa',
                            jum_ijin = '$jum_ijin',
                            jum_hadir = '$jum_hadir',
                            tanggal_pekerjaan = '$tanggal_pekerjaan'
                            WHERE 
                            id_pekerjaan = '$id'");
        // var_dump($submit,$koneksi->error);
        // die();
        if ($submit) {
            $_SESSION['pesan'] = "Data Ditambahkan";
            echo "<script>window.location.replace('../pekerjaan/');</script>";
        }
    }

    ?>

</body>

</html>