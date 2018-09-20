<div class="sidebar">
<nav class="sidebar-nav">
  <ul class="nav">
    <li class="nav-title">General</li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home') }}">
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
          <a class="nav-link" href="{{ route('admin.roles') }}">
            <i class="nav-icon icon-puzzle"></i> Roles</a>
        </li>
      </ul>
    </li>
    <li class="nav-item nav-dropdown">
      <a class="nav-link nav-dropdown-toggle" href="">
        <i class="nav-icon icon-list"></i> Users</a>
      <ul class="nav-dropdown-items">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.masters') }}">
            <i class="nav-icon icon-puzzle"></i> Master</a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
<button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>