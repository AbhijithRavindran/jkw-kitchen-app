<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

    @include('layouts.partials.admin.header_logo')
    
    <div class="navbar-menu-wrapper d-flex align-items-center">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      {{-- <ul class="navbar-nav">
        <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
        <li class="nav-item dropdown language-dropdown">
          <a class="nav-link px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <div class="d-inline-flex mr-0 mr-md-3">
              <div class="flag-icon-holder">
                <i class="flag-icon flag-icon-us"></i>
              </div>
            </div>
            <span class="profile-text font-weight-medium d-none d-md-block">English</span>
          </a>
          <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
            <a class="dropdown-item">
              <div class="flag-icon-holder">
                <i class="flag-icon flag-icon-us"></i>
              </div>English
            </a>
            <a class="dropdown-item">
              <div class="flag-icon-holder">
                <i class="flag-icon flag-icon-fr"></i>
              </div>French
            </a>
            <a class="dropdown-item">
              <div class="flag-icon-holder">
                <i class="flag-icon flag-icon-ae"></i>
              </div>Arabic
            </a>
            <a class="dropdown-item">
              <div class="flag-icon-holder">
                <i class="flag-icon flag-icon-ru"></i>
              </div>Russian
            </a>
          </div>
        </li>
      </ul> --}}
      {{-- <form class="ml-auto search-form d-none d-md-block" action="#">
        <div class="form-group">
          <input type="search" class="form-control" placeholder="Search Here">
        </div>
      </form> --}}
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-bell-outline"></i>
            <span class="count">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
            <a class="dropdown-item py-3">
              <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
              <span class="badge badge-pill badge-primary float-right">View all</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img  src="/dashboard/assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
              <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">Order #  JKW-112 </p>
                <p class="font-weight-light small-text"> Pizza 6'' | Order quantity: 2 </p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
          <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <img class="img-xs rounded-circle"  src="/dashboard/assets/images/a.png" alt="Profile image"> </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <div class="dropdown-header text-center">
              <img class="img-md rounded-circle"  src="/dashboard/assets/images/a.png" alt="Profile image">
              <p class="mb-1 mt-3 font-weight-semibold">{{ucfirst($user->name)}}</p>
              <p class="font-weight-light text-muted mb-0">{{$user->email}}</p>
            </div>
            <a class="dropdown-item" href="/logout"><i class="dropdown-item-icon mdi mdi-power text-primary"></i>Sign Out</a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>