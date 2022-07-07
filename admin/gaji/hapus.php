<?php

require '../../config/config.php';
require '../../config/koneksi.php';

$id    = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM gaji WHERE id_gaji = '$id'");

if ($hapus) {
   $_SESSION['pesan'] = "Berhasil dihapus";
   echo "<script>window.location.replace('../gaji/');</script>";
}
