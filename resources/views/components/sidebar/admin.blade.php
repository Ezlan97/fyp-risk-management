<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon">
            <img class="mb-6" src="{{ asset('images/logo.png') }}" alt="" width="45" height="50">
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>   
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Heading -->
    <div class="sidebar-heading mt-3">
        Jabatan
    </div>
    
    <!-- Manage Penerima -->
    <li class="nav-item {{ Route::current()->getName() == 'admin.manage.department' ? 'active' : '' }}"">
        <a class="nav-link" href="{{ route('admin.manage.department') }}">
            <i class="fas fa-building"></i>
            <span>Urus Jabatan</span>
        </a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Heading -->
    <div class="sidebar-heading">
        Operator
    </div>
    
    <!-- Manage Penerima -->
    <li class="nav-item {{ Route::current()->getName() == 'admin.manage.operator' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.manage.operator') }}">
            <i class="fas fa-users"></i>
            <span>Urus Operator</span>
        </a>
    </li>
    
    <!-- Heading -->
    <div class="sidebar-heading mt-3">
        Risiko
    </div>
    
    <!-- Manage Penerima -->
    <li class="nav-item {{ Route::current()->getName() == 'admin.manage.risk' ? 'active' : '' }}"">
        <a class="nav-link" href="{{ route('admin.manage.risk') }}">
            <i class="fas fa-exclamation-circle"></i>
            <span>Urus Risiko</span>
        </a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
</ul>
<!-- End of Sidebar -->