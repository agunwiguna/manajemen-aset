<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aset Manajemen | <?=$title;?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>src/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>src/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>src/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>src/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>src/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url()?>src/admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>src/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>src/admin/dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <?php
        $role = $this->session->userdata('role');
      ?>
      <?php if($role == 'Kepala Lab'){ ?> 

      <?php
        $notif = $this->db->get_where('monitoring', array('is_notif' => '0'))->num_rows();
      ?> 
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"><?=$notif;?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?=$notif;?> Pemberitahuan</span>
          <div class="dropdown-divider"></div>
          <a href="<?=base_url('admin/kerusakan');?>" class="dropdown-item">
            <i class="fas fa-desktop mr-2"></i> <?=$notif;?> Pengajuan Kerusakan
            <span class="float-right text-muted text-sm"></span>
          </a>
        </div>
      </li>
      <?php } ?>
      <?php if($role == 'Admin PLP' || $role == 'Super Admin'){ ?> 

      <?php
        $notif_perbaikan = $this->db->get_where('notif_perbaikan', array('is_notif' => '0'))->num_rows();
        $perbaikan = $this->db->get_where('notif_perbaikan', array('is_notif' => '0'))->result_array();
      ?> 
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"><?=$notif_perbaikan;?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?=$notif_perbaikan;?> Pemberitahuan</span>
          <div class="dropdown-divider"></div>
          <?php foreach ($perbaikan as $p) {
            //get ruangan
            $aset_id = $p['aset_id'];
            $this->db->select('a.*, b.nama as nama_ruangan');
            $this->db->from('aset a');
            $this->db->join('ruangan b', 'b.id = a.ruangan_id');
            $this->db->where('a.id', $aset_id);
            $asr = $this->db->get()->row_array();  
          ?>
            <a href="<?=base_url('admin/show-repair/'.$p['id'].'/'.$asr['ruangan_id']);?>" class="dropdown-item">
              <i class="fas fa-desktop mr-2"></i> <?=$notif_perbaikan;?> Perbaikan Ruangan <?=$asr['nama_ruangan'];?>
              <span class="float-right text-muted text-sm"></span>
            </a>
          <?php } ?>
        </div>
      </li>
      <?php } ?> 
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="https://ui-avatars.com/api/?name=<?=$this->session->userdata('name');?>" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">Hi, <?=$this->session->userdata('name');?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="https://ui-avatars.com/api/?name=<?=$this->session->userdata('name');?>" class="img-circle elevation-2" alt="User Image">

            <p>
              <?php echo $this->session->userdata('name');?>
              <small><?php echo $this->session->userdata('role');?></small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="<?=base_url('proses-logout');?>" class="btn btn-danger btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  


  
