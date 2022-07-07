<?php
include '../../config/config.php';
include '../../config/koneksi.php';

$no = 1;

if (isset($_POST['cetak'])) {
    $manpower = $_POST['manpower'];
    $tgl1 = $_POST['tgl1'];
    $tgl2 = $_POST['tgl2'];
}
$bln = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
);

?>

<script type="text/javascript">
    window.print();
</script>

<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN DATA </title>
</head>

<body>
    <p align="center">
        <b>
            <img src="<?= base_url('assets/dist/img/stli.png') ?>" align="center" width="690" height="120">
            <center>
                <font size="2">Banjar Sari, Angsana, Kabupaten Tanah Bumbu, Kalimantan Selatan 72275 </font>
            </center>
        </b>
    </p>
    <p align="center">
        <b>
            <font size="5">Laporan Data Timesheet Perlambung</font> <br>
            <font size="5">Tanggal <?php echo tgl_indo($tgl1); ?> s/d <?php echo tgl_indo($tgl2); ?></font> <br>

            <hr size="2px" color="black">
        </b>
    </p>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead class="">
                        <tr align="center">
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Lambung</th>
                            <th>Shift</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    $data = $koneksi->query("SELECT * FROM timesheet AS ts
                                            LEFT JOIN manpower AS mp ON ts.id_manpower = mp.id_manpower
                                            LEFT JOIN lambung AS l ON ts.id_lambung = l.id_lambung
                                            WHERE ts.tanggal_timesheet BETWEEN '$tgl1' AND '$tgl2' AND ts.id_manpower = '$manpower'
                                            ");

                    while ($row = $data->fetch_array()) {
                    ?>
                        <tbody style="background-color: white">
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td><?= tgl_indo($row['tanggal_timesheet']) ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['nama_lambung'] ?></td>
                                <td><?= $row['shift'] ?></td>
                                <td align="center"><?= $row['jumlah'] ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                    <tr>
                        <th colspan="5" align="left"> Total :</th>
                        <th>
                            <?php
                            $hasil = $koneksi->query("SELECT SUM(jumlah) AS total FROM timesheet AS ts
                            LEFT JOIN manpower AS mp ON ts.id_manpower = mp.id_manpower
                            LEFT JOIN lambung AS l ON ts.id_lambung = l.id_lambung
                            WHERE ts.tanggal_timesheet BETWEEN '$tgl1' AND '$tgl2' AND ts.id_manpower = '$manpower'
                            ")->fetch_array();
                            echo $hasil['total'];
                            ?></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <br>

    </div>

    </div>
    <div style="text-align: center; display: inline-block; float: left;">
        <h5>
            Head Of Departement<br>

            <br><br><br><br>
            HOD
        </h5>

    </div>
    <div style="text-align: center; display: inline-block; float: right;">
        <h5>
            Banjarmasin , <?php echo tgl_indo(date('Y-m-d')); ?><br>

            <br><br><br><br>
            Admin
        </h5>

    </div>


</body>

</html>

<script>
    <?php
    function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
    }

    ?>
</script>