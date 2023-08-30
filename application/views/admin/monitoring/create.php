<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Monitoring</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?=base_url('admin/monitoring');?>">Monitoring</a></li>
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
                <h3 class="card-title">Form Pengajuan Kerusakan Aset</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=base_url('store-monitoring');?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="aset_id" class="col-sm-2 col-form-label">Nama Aset</label>
                    <div class="col-sm-10">
                      <select name="aset_id" id="aset_id" class="form-control select2bs4">
                        <option value="">Pilih..</option>
                        <?php foreach ($aset as $a) { ?>
                          <option value="<?=$a['id'];?>"><?=$a['kode_aset'].' - '.$a['nama_barang'];?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kondisi_kerusakan" class="col-sm-2 col-form-label">Kondisi</label>
                    <div class="col-sm-10">
                      <select name="kondisi_kerusakan" id="kondisi_kerusakan" class="form-control">
                        <option value="">Pilih..</option>
                        <option value="Baik">Baik</option>
                        <option value="Rusak Ringan">Rusak Ringan</option>
                        <option value="Rusak Berat">Rusak Berat</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jml_kerusakan" class="col-sm-2 col-form-label">Jumlah Kerusakan</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="jml_kerusakan" id="jml_kerusakan" placeholder="Masukan Jumlah.." required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto Aset</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="foto[]" id="foto[]" multiple required accept="image/*">
                      <small>Kamu bisa upload lebih dari 1</small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
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