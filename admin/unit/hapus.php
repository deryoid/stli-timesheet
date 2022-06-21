<?php

require '../../config/config.php';
require '../../config/koneksi.php';

$id    = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM unit WHERE id_unit = '$id'");

if ($hapus) {
   $_SESSION['pesan'] = "Berhasil dihapus";
   echo "<script>window.location.replace('../unit/');</script>";
}
