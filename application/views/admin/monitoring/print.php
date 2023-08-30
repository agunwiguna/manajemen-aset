<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Print Data Monitoring</title>
  </head>
  <body>
    <section>
      <div class="container mt-3">
        <div class="row">
          <div class="col">
            <h3 class="text-center">Laporan Kerusakan Aset</h3>
            <br>
            <table id="myTable" class="table table-bordered table-sm">
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
        </div>
      </div>
    </section>
    <script type="text/javascript">
      window.print();
    </script>
  </body>
</html>