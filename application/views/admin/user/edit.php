<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?=base_url('admin/user');?>">Data User</a></li>
              <li class="breadcrumb-item active">Ubah Data</li>
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
                <h3 class="card-title">Form Ubah Data User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=base_url('update-user');?>" method="POST" enctype="multipart/form-data" class="form-horizontal" autocomplete="off">
                <input type="hidden" name="id" value="<?=$item['id'];?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama User</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?=$item['name'];?>" name="name" id="name" placeholder="Masukan Nama User.." required> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username" value="<?=$item['username'];?>" id="username" placeholder="Masukan Username.." required> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password..">
                      <small>Kosongkan password jika tidak diganti</small> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                      <select name="role" id="role" class="form-control" required>
                        <option value="">Pilih..</option>
                        <option value="Admin" <?=($item['role']=='Admin')?'selected':'';?>>Admin</option>
                        <option value="Kepala Lab" <?=($item['role']=='Kepala Lab')?'selected':'';?>>Kepala Lab</option>
                        <option value="Kajur" <?=($item['role']=='Kajur')?'selected':'';?>>Kajur</option>
                        <option value="BMN" <?=($item['role']=='BMN')?'selected':'';?>>BMN</option>
                      </select> 
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <a href="<?=base_url('admin/user');?>" class="btn btn-danger">Kembali</a>
                      <button type="submit" class="btn btn-primary">Ubah</button>
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