<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Dashboard</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/package-list') }}" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Packages</span>
        </a>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/order-list') }}" >
            <i class="fas fa-fw fa-wrench"></i>
            <span>Orders</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Users
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/customers-list') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Customers</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/inspector-list') }}" >
            <i class="fas fa-fw fa-folder"></i>
            <span>Inspectors</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-folder"></i>
            <span>Assign Orders to Inspectors</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/category-list') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Add Categories</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-folder"></i>
            <span>Inspection Questions</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    <!-- Sidebar Message -->
    {{-- <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}
</ul>
<!-- End of Sidebar -->
