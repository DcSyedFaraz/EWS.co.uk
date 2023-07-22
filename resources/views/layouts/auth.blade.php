<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> {{env('APP_NAME', "EWS UK")}} - Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="wp-content/uploads/2018/05/IMG-20180320-WA0003.jpg" />

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
  <link href="{{ asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('backend/assets/vendor/remixicon/remixicon.css') }} " rel="stylesheet">
  <link href="{{ asset('backend/assets/vendor/boxicons/css/boxicons.min.css') }} " rel="stylesheet">
  <link href="{{ asset('backend/assets/vendor/quill/quill.snow.css') }} " rel="stylesheet">
  <link href="{{ asset('backend/assets/vendor/quill/quill.bubble.css') }} " rel="stylesheet">
  <link href="{{ asset('backend/assets/vendor/simple-datatables/style.css') }} " rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('backend/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

    @yield('content')

    <!-- Vendor JS Files -->
    <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/chart.js/chart.min.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/echarts/echarts.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('backend/assets/js/main.js')}}"></script>

</body>

</html>
