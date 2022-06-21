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
            <a href="<?= base_url('admin/timesheet') ?>" class="nav-link">
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
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/laporan') ?>" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Laporan
              </p>
            </a>
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