<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Aset</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?=base_url('admin/aset');?>">Data Aset</a></li>
              <li class="breadcrumb-item active">Tambah Data</li>
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
                <h3 class="card-title">Form Tambah Data Aset</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=base_url('store-aset');?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="kode_aset" class="col-sm-2 col-form-label">Kode Aset</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kode_aset" id="kode_aset" placeholder="Masukan Kode Aset.." required> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukan Kode Aset.." required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="merek" class="col-sm-2 col-form-label">Merek</label>
                    <div class="col-sm-10">
                      <select name="merek" id="merek" class="form-control select2bs4">
                        <option value="">Pilih..</option>
                        <?php foreach ($merek as $m) { ?>
                          <option value="<?=$m['nama'];?>"><?=$m['nama'];?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kondisi" class="col-sm-2 col-form-label">Kondisi</label>
                    <div class="col-sm-10">
                      <select name="kondisi" id="kondisi" class="form-control">
                        <option value="">Pilih..</option>
                        <option value="Baik">Baik</option>
                        <option value="Rusak Ringan">Rusak Ringan</option>
                        <option value="Rusak Berat">Rusak Berat</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tahun_perolehan" class="col-sm-2 col-form-label">Tahun Perolehan</label>
                    <div class="col-sm-10">
                      <select name="tahun_perolehan" id="tahun_perolehan" class="form-control select2bs4">
                        <option value="">Pilih..</option>
                        <?php for ($i=2001; $i <= date('Y'); $i++) { ?>
                            <option value="<?=$i;?>"><?=$i;?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Masukan Jumlah.." required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ruangan_id" class="col-sm-2 col-form-label">Ruangan</label>
                    <div class="col-sm-10">
                      <select name="ruangan_id" id="ruangan_id" class="form-control select2bs4">
                        <option value="">Pilih..</option>
                        <?php foreach ($ruangan as $r) { ?>
                          <option value="<?=$r['id'];?>"><?=$r['nama'];?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Foto Aset</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="gambar" id="gambar" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <a href="<?=base_url('admin/aset');?>" class="btn btn-danger">Kembali</a>
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