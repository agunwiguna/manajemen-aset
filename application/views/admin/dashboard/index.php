<?php
  $role = $this->session->userdata('role');
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard');?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php if($role != 'BMN'){ ?> 
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php if ($total->total_aset) {
                      echo number_format($total->total_aset,0,',','.');
                    } else {
                      echo "0";
                    } ?>
                </h3>

                <p>Jumlah Aset</p>
              </div>
              <div class="icon">
                <i class="ion ion-home"></i>
              </div>
              <a href="<?=base_url('admin/aset')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>
                  <?php if ($perbaikan) {
                      echo number_format($perbaikan,0,',','.');
                    } else {
                      echo "0";
                    } ?>
                </h3>

                <p>Perbaikan</p>
              </div>
              <div class="icon">
                <i class="ion ion-hammer"></i>
              </div>
              <a href="<?=base_url('admin/laporan/perbaikan')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                  <?php if ($baik->total_baik) {
                      echo number_format($baik->total_baik,0,',','.');
                    } else {
                      echo "0";
                    } ?>
                </h3>

                <p>Baik</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?=base_url('admin/aset')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                    <?php if ($ringan->total_ringan) {
                      echo number_format($ringan->total_ringan,0,',','.');
                    } else {
                      echo "0";
                    } ?>
                </h3>

                <p>Rusak Ringan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?=base_url('admin/aset')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                    <?php if ($berat->total_berat) {
                      echo number_format($berat->total_berat,0,',','.');
                    } else {
                      echo "0";
                    } ?>
                </h3>

                <p>Rusak Berat</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?=base_url('admin/laporan/kerusakan')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <?php }else{?>
          <div class="row">
            <div class="col">
              <div class="alert alert-primary" role="alert">
                Selamat datang di Website Manajemen Aset
              </div>
            </div>
          </div>
        <?php } ?>  
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->