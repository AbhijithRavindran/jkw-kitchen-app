<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="profile-image">
            <img class="img-xs rounded-circle"  src="/dashboard/assets/images/a.png" alt="profile image">
            <div class="dot-indicator bg-success"></div>
          </div>
          <div class="text-wrapper">
          <p class="profile-name">{{ucfirst($user->name)}}</p>
            <p class="designation">Order Manager</p>
          </div>
        </a>
      </li>
      <li class="nav-item nav-category">Application Menu</li>
      <li class="nav-item">
        <a class="nav-link" href="/admin">
          {{-- <i class="menu-icon typcn typcn-home"></i> --}}
          <i class="menu-icon fas fa-store"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Food-dropdown" aria-expanded="false" aria-controls="Food-dropdown">
          {{-- <i class="menu-icon typcn typcn-document-text"></i> --}}
          <i class="menu-icon fas fa-utensils"></i>
          <span class="menu-title">Manage Food Menu</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Food-dropdown">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
            <a class="nav-link" href="/admin/food_menu/list/{{"active"}}">Food Menu (Active only)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/food_menu/list/{{"all"}}">Food Menu (All)</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#orders-dropdown" aria-expanded="false" aria-controls="orders-dropdown">
          {{-- <i class="menu-icon typcn typcn-shopping-cart"></i> --}}
          <i class="menu-icon fas fa-shopping-cart"></i>
          <span class="menu-title">Manage Orders</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="orders-dropdown">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="/admin/order/list/new">New Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/order/list/ongoing">Ongoing Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/order/list/all">Completed Orders</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#payments-dropdown" aria-expanded="false" aria-controls="payments-dropdown">
          {{-- <i class="menu-icon typcn typcn-credit-card"></i> --}}
          <i class="menu-icon fas fa-utensils"></i>
          <span class="menu-title">Manage Payments</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="payments-dropdown">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="/admin/payment/index">Payments History</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Customers-dropdown" aria-expanded="false" aria-controls="Customers-dropdown">
          {{-- <i class="menu-icon typcn typcn-document-text"></i> --}}
          <i class="menu-icon fas fa-user-friends"></i>
          <span class="menu-title">Manage Customers</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Customers-dropdown">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="/admin/customer/index">Customer logs</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>