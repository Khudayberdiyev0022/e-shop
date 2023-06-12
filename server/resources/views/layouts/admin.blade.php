<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
  @include('includes.header')
  @yield('content')
  @include('includes.footer')
</div>

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
<!-- Select 2 -->
<script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.tags').select2();
        $('.colors').select2();
        $('.categories').select2({
            minimumResultsForSearch: -1
        });
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        })
    });
</script>
</body>
</html>
