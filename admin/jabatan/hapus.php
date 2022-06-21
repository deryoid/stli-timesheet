<?php

require '../../config/config.php';
require '../../config/koneksi.php';

$id    = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM jabatan WHERE id_jabatan = '$id'");

if ($hapus) {
   $_SESSION['pesan'] = "Berhasil dihapus";
   echo "<script>window.location.replace('../jabatan/');</script>";
}
