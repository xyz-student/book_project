 
 <!-- /.content-wrapper -->
 
 <!-- <script>
     $(document).ready(function() {
         $('#category-dropdown').on('change', function() {
             var cat_id = this.value;

            //  alert(cat_id);

             $.ajax({
                 url: "select_sub_option.php",
                 type: "POST",
                 data: {
                     cat_id: cat_id
                 },
                 cache: false,
                 success: function(result) {
                     $("#sub-category-dropdown").html(result);
                     // alert(result);
                 }
             });
         });
     });
 </script> -->
 
 
 <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
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
<script src="./AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="./AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="./AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="./AdminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="./AdminLTE/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="./AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="./AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="./AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="./AdminLTE/plugins/moment/moment.min.js"></script>
<script src="./AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="./AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="./AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="./AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="./AdminLTE/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./AdminLTE/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./AdminLTE/dist/js/pages/dashboard.js"></script>
</body>
</html>
