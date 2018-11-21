@include('layouts.adminincludes._head')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts.adminincludes._nav')
    <!-- partial -->
    @yield('content')
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  @include('layouts.adminincludes._scripts')
  <!-- End custom js for this page-->
</body>

</html>

