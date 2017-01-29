<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Property Admin Panel | @yield('title')</title>
  @include('Layouts.admin_partials.headlinks')
  @yield('header')
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    @include('Layouts.admin_partials.header')
    @include('Layouts.admin_partials.sidebar')
      <div class="content-wrapper">
        @yield('content')
      </div>
    @include('Layouts.admin_partials.footer')
    @include('Layouts.admin_partials.controlesidebar')
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
    @include('Layouts.admin_partials.script')
        @yield('footer')
</body>
</html>
