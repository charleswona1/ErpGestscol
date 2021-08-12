<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>School Engine</title>
        <link rel="stylesheet" href="{{ asset('assets1/vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets1/vendors/css/vendor.bundle.base.css') }}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- Layout styles -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('assets1/vendors/flag-icon-css/css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets1/vendors/jvectormap/jquery-jvectormap.css') }}">
        <!-- End plugin css for this page -->
        <!-- Layout styles -->
        @yield('style')
        <link rel="stylesheet" href="{{ asset('assets1/css/demo/style.css') }}">
        <!-- End layout styles -->
      
        <link rel="shortcut icon" href="{{ asset('assets1/images/favicon.png') }}" />
        </head>
<body>
<script src="{{ asset('assets1/js/preloader.js') }}"></script>

   <div  class="body-wrapper">
    @include('configuration.layouts.aside')
    <div class="main-wrapper mdc-drawer-app-content">
    @include('configuration.layouts.header')
    @yield('content')
    </div>


</div> 
</body>
<script src="{{ asset('assets1/js/preloader.js') }}"></script>

<script src="{{ asset('assets1/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{ asset('assets1/vendors/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('assets1/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('assets1/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('assets1/js/material.js') }}"></script>
<script src="{{ asset('assets1/js/misc.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('assets1/js/dashboard.js') }}"></script>

@yield('script')
</html>