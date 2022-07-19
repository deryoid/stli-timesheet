<?php
include '../../config/config.php';
include '../../config/koneksi.php';

$no = 1;

if (isset($_POST['cetak'])) {
    $pekerjaan = $_POST['pekerjaan'];
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
$data = $koneksi->query("SELECT * FROM gaji AS g
LEFT JOIN pekerjaan AS p ON g.id_pekerjaan = p.id_pekerjaan 
LEFT JOIN manpower AS m ON p.id_manpower = m.id_manpower
LEFT JOIN jabatan AS j ON m.id_jabatan = j.id_jabatan
WHERE  g.id_pekerjaan = '$pekerjaan' 
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
            <font size="5">Slip Gaji Manpower</font> <br>

            <hr size="2px" color="black">

        </b>
    </p>
    <p>
    <div class="table-responsive">
        <table border="0" cellspacing="0" width="100%">
            <tr align="left">
                <th>Nama : <?php echo $data['nama'] ?></th>
                <th>NIK : <?php echo $data['nik'] ?></th>
            </tr>
            <tr align="left">
                <th>Jabatan : <?php echo $data['nama_jabatan'] ?></th>
                <th>Nomor Rekening : <?php echo $data['no_rekening'] ?></th>
            </tr>
        </table>
    </div>

    </p>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <tr align="left">
                        <th>
                            Jumlah HM : <?php echo $data['tot_hm'] ?><br>
                            Jumlah Timesheet : <?php echo $data['tot_hadir'] ?><br>
                            Jumlah Alpa : <?php echo $data['jum_alpa'] ?><br>
                            Jumlah Ijin (Non Upah) : <?php echo $data['jum_ijin'] ?><br>
                            Presensi : <?php echo $data['jum_hadir'] ?><br>
                        </th>
                        <th>

                        </th>
                    </tr>
                    <tr>
                        <th align="center">PENDAPATAN</th>
                        <th align="center">POTONGAN</th>
                    </tr>
                    <tr align="left">
                        <th>
                            Gaji Pokok : <?php echo rupiah($data['gaji_pokok']) ?><br>
                            Tunjangan Time Sheet : <?php echo rupiah($data['tunj_timesheet']) ?><br>
                            Intensif HM : <?php echo rupiah($data['hm']) ?><br>
                            Potongan Presensi : <?php echo rupiah($data['pot_absensi']) ?><br>
                        </th>
                        <th>
                            BPJS TK : <?php echo rupiah($data['bpjs_tk']) ?><br>
                            BPJS KES : <?php echo rupiah($data['bpjs_kes']) ?><br>
                            Admin : <?php echo rupiah($data['pot_admin']) ?><br>
                            MCU : <?php echo rupiah($data['mcu']) ?><br>
                        </th>
                    </tr>
                    <tr>
                        <th align="center">TOTAL PENDAPATAN :
                            <?php
                            $gapok = $data['gaji_pokok'];
                            $tunjtime = $data['tunj_timesheet'];
                            $hm = $data['hm'];
                            $potpre = $data['pot_absensi'];

                            $topat = ($gapok + $tunjtime + $hm) - $potpre;

                            echo rupiah($topat);
                            ?>
                        </th>
                        <th align="center">TOTAL POTONGAN
                            <?php
                            $bt = $data['bpjs_tk'];
                            $bk = $data['bpjs_kes'];
                            $pa = $data['pot_admin'];
                            $pmcu = $data['mcu'];

                            $topot = $bt + $bk + $pa + $mcu;

                            echo rupiah($topot);
                            ?>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">TOTAL GAJI <?php
                                                    $toga = $topat - $topot;
                                                    echo rupiah($toga); ?>
                        </th>
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
    function rupiah($angka)
    {

        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;
    }

    ?>
</script>