<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ isset($title) ? $title : __("admin.admin") }}</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{Storage::url(setting()->icon)}}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/')}}/design/adminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->

  <link rel="stylesheet" href="{{ url('/')}}/design/adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('/')}}/design/adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('/')}}/design/adminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  @if(dir_lang()=="ltr")
    <link rel="stylesheet" href="{{ url('/')}}/design/adminLTE/dist/css/adminlte.min.css">
  @else
    <link rel="stylesheet" href="{{ url('/')}}/design/adminLTE/dist/css/rtl/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="{{ url('/')}}/design/adminLTE/dist/css/rtl/rtl.css">
    <link rel="stylesheet" href="{{ url('/')}}/design/adminLTE/dist/css/rtl/AdminRTL.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <style type="text/css">
        html,body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
  @endif
  <!-- Datatables checkbox Delelte -->
  <script src="{{ url('/design/adminLTE/dist/js/Datatables_checkbox.js')}}"></script>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('/')}}/design/adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('/')}}/design/adminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- Datatables responsive -->
  <link rel="stylesheet" href="{{ url('/')}}/design/adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('/')}}/design/adminLTE/plugins/summernote/summernote-bs4.min.css">

</head>
