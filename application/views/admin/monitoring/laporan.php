<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard');?>">Home</a></li>
              <li class="breadcrumb-item active">Laporan</li>
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
                  <a href="<?=base_url('print-laporan');?>" class="btn btn-danger btn-sm" target="_blank"><i class="fa fa-print"> Print</i></a>
                </h3>
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
                    <th>Foto</th>
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
                          <td><?=$item['jml_kerusakan'];?></td>
                          <td><?=$item['nama_ruangan'];?></td>
                          <td>
                            <?php if ($item['status'] == 1) {?>
                                Disetujui
                            <?php } ?>
                          </td>
                          <td>
                            <?php if ($item['foto'] != NULL) { ?>
                              <img src="<?=base_url()?>src/img/monitoring/<?=$item['foto'];?>" style="height: 100px;">
                            <?php } ?>
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