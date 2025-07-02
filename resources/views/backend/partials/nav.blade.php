<div class="nav">
    <div class="sb-sidenav-menu-heading">Core</div>
    <a class="nav-link" href="{{ route('admin.dashboard')}}">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        Dashboard
    </a>
    <div class="sb-sidenav-menu-heading">Interface</div>
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        Adminitration
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="{{ route('admin.academicSetup')}}">Acamedic Setup</a>
        </nav>
    </div>



    <div class="sb-sidenav-menu-heading">Addons</div>
    <a class="nav-link" href="{{ route('admin.users.index')}}">
        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
        Users
    </a>
    <a class="nav-link" href="{{ route('admin.roles.index')}}">
        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
        Roles
    </a>

    <a class="nav-link" href="{{ route('admin.permissions.index')}}">
        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
        Permissions
    </a>

    <a class="nav-link" href="{{ route('admin.settings.index')}}">
        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
        Settings
    </a>

</div>