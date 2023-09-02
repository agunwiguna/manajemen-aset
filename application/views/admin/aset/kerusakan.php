<?php
  $role = $this->session->userdata('role');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$rg['nama'];?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="">Ruangan</a></li>
              <li class="breadcrumb-item"><a href="<?=base_url('admin/aset-ruangan/'.$rg['id']);?>"><?=$rg['nama'];?></a></li>
              <li class="breadcrumb-item active">Pengajuan Kerusakan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Pengajuan Kerusakan Data Aset</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=base_url('store-kerusakan');?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <input type="hidden" name="aset_id" value="<?=$aset['id'];?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="kode_aset" class="col-sm-2 col-form-label">Kode Aset</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kode_aset" id="kode_aset" placeholder="Masukan Kode Aset.." value="<?=$aset['kode_aset'];?>" readonly> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukan Nama Barang.." value="<?=$aset['nama_barang'];?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="merek" class="col-sm-2 col-form-label">Merek</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="merek" id="merek" value="<?=$aset['merek'];?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kondisi_kerusakan" class="col-sm-2 col-form-label">Kondisi</label>
                    <div class="col-sm-10">
                      <select name="kondisi_kerusakan" id="kondisi_kerusakan" class="form-control" required>
                        <option value="">Pilih..</option>
                        <option value="Baik" <?=($aset['kondisi'] == 'Baik')?'selected':''?> >Baik</option>
                        <option value="Rusak Ringan" <?=($aset['kondisi'] == 'Rusak Ringan')?'selected':''?> >Rusak Ringan</option>
                        <option value="Rusak Berat" <?=($aset['kondisi'] == 'Rusak Berat')?'selected':''?> >Rusak Berat</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tahun_perolehan" class="col-sm-2 col-form-label">Tahun Perolehan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tahun_perolehan" id="tahun_perolehan" value="<?=$aset['tahun_perolehan'];?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="jumlah" id="jumlah" value="<?=$aset['jumlah'];?>" placeholder="Masukan Jumlah.." readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_ruangan" class="col-sm-2 col-form-label">Ruangan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_ruangan" id="nama_ruangan" value="<?=$rg['nama'];?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="foto[]" class="col-sm-2 col-form-label">Foto Aset</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="foto[]" id="foto[]" multiple required accept="image/*">
                      <small>Bisa upload lebih dari 1</small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <a href="<?=base_url('admin/aset-ruangan/'.$rg['id']);?>" class="btn btn-danger">Kembali</a>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>