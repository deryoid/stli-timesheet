<?php
include '../../config/config.php';
include '../../config/koneksi.php';

$no = 1;

if (isset($_POST['cetak'])) {
    $lokasi = $_POST['lokasi'];
    $unit = $_POST['unit'];
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
$names = $koneksi->query("SELECT * FROM project AS p
LEFT JOIN lokasi AS l ON p.id_lokasi = l.id_lokasi
LEFT JOIN unit AS u ON p.id_unit = u.id_unit
LEFT JOIN manpower AS m ON p.id_manpower = m.id_manpower
LEFT JOIN lambung AS lm ON p.id_lambung = lm.id_lambung
WHERE  p.id_lokasi = '$lokasi' AND  p.id_unit = '$unit' 
")->fetch_array();


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
            <font size="5">Laporan Data Project</font> <br>

            <hr size="2px" color="black">

        </b>
    </p>
    <p>
    Lokasi : <?php echo $names['nama_lokasi'] ?><br>
    Unit : <?php echo $names['nama_unit'] ?>
    </p>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead class="">
                        <tr align="center">
                            <th>No</th>
                            <th>Manpower</th>
                            <th>Lambung</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    $data = $koneksi->query("SELECT * FROM project AS p
                                            LEFT JOIN lokasi AS l ON p.id_lokasi = l.id_lokasi
                                            LEFT JOIN unit AS u ON p.id_unit = u.id_unit
                                            LEFT JOIN manpower AS m ON p.id_manpower = m.id_manpower
                                            LEFT JOIN lambung AS lm ON p.id_lambung = lm.id_lambung
                                            WHERE  p.id_lokasi = '$lokasi' AND  p.id_unit = '$unit' 
                                            ");
                    while ($row = $data->fetch_array()) {
                    ?>
                        <tbody style="background-color: white">
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['nama_lambung'] ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
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