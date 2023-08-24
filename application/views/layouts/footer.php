<footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="$">Manajemen Aset</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url()?>src/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>src/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?=base_url()?>src/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>src/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url()?>src/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url()?>src/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url()?>src/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>src/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url()?>src/admin/plugins/jszip/jszip.min.js"></script>
<script src="<?=base_url()?>src/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=base_url()?>src/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=base_url()?>src/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url()?>src/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url()?>src/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Select2 -->
<script src="<?=base_url()?>src/admin/plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>src/admin/dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $('#myTable').DataTable();
  });

  window.setTimeout(() => {
      $(".hide-alert").fadeTo(500, 0).slideUp(300, () => {
          $(this).remove(); 
      });
  }, 4000);
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
 
</script>
</body>
</html>