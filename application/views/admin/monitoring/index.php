<?php
  $role = $this->session->userdata('role');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kerusakan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard');?>">Home</a></li>
              <li class="breadcrumb-item active">Data Kerusakan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kerusakan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php if($this->session->flashdata('success')){ ?>

                  <div class="alert alert-success alert-dismissible fade show hide-alert" role="alert">
                    <?=$this->session->flashdata('success');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                <?php } ?>
                <table id="myTable" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Kode Aset</th>
                    <th>Merek</th>
                    <th>Kondisi</th>
                    <th>Jumlah Kerusakan</th>
                    <th>Ruangan</th>
                    <th>Status</th>
                    <?php if($role == 'Kepala Lab'){ ?>
                    <th>Perbaikan</th>
                    <?php } ?>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($monitoring as $item) { ?>
                        <tr>
                          <td><?=$no++;?></td>
                          <td><?=$item['nama_barang'];?></td>
                          <td><?=$item['kode_aset'];?></td>
                          <td><?=$item['merek'];?></td>
                          <td><?=$item['kondisi_kerusakan'];?></td>
                          <td><?=$item['jumlah'];?></td>
                          <td><?=$item['nama_ruangan'];?></td>
                          <td>
                            <?php if ($item['status'] == 1) {?>
                                <span class="badge badge-success">Disetujui</span>
                                <?php if($role == 'Kepala Lab'){ ?>
                                  <a href="<?=base_url('admin/kerusakan/cancel/'.$item['id']);?>" class="btn btn-sm btn-warning" onclick="return confirm('Apakah anda ingin membatalkan pengajuan data ini?');"><i class="fa fa-times"></i> Batal</a>
                                <?php } ?>  
                            <?php } elseif($item['status'] == 2) {?>
                                <span class="badge badge-danger">Ditolak</span>
                                <?php if($role == 'Kepala Lab'){ ?>
                                  <a href="<?=base_url('admin/kerusakan/cancel/'.$item['id']);?>" class="btn btn-sm btn-warning" onclick="return confirm('Apakah anda ingin membatalkan pengajuan data ini?');"><i class="fa fa-times"></i> Batal</a>
                                <?php } ?> 
                            <?php } else{ ?>
                              <?php if($role == 'Kepala Lab'){ ?>
                                <a href="<?=base_url('admin/kerusakan/approve/'.$item['id']);?>" class="btn btn-sm btn-primary" onclick="return confirm('Apakah anda ingin menyutujui pengajuan kerusakan ini?');"><i class="fa fa-check"></i> Setujui</a>
                                <a href="<?=base_url('admin/kerusakan/reject/'.$item['id']);?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda ingin menolak pengajuan data ini?');"><i class="fa fa-times"></i> Tolak</a>
                              <?php } else{ ?>
                                <span class="badge badge-warning">Diproses</span>
                              <?php } ?>
                            <?php } ?>
                          </td>
                          <?php if($role == 'Kepala Lab'){ ?>
                            <td>
                              <?php if ($item['is_repair'] == 0) {?>
                                <a href="<?=base_url('admin/perbaikan/approve/'.$item['id'].'/'.$item['aset_id']);?>" class="btn btn-sm btn-primary" onclick="return confirm('Apakah aset ini sudah dilakukan perbaikan?');"><i class="fa fa-check"></i> Ya</a>
                                <a href="<?=base_url('admin/perbaikan/reject/'.$item['id']);?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda ingin membatalkan perbaikan ini?');"><i class="fa fa-times"></i> Tidak</a>
                              <?php } elseif($item['is_repair'] == 1) {?>
                                Ya
                              <?php }else{ ?>
                                Tidak  
                              <?php } ?>  
                            </td>
                          <?php } ?> 
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <i class="fas fa-cog"></i><span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="<?=base_url('admin/kerusakan/show/'.$item['id']);?>">Detail</a>
                                <?php if($role == 'Admin' || $role == 'Admin PLP'){ ?> 
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url('admin/monikerusakantoring/destroy/'.$item['id']);?>" onclick="return confirm('Apakah anda ingin menghapus data?');">Hapus</a>
                                <?php } ?>
                              </div>
                            </div>
                          </td>
                        </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>