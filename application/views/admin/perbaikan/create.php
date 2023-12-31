<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perbaikan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?=base_url('admin/perbaikan');?>">Perbaikan</a></li>
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
                <h3 class="card-title">Form Perbaikan Aset</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=base_url('store-perbaikan');?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                    <label for="jumlah_perbaikan" class="col-sm-2 col-form-label">Jumlah Perbaikan</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="jumlah_perbaikan" id="jumlah_perbaikan" placeholder="Masukan Jumlah.." required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto Aset</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="foto" id="foto" required>
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