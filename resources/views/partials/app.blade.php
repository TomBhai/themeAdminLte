<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Name - @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.css')}}" media="all">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href= {{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}>
    <!-- DataTables -->
    <link rel="stylesheet" href= {{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}>
    <link rel="stylesheet" href= {{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}>
    <link rel="stylesheet" href= {{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
@include('partials.navbar')
    <!-- Navbar -->
{{--@include('partials.header')--}}
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('partials.sidebar')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

{{--    @include('partials.breadcrumb')--}}
    <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
@include('partials.footer')
<!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
{{--<script src={{ asset('assets/plugins/jquery/jquery.min.js')}}></script>--}}
{{--<!-- Bootstrap 4 -->--}}
{{--<script src={{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>--}}
{{--<!-- AdminLTE App -->--}}
{{--<script src={{ asset('assets/js/adminlte.min.js') }}></script>--}}
{{--<!-- AdminLTE for demo purposes -->--}}
{{--<script src={{ asset('assets/js/demo.js') }}></script>--}}
</body>
</html>
