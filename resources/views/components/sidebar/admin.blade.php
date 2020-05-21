<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon">
            <img class="mb-6" src="{{ asset('images/logo.png') }}" alt="" width="45" height="55">
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
    
    <!-- Manage Risiko -->
    {{-- <li class="nav-item {{ Route::current()->getName() == 'admin.manage.risk' ? 'active' : '' }}"">
        <a class="nav-link" href="{{ route('admin.manage.risk') }}">
            <i class="fas fa-exclamation-circle"></i>
            <span>Urus Risiko</span>
        </a>
    </li> --}}
    
    <!-- Urus Risiko -->
    <li class="nav-item {{ Route::current()->getName() == 'admin.manage.risk' ? 'active' : '' }}">
        <a class="nav-link {{ Route::current()->getName() == 'admin.manage.risk' ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseRisk" aria-expanded="true" aria-controls="collapseRisk">
            <i class="fas fa-fw fa-exclamation-circle"></i>
            <span>Risiko</span>
        </a>
        <div id="collapseRisk" class="collapse {{ Route::current()->getName() == 'admin.manage.risk' ? 'show' : '' }}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Status :</h6>
                <a class="collapse-item" href="{{ route('admin.manage.risk', 'Menunggu Kelulusan') }}">Menunggu Kelulusan</a>
                <a class="collapse-item" href="{{ route('admin.manage.risk', 'Lulus & Sedang Di Urus') }}">Lulus & Sedang Di Urus</a>
                <a class="collapse-item" href="{{ route('admin.manage.risk', 'Selesai') }}">Selesai</a>
            </div>
        </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
</ul>
<!-- End of Sidebar -->