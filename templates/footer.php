<footer class="main-footer">
  <strong>Copyright &copy; <?= date('Y') ?> <a href="#">PT. Semesta Transportasi Limbah Indonesia</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0.1
  </div>
</footer>

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


<!-- MODAL ABsensi -->
<div id="slipgaji" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
        <h4 class="modal-title">Laporan Slip Gaji Manpower</h4>
      </div>
      <div class="modal-body">

        <!-- tanggal -->

        <form method="POST" target="blank" action="<?= base_url('admin/gaji/print') ?>">
          <div class="row">
            <div class="col-md-12">
              <label> Nama</label>
              <div class="form-group">
                <select class="form control select2" name="pekerjaan" data-placeholder="Pilih" style="width: 100%;" required>
                  <option value=""></option>
                  <?php
                  $pekerjaan = $koneksi->query("SELECT * FROM pekerjaan AS p
                                                    LEFT JOIN manpower AS m ON p.id_manpower = m.id_manpower");
                  foreach ($pekerjaan as $item) {
                  ?>
                    <option value="<?= $item['id_pekerjaan'] ?>"> <?= $item['nama'] ?></option>

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