

<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'AMTECH') }}</title>


<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  @yield('head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
@include('commons.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('commons.navigation')

@yield('content')

  <!-- Main Footer -->
  
  @include('commons.footer')

  <!-- Scripts -->
<script src="{{ asset('js/app.js') }}" ></script>

  @yield('scripts')
</div>
<!-- ./wrapper -->

</body>
</html>
