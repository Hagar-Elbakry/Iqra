<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/dashboard/images/favicon.png')}}" />
</head>
<body>

<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <x-admin-sidebar/>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <x-admin-nav/>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                {{$slot}}
            </div>
                <x-admin-footer/>
        </div>
    </div>
</div>

<script src="{{asset('assets/dashboard/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('assets/dashboard/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/dashboard/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{asset('assets/dashboard/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('assets/dashboard/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('assets/dashboard/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets/dashboard/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/dashboard/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/dashboard/js/misc.js')}}"></script>
<script src="{{asset('assets/dashboard/js/settings.js')}}"></script>
<script src="{{asset('assets/dashboard/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('assets/dashboard/js/dashboard.js')}}"></script>
<!-- End custom js for this page -->
</body>
</html>
