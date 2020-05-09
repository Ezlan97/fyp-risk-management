<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ Auth::user()->isAdmin() ? route('admin.dashboard') : route('operator.dashboard') }}">
      <div class="sidebar-brand-icon">
        <img class="mb-6" src="{{ asset('images/hubbul-quran.png') }}" alt="" width="40" height="55">
      </div>
      @if (Auth::user()->isAdmin())
      <div class="sidebar-brand-text mx-3">Admin</div>
      @else
      <div class="sidebar-brand-text mx-3">Operator</div>
      @endif      
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Route::current()->getName() == 'admin.dashboard' ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    @if (!Auth::user()->isAdmin())
            
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Penerima
    </div>

    <!-- Manage Penerima -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('operator.manage.penerima') }}">
        <i class="fas fa-people-arrows"></i>
        <span>Urus Penerima</span></a>
    </li>

    @endif
    
    @if (Auth::user()->isAdmin())        

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Penerima
    </div>

    <!-- Manage Penerima -->
    <li class="nav-item">
      <a class="nav-link" href="tables.html">
        <i class="fas fa-people-arrows"></i>
        <span>Urus Penerima</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Operator
    </div>

    <!-- Manage Operator -->
    <li class="nav-item {{ Route::current()->getName() == 'admin.manage.operator' ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('admin.manage.operator') }}">
        <i class="fas fa-user-tie"></i>
        <span>Urus Operator</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Pusat Agihan
    </div>

    <!-- Manage Branch -->
    <li class="nav-item {{ Route::current()->getName() == 'admin.manage.cawangan' ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('admin.manage.branch') }}">
        <i class="fas fa-building"></i>
        <span>Urus Pusat Agihan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    @endif

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->