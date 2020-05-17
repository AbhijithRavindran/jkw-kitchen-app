<!DOCTYPE html>
<html lang="en">
  @include('layouts.partials.admin.head')
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
        @include('layouts.partials.admin.nav')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        @include('layouts.partials.admin.settings_panel')
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('layouts.partials.admin.side_nav')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
            @include('layouts.partials.admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('layouts.partials.admin.scripts_bottom')
    <!-- Custom js for this page -->
    <script  src="/dashboard/assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>