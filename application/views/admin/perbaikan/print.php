<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Print Data Perbaikan</title>
  </head>
  <body>
    <section>
      <div class="container mt-3">
        <div class="row">
          <div class="col">
            <h3 class="text-center">Laporan Perbaikan Aset</h3>
            <br>
            <table id="myTable" class="table table-bordered table-sm">
              <thead>
              <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Kode Aset</th>
                <th>Merek</th>
                <th>Kondisi</th>
                <th>Tahun Perolehan</th>
                <th>Jumlah</th>
                <th>Ruangan</th>
                <th>Gambar</th>
              </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($perbaikan as $item) { ?>
                    <tr>
                      <td><?=$no++;?></td>
                      <td><?=$item['nama_barang'];?></td>
                      <td><?=$item['kode_aset'];?></td>
                      <td><?=$item['merek'];?></td>
                      <td><?=$item['kondisi'];?></td>
                      <td><?=$item['tahun_perolehan'];?></td>
                      <td><?=$item['jumlah'];?></td>
                      <td><?=$item['nama_ruangan'];?></td>
                      <td>
                        <img src="<?=base_url()?>src/img/aset/<?=$item['gambar'];?>" style="height: 100px;">
                      </td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript">
      window.print();
      window.onafterprint = window.close;
    </script>
  </body>
</html>