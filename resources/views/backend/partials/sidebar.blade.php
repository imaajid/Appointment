<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{url('/')}}" class="sidebar-brand">
            Appointments.<span>PK</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>   
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
           
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="link-icon" data-feather="plus-square"></i>
                    <span class="link-title">Appointments</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Patients</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/doctor_details') }}" class="nav-link">
                    <i class="link-icon" data-feather="heart"></i>
                    <span class="link-title">Doctors</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/services') }}" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Services</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/specializations') }}" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Specialization</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/categories') }}" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Services Categories</span>
                </a>
            </li>
            <li class="nav-item nav-category">Manage</li>
            <li class="nav-item">
                <a href="{{ url('/admin/roles') }}" class="nav-link">
                    <i class="link-icon" data-feather="shield"></i>
                    <span class="link-title">Roles</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/permissions') }}" class="nav-link">
                    <i class="link-icon" data-feather="unlock"></i>
                    <span class="link-title">Permissions</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/users') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Users</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted">Sidebar:</h6>
        <div class="form-group border-bottom">
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                           value="sidebar-light" checked>
                    Light
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                           value="sidebar-dark">
                    Dark
                </label>
            </div>
        </div>
    </div>
</nav>
