<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center toggled" href="{{ route('operator.dashboard') }}">
      <div class="sidebar-brand-icon">
        <img class="mb-6" src="{{ asset('images/logo.png') }}" alt="" width="45" height="55">
      </div>
      <div class="sidebar-brand-text mx-3">Operator</div>   
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Heading -->
    <div class="sidebar-heading mt-3">
      Risk
    </div>

    <!-- Manage Penerima -->
    <li class="nav-item {{ Route::current()->getName() == 'operator.manage.risk' ? 'active' : '' }}"">
      <a class="nav-link" href="{{ route('operator.manage.risk') }}">
        <i class="fas fa-exclamation-circle"></i>
        <span>Urus Risk</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->