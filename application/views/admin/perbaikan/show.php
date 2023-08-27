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
              <li class="breadcrumb-item"><a href="<?=base_url('admin/aset');?>">Perbaikan</a></li>
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
                  <a href="<?=base_url('admin/perbaikan');?>" class="btn btn-danger btn-sm">Kembali</a>
                  Detail Perbaikan
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-borderless table-sm">
                  <tbody>
                    <tr>
                      <td width="200">Kode Aset</td>
                      <td>: <?=$perbaikan['kode_aset'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Nama Barang</td>
                      <td>: <?=$perbaikan['nama_barang'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Merek</td>
                      <td>: <?=$perbaikan['merek'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Kondisi</td>
                      <td>: <?=$perbaikan['kondisi'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Tahun Perolehan</td>
                      <td>: <?=$perbaikan['tahun_perolehan'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Jumlah</td>
                      <td>: <?=$perbaikan['jumlah'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Nama Ruangan</td>
                      <td>: <?=$perbaikan['nama_ruangan'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Status</td>
                      <td>: <?=$perbaikan['status'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Gambar</td>
                      <td>
                          <img src="<?=base_url()?>src/img/perbaikan/<?=$perbaikan['gambar'];?>" style="height: 200px;">
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