<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WPA 24V</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('css/blue.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
<body class="hold-transition login-page">


        @yield("content")

  <!-- jQuery 2.2.3 -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('js/icheck.min.js') }}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
@include('sweet::alert')
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
