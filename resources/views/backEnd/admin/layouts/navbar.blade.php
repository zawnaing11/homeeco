<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
      <img class="navbar-brand-full" src="{{ asset('homeeco/backEnd/admin/component/img/brand/logo.svg') }}" width="89" height="25" alt="CoreUI Logo">
      <img class="navbar-brand-minimized" src="{{ asset('homeeco/backEnd/admin/component/img/brand/sygnet.svg') }}" width="30" height="30" alt="CoreUI Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img class="img-avatar" src="{{ asset('homeeco/backEnd/admin/component/img/avatars/6.jpg') }}" alt="admin@bootstrapmaster.com">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>
          <a class="dropdown-item" href="#">
            <i class="fa fa-bell-o"></i> Updates
            <span class="badge badge-info">42</span>
          </a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-envelope-o"></i> Messages
            <span class="badge badge-success">42</span>
          </a>
          <div class="dropdown-header text-center">
            <strong>Settings</strong>
          </div>
          <a class="dropdown-item" href="#">
            <i class="fa fa-user"></i> Profile</a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-wrench"></i> Settings</a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-usd"></i> Payments
            <span class="badge badge-secondary">42</span>
          </a>
          <a class="dropdown-item" href="#">
            <i class="fa fa-file"></i> Projects
            <span class="badge badge-primary">42</span>
          </a>
          <div class="divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}">
            <i class="fa fa-lock"></i> Logout</a>
        </div>
      </li>
    </ul>
  </header>