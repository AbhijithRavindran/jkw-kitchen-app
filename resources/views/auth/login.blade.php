<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.bootstrapdash.com/demo/star-admin-pro/src/demo_1/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 May 2020 21:05:09 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JKW Admin Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/dashboard/assets/icons/icons.css">
    {{-- <link rel="stylesheet"  href="/dashboard/assets/vendors/mdi/css/materialdesignicons.min.css"> --}}
    <link rel="stylesheet"  href="/dashboard/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet"  href="/dashboard/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet"  href="/dashboard/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet"  href="/dashboard/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet"  href="/dashboard/assets/css/shared/style.css">
    <!-- endinject -->
    <link rel="shortcut icon"  href="/dashboard/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper auth p-0 theme-two">
          <div class="row d-flex align-items-stretch">
            <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
              <div class="slide-content bg-1"> </div>
            </div>
            <div class="col-12 col-md-8 h-100 bg-white">
              <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
                <div class="nav-get-started">
                  {{-- <p>Don't have an account?</p>
                  <a class="btn get-started-btn" href="register-2.html">GET STARTED</a> --}}
                </div>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <h3 class="mr-auto">Hello! <span id="greeting"></span></h3>
                  <p class="mb-5 mr-auto">Enter your credentials below.</p>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="mdi mdi-account-outline"></i>
                        </span>
                      </div>
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="mdi mdi-lock-outline"></i>
                        </span>
                      </div>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn">SIGN IN</button>
                  </div>
                  <div class="wrapper mt-5 text-gray">
                    <p class="footer-text">Copyright © 2020 JKW Kitchen. </p>
                    <ul class="auth-footer text-gray">
                      {{-- <li>
                        <a href="#">Home</a>
                      </li> --}}
                      {{-- <li>
                        <a href="#"></a>
                      </li> --}}
                    </ul>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script  src="/dashboard/assets/js/custom/greeting.js"></script>
  </body>
</html>




