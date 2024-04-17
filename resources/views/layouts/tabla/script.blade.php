<!-- jQuery -->
<script src="../Iglesia/js/jstabla/jquery2.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Iglesia/js/jstabla/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../Iglesia/js/jstabla/jquery.dataTables.min.js"></script>
<script src="../Iglesia/js/jstabla/dataTables.bootstrap4.min.js"></script>
<script src="../Iglesia/js/jstabla/dataTables.buttons.min.js"></script>
<script src="../Iglesia/js/jstabla/buttons.bootstrap4.min.js"></script>
<script src="../Iglesia/js/jstabla/jszip.min.js"></script>
<script src="../Iglesia/js/jstabla/pdfmake.min.js"></script>
<script src="../Iglesia/js/jstabla/vfs_fonts.js"></script>
<script src="../Iglesia/js/jstabla/buttons.html5.min.js"></script>

<script src="../Iglesia/js/jstabla/buttons.colVis.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../Iglesia/js/jstabla/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>