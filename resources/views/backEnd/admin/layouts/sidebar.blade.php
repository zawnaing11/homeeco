<div class="sidebar">
<nav class="sidebar-nav">
  <ul class="nav">
    <li class="nav-title">General</li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="nav-icon icon-speedometer"></i> Dashboard
      </a>
    </li>
    <li class="nav-title">Components</li>
    <li class="nav-item nav-dropdown">
      <a class="nav-link nav-dropdown-toggle" href="">
        <i class="nav-icon icon-list"></i> Authorized</a>
      <ul class="nav-dropdown-items">
        <li class="nav-item">
          <a class="nav-link" href="base/breadcrumb.html">
            <i class="nav-icon icon-puzzle"></i> Permissions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.role.index') }}">
            <i class="nav-icon icon-puzzle"></i> Roles</a>
        </li>
      </ul>
    </li>
    <li class="nav-item nav-dropdown">
      <a class="nav-link nav-dropdown-toggle" href="">
        <i class="nav-icon icon-list"></i> Master</a>
      <ul class="nav-dropdown-items">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.master.index') }}">
            <i class="nav-icon icon-puzzle"></i> Index</a>
        </li>
      </ul>
    </li>
    <li class="nav-item nav-dropdown">
      <a class="nav-link" href="{{ route('admin.number.index') }}">
        <i class="nav-icon icon-list"></i>Input Number
      </a>
    </li>
    <li class="nav-item nav-dropdown">
      <a class="nav-link" href="{{ route('admin.show.product') }}">
        <i class="nav-icon icon-list"></i>Product List
      </a>
    </li>
  </ul>
</nav>
<button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>