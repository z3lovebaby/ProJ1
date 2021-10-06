<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 @yield('title')
 <link rel='icon' href="https://scontent.fhan5-4.fna.fbcdn.net/v/t1.6435-9/152406961_1802432383270100_3355430014002109187_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=8631f5&_nc_ohc=WYGiRhCcNtsAX-zJRuj&tn=GNg9XADo8URz-FIm&_nc_ht=scontent.fhan5-4.fna&oh=99c02c5b488d20d5de95436aad6422ce&oe=61834C9B"  />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('adminLTE/plugins/fontawesome-free/css/all.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminLTE/dist/css/adminlte.min.css')}}">
  @yield('css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

 @include('partials.header')
 @include('partials.sidebar')




  @yield('content')


@include('partials.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('adminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminLTE/dist/js/adminlte.min.js')}}"></script>
@yield('js')
</body>
</html>
