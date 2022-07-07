<aside class="main-sidebar sidebar-light-green elevation-2">
  <!-- dark-primary  -->
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="<?= base_url() ?>/assets/dist/img/logo.png" style="width: 150px;" alt="#" class="brand-image" style="opacity: .8">
    <span class="brand-text font-weight-light"><b></b></span><br>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>/assets/dist/img/avatar1.png" class="img-circle elevation-1" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <i>
            <?php
            if ($_SESSION['role'] == "Administrator") {
              echo "Administrator";
            } elseif ($_SESSION['role'] == "Teknisi") {
              echo $_SESSION['nama_petugas'];
            }
            ?>
          </i>
        </a>
      </div>
    </div>




    <?php if ($_SESSION['role'] == "Administrator") { ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('admin/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?= base_url('admin/manpower') ?>" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Manpower
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/time') ?>" class="nav-link">
              <i class="nav-icon fas fa-business-time"></i>
              <p>
                Timesheet
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/gaji') ?>" class="nav-link">
              <i class="nav-icon fas fa-comments-dollar"></i>
              <p>
                Gaji
              </p>
            </a>
          </li>



          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clone"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/user') ?>" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/jabatan') ?>" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Jabatan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/lokasi') ?>" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Lokasi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/unit') ?>" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Unit</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/lambung') ?>" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Lambung</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/project') ?>" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Project</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/presensi') ?>" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Presensi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/pph') ?>" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>P2H</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/pekerjaan') ?>" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Pekerjaan</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/manpower/print') ?>" target="blank" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Laporan Data Manpower</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/time/printall') ?>" target="blank" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p style="font-size:12px;">Laporan Timesheet <br>Keseluruhan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" data-toggle="modal" data-target="#project" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Laporan Data Project</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/pph/print') ?>" target="blank" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p style="font-size:12px;">Laporan Data Pemeriksaan <br> dan Pemeliharaan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" data-toggle="modal" data-target="#absensi" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Laporan Data Absensi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/manpower/printgaji') ?>" target="blank" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p>Laporan Data Gaji</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" data-toggle="modal" data-target="#timesheetlambung" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p style="font-size:12px;">Laporan Timesheet Perlambung</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" data-toggle="modal" data-target="#timesheet" class="nav-link">
                  <i class="fas fa-file nav-icon"></i>
                  <p style="font-size:12px;">Laporan Timesheet Manpower</p>
                </a>
              </li>
            </ul>
          </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->



    <?php } elseif ($_SESSION['role'] == "Teknisi") { ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('teknisi/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('teknisi/lokasiatm') ?>" class="nav-link">
              <i class="nav-icon fas fa-map"></i>
              <p>
                List Lokasi ATM
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('teknisi/perbaikan') ?>" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Progres Perbaikan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('teknisi/perbaikan_selesai') ?>" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Perbaikan Selesai
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?= base_url('teknisi/maintance') ?>" class="nav-link">
              <i class="nav-icon fas fa-toolbox"></i>
              <p>
                Pemeliharaan
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->

    <?php } ?>
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Modal -->
<!-- MODAL Timesheet -->
<div id="timesheet" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
        <h4 class="modal-title">Laporan Timesheet</h4>
      </div>
      <div class="modal-body">

        <!-- tanggal -->

        <form method="POST" target="blank" action="<?= base_url('admin/time/print.php') ?>">
          <div class="row">
            <div class="col-md-12">
              <label> Nama</label>
              <div class="form-group">
                <select class="form control select2" name="manpower" data-placeholder="Pilih" style="width: 100%;" required>
                  <option value=""></option>
                  <?php
                  $nama = $koneksi->query("SELECT * FROM manpower ORDER BY id_manpower DESC");
                  foreach ($nama as $item) {
                  ?>
                    <option value="<?= $item['id_manpower'] ?>"> <?= $item['nama'] ?></option>

                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <input type="date" name="tgl1" class="form-control" required="" value="<?php echo $date_old; ?>">
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <input type="date" name="tgl2" class="form-control" required="" value="<?php echo $date_now; ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <button type="submit" name="cetak" class="btn btn-info waves-effect waves-light m-l-10 btn-md"><i class="mdi mdi-printer"></i> Cetak</button>
              </div>
            </div>
          </div>
        </form>
        <!-- end tanggal -->


      </div><!-- modal body -->

      <div class="modal-footer">
        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="mdi mdi-close"></i> Batal</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL PRIOJECT -->
<div id="project" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
        <h4 class="modal-title">Laporan PROJECT</h4>
      </div>
      <div class="modal-body">

        <!-- tanggal -->

        <form method="POST" target="blank" action="<?= base_url('admin/project/print') ?>">
          <div class="row">
            <div class="col-md-12">
              <label> Lokasi</label>
              <div class="form-group">
                <select class="form control select2" name="lokasi" data-placeholder="Pilih" style="width: 100%;" required>
                  <option value=""></option>
                  <?php
                  $lokasi = $koneksi->query("SELECT * FROM lokasi ORDER BY id_lokasi DESC");
                  foreach ($lokasi as $item) {
                  ?>
                    <option value="<?= $item['id_lokasi'] ?>"> <?= $item['nama_lokasi'] ?></option>

                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <label> Unit</label>
              <div class="form-group">
                <select class="form control select2" name="unit" data-placeholder="Pilih" style="width: 100%;" required>
                  <option value=""></option>
                  <?php
                  $unit = $koneksi->query("SELECT * FROM unit ORDER BY id_unit DESC");
                  foreach ($unit as $item) {
                  ?>
                    <option value="<?= $item['id_unit'] ?>"> <?= $item['nama_unit'] ?></option>

                  <?php } ?>
                </select>
              </div>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <button type="submit" name="cetak" class="btn btn-info waves-effect waves-light m-l-10 btn-md"><i class="mdi mdi-printer"></i> Cetak</button>
            </div>
          </div>
      </div>
      </form>
      <!-- end tanggal -->


    </div><!-- modal body -->

    <div class="modal-footer">
      <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="mdi mdi-close"></i> Batal</button>
    </div>
  </div>
</div>
</div>


<!-- MODAL ABsensi -->
<div id="absensi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
        <h4 class="modal-title">Laporan Absensi</h4>
      </div>
      <div class="modal-body">

        <!-- tanggal -->

        <form method="POST" target="blank" action="<?= base_url('admin/presensi/print') ?>">
          <div class="row">
            <div class="col-md-12">
              <label> Nama</label>
              <div class="form-group">
                <select class="form control select2" name="manpower" data-placeholder="Pilih" style="width: 100%;" required>
                  <option value=""></option>
                  <?php
                  $nama = $koneksi->query("SELECT * FROM manpower AS m
                  LEFT JOIN jabatan as j ON m.id_jabatan = j.id_jabatan
                  ");
                  foreach ($nama as $item) {
                  ?>
                    <option value="<?= $item['id_manpower'] ?>"> <?= $item['nama'] ?> (<?= $item['nama_jabatan'] ?>)</option>

                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <button type="submit" name="cetak" class="btn btn-info waves-effect waves-light m-l-10 btn-md"><i class="mdi mdi-printer"></i> Cetak</button>
              </div>
            </div>
          </div>
        </form>
        <!-- end tanggal -->


      </div><!-- modal body -->

      <div class="modal-footer">
        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="mdi mdi-close"></i> Batal</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL Timesheet -->
<div id="timesheetlambung" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
        <h4 class="modal-title">Laporan Timesheet Per Lambung</h4>
      </div>
      <div class="modal-body">

        <!-- tanggal -->

        <form method="POST" target="blank" action="<?= base_url('admin/time/printlambung.php') ?>">
          <div class="row">
            <div class="col-md-12">
              <label> Lambung</label>
              <div class="form-group">
                <select class="form control select2" name="lambung" data-placeholder="Pilih" style="width: 100%;" required>
                  <option value=""></option>
                  <?php
                  $nama = $koneksi->query("SELECT * FROM lambung ORDER BY id_lambung DESC");
                  foreach ($nama as $item) {
                  ?>
                    <option value="<?= $item['id_lambung'] ?>"> <?= $item['nama_lambung'] ?></option>

                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <input type="date" name="tgl1" class="form-control" required="" value="<?php echo $date_old; ?>">
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <input type="date" name="tgl2" class="form-control" required="" value="<?php echo $date_now; ?>">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <button type="submit" name="cetak" class="btn btn-info waves-effect waves-light m-l-10 btn-md"><i class="mdi mdi-printer"></i> Cetak</button>
              </div>
            </div>
          </div>
        </form>
        <!-- end tanggal -->


      </div><!-- modal body -->

      <div class="modal-footer">
        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="mdi mdi-close"></i> Batal</button>
      </div>
    </div>
  </div>
</div>