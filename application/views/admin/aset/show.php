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
              <li class="breadcrumb-item active">Detail Data</li>
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
                <h3 class="card-title">
                  <a href="<?=base_url('admin/aset');?>" class="btn btn-danger btn-sm">Kembali</a>
                  Detail Data Aset
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-borderless table-sm">
                  <tbody>
                    <tr>
                      <td width="200">Kode Aset</td>
                      <td>: <?=$aset['kode_aset'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Nama Barang</td>
                      <td>: <?=$aset['nama_barang'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Merek</td>
                      <td>: <?=$aset['merek'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Kondisi</td>
                      <td>: <?=$aset['kondisi'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Tahun Perolehan</td>
                      <td>: <?=$aset['tahun_perolehan'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Jumlah</td>
                      <td>: <?=$aset['jumlah'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Nama Ruangan</td>
                      <td>: <?=$aset['nama_ruangan'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Gambar</td>
                      <td>
                          <img src="<?=base_url()?>src/img/aset/<?=$aset['gambar'];?>" style="height: 200px;">
                      </td>
                    </tr>
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