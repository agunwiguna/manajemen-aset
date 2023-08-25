<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$title;?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Data Master</a></li>
              <li class="breadcrumb-item active"><?=$title;?></li>
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
                  <a href="<?=base_url('admin/ruangan/create');?>" class="btn btn-primary btn-sm">Tambah Data</a>
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
                    <th>Nama Merek</th>
                    <th>Tanggal Input</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($ruangan as $item) { ?>
                        <tr>
                          <td><?=$no++;?></td>
                          <td><?=$item['nama'];?></td>
                          <td><?=date('d-m-Y H:i:s');?></td>
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <i class="fas fa-cog"></i><span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="<?=base_url('admin/ruangan/edit/'.$item['id']);?>">Edit</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=base_url('admin/ruangan/destroy/'.$item['id']);?>" onclick="return confirm('Apakah anda ingin menghapus data?');">Hapus</a>
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