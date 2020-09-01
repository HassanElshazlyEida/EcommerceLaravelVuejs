<footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-pre
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
<script src="{{ url('/design/adminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('/design/adminLTE/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- DataTables -->
<link rel="stylesheet" href="{{url("/design/adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{url("/design/adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
<!-- Datatables buttons -->
<link rel="stylesheet" href="{{ url('/')}}/design/adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<script src="{{url("/design/adminLTE/plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{url("/design/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{url("/design/adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{url("/design/adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
<script src="{{url("/vendor/yajra/laravel-datatables-buttons/src/resources/assets/buttons.server-side.js")}}"></script>
<script src="{{url("/design/adminLTE/plugins/datatables-buttons/dataTables.buttons.min.js")}}"></script>
<script src="{{url("/vendor/datatables/buttons.server-side.js")}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('/design/adminLTE/plugins/bootstrap/js/bootstrap.bundle')}}.min.js"></script>
<!-- ChartJS -->
<script src="{{ url('/design/adminLTE/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ url('/design/adminLTE/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ url('/design/adminLTE/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ url('/design/adminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('/design/adminLTE/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ url('/design/adminLTE/plugins/moment/moment.min.js')}}"></script>
<script src="{{ url('/design/adminLTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('/design/adminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ url('/design/adminLTE/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('/design/adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/design/adminLTE/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/design/adminLTE/dist/js/demo.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('/design/adminLTE/dist/js/pages/dashboard.js')}}"></script>

@stack('js')
@stack('css')
</body>
</html>
