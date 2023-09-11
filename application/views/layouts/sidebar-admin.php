<?php
  $role = $this->session->userdata('role');
?>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>" class="brand-link">
      <img src="<?=base_url()?>src/img/logo-politeknik.png" alt="AdminLTE Logo" class="brand-image">
      <span class="brand-text font-weight-light">ASET MANAJEMEN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?=base_url('admin/dashboard');?>" class="nav-link <?= ($this->uri->segment(2) == 'dashboard')?'active':''; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <?php if($role == 'Super Admin' || $role == 'Kepala Lab' || $role == 'Admin PLP'){ ?> 
          <li class="nav-item <?= ($this->uri->segment(2) == 'merek' || $this->uri->segment(2) == 'ruangan')?'menu-open':''; ?>">
            <a href="#" class="nav-link <?= ($this->uri->segment(2) == 'merek')?'active':''; ?>">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('admin/merek');?>" class="nav-link <?= ($this->uri->segment(2) == 'merek')?'active':''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Merek</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/ruangan');?>" class="nav-link <?= ($this->uri->segment(2) == 'ruangan')?'active':''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ruangan</p>
                </a>
              </li>
            </ul>
          </li>
          <?php } ?>
          <?php if($role == 'Super Admin' || $role == 'Kepala Lab' || $role == 'Kajur' || $role == 'Admin PLP'){ ?> 
          <li class="nav-item">
            <a href="<?=base_url('admin/aset');?>" class="nav-link <?= ($this->uri->segment(2) == 'aset')?'active':''; ?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Aset
              </p>
            </a>
          </li>
          <?php } ?>
          <?php if($role == 'Super Admin' || $role == 'Kepala Lab' || $role == 'Kajur' || $role == 'Admin PLP'){ ?> 
          <li class="nav-item <?= ($this->uri->segment(2) == 'aset-ruangan')?'menu-open':''; ?>">
            <a href="#" class="nav-link <?= ($this->uri->segment(2) == 'aset-ruangan')?'active':''; ?>">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Data Ruangan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php
                $menu_ruangan = $this->db->get('ruangan')->result_array();
                foreach ($menu_ruangan as $mr) { ?>
                  <li class="nav-item">
                    <a href="<?=base_url('admin/aset-ruangan/'.$mr['id'])?>" class="nav-link <?= ($this->uri->segment(3) == $mr['id'])?'active':''; ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p><?=$mr['nama'];?></p>
                    </a>
                  </li>
              <?php } ?>
            </ul>
          </li>
          <?php } ?>
          <?php if($role == 'Super Admin' || $role == 'Kepala Lab' || $role == 'Kajur' || $role == 'Admin PLP'){ ?> 
          <li class="nav-item">
            <a href="<?=base_url('admin/kerusakan');?>" class="nav-link <?= ($this->uri->segment(2) == 'kerusakan')?'active':''; ?>">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                Data Kerusakan
              </p>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item <?= ($this->uri->segment(2) == 'laporan')?'menu-open':''; ?>">
            <a href="#" class="nav-link <?= ($this->uri->segment(2) == 'laporan')?'active':''; ?>">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if($role == 'Super Admin' || $role == 'Kepala Lab' || $role == 'Kajur' || $role == 'Admin PLP'){ ?> 
              <li class="nav-item">
                <a href="<?=base_url('admin/laporan/perbaikan');?>" class="nav-link <?= ($this->uri->segment(3) == 'perbaikan')?'active':''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Perbaikan</p>
                </a>
              </li>
              <?php } ?>
              <li class="nav-item">
                <a href="<?=base_url('admin/laporan/kerusakan');?>" class="nav-link <?= ($this->uri->segment(3) == 'kerusakan')?'active':''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Kerusakan</p>
                </a>
              </li>
            </ul>
          </li>
          <?php if($role == 'Super Admin'){ ?> 
          <li class="nav-item">
            <a href="<?=base_url('admin/user');?>" class="nav-link <?= ($this->uri->segment(2) == 'user')?'active':''; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data User
              </p>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>