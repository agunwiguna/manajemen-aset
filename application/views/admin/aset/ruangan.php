<?php
  $role = $this->session->userdata('role');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$item['nama'];?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="">Data Ruangan</a></li>
              <li class="breadcrumb-item active"><?=$item['nama'];?></li>
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
                <h3 class="card-title">List Data Aset Ruangan <?=$item['nama'];?></h3>
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
                    <th>Tahun Perolehan</th>
                    <th>Jumlah</th>
                    <th>Ruangan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                    <?php if($role == 'Super Admin' || $role == 'Admin PLP'){ ?>
                    <th>Data Kerusakan</th>
                    <?php } ?>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($aset as $item) { ?>
                        <tr>
                          <td><?=$no++;?></td>
                          <td><?=$item['nama_barang'];?></td>
                          <td><?=$item['kode_aset'];?></td>
                          <td><?=$item['merek'];?></td>
                          <td><?=$item['kondisi'];?></td>
                          <td><?=$item['tahun_perolehan'];?></td>
                          <td><?=$item['jumlah'];?></td>
                          <td><?=$item['nama_ruangan'];?></td>
                          <td>
                            <img src="<?=base_url()?>src/img/aset/<?=$item['gambar'];?>" style="height: 100px;">
                          </td>
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <i class="fas fa-cog"></i><span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="<?=base_url('admin/aset/show/'.$item['id']);?>">Detail</a>
                                <?php if($role == 'Super Admin' || $role == 'Admin PLP'){ ?> 
                                <a class="dropdown-item" href="<?=base_url('admin/aset/edit/'.$item['id']);?>">Edit</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url('admin/aset/destroy/'.$item['id']);?>" onclick="return confirm('Apakah anda ingin menghapus data?');">Hapus</a>
                                <?php } ?>
                              </div>
                            </div>
                          </td>
                          <?php if($role == 'Super Admin' || $role == 'Admin PLP'){ ?>
                          <td>
                            <a href="<?=base_url('admin/aset-ruangan/kerusakan/'.$item['id']);?>" class="btn btn-success btn-sm">Kerusakan</a>
                          </td>
                          <?php } ?>
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