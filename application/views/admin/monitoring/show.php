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
              <li class="breadcrumb-item"><a href="<?=base_url('admin/monitoring');?>">Data Kerusakan</a></li>
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
                  <a href="<?=base_url('admin/monitoring');?>" class="btn btn-danger btn-sm">Kembali</a>
                  Detail Data Kerusakan
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
                <h3>Detail Kerusakan</h3>
                <table class="table table-borderless table-sm">
                  <tbody>
                    <tr>
                      <td width="200">Kondisi Kerusakan</td>
                      <td>: <?=$aset['kondisi_kerusakan'];?></td>
                    </tr>
                    <tr>
                      <td width="200">Jumlah Kerusakan</td>
                      <td>: <?=$aset['jml_kerusakan'];?></td>
                    </tr>
                    <!-- <tr>
                      <td width="200">Foto Aset</td>
                      <td>
                          <img src="<?=base_url()?>src/img/monitoring/<?=$aset['foto'];?>" style="height: 200px;">
                      </td>
                    </tr> -->
                    <tr>
                      <td width="200">Status</td>
                      <td>:
                        <?php
                          if ($aset['kondisi'] == '0') {
                            echo "Diproses";
                          } else if($aset['kondisi'] == '1') {
                            echo "Disetujui";
                          }else{
                            echo "Diproses";
                          }
                          
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <td width="200">Tanggal Pengajuan</td>
                      <td>: <?=date('d-m-Y H:i:s', strtotime($aset['created_at']));?></td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-borderless table-sm">
                  <tbody>
                    <tr>
                      <td>Foto Kerusakan Aset</td>
                    </tr> 
                    <?php
                      $foto = $this->db->get_where('galeri_monitoring', array('monitoring_id' => $aset['id']))->result_array();
                      foreach ($foto as $key) { ?>
                        <tr>
                          <td>
                              <img src="<?=base_url()?>src/img/monitoring/<?=$key['foto'];?>" style="height: 200px;">
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