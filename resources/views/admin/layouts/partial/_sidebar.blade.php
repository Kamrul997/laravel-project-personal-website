<div class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="/admin/dashboard" class="">
                        <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">Dashboard </span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/user/*') ? 'active' : '' }}">
                    <a href="/admin/user/list" class="">
                        <span class="nav-icon uil uil-users-alt"></span>
                        <span class="menu-text">User</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/instance/*') ? 'active' : '' }}">
                    <a href="/admin/instance/list" class="">
                        <span class="nav-icon uil uil-books"></span>
                        <span class="menu-text">Instance</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/guest-user/*') ? 'active' : '' }}">
                    <a href="/admin/guest-user/list" class="">
                        <span class="nav-icon uil uil-database"></span>
                        <span class="menu-text">Guest</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/scan/*') ? 'active' : '' }}">
                    <a href="#" class="">
                        <span class="nav-icon uil uil-credit-card-search"></span>
                        <span class="menu-text">Scan QR</span>
                    </a>
                </li>
                <li class="has-child
                {{ request()->is('admin/role/*') ? 'open' : '' }}
                {{ request()->is('admin/permission/*') ? 'open' : '' }}
                ">
                    <a href="#" class="
                    {{ request()->is('admin/role/*') ? 'active' : '' }}
                    {{ request()->is('admin/permission/*') ? 'active' : '' }}
                    ">
                        <span class="nav-icon uil uil-setting"></span>
                        <span class="menu-text">Settings</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li class="nav-item {{ request()->is('admin/role/*') ? 'active' : '' }}">
                            <a href="#" class="nav-link {{ request()->is('admin/role/*') ? 'active' : '' }} ">Role</a>
                        </li>
                        <li class="nav-item {{ request()->is('admin/permission/*') ? 'active' : '' }}">
                            <a href="#" class="nav-link {{ request()->is('admin/permission/*') ? 'active' : '' }}">Permission</a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="has-child">
                    <a href="#" class="">
                        <span class="nav-icon uil uil-window-section"></span>
                        <span class="menu-text">Theme Settings</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li class="l_sidebar">
                            <a href="#" data-layout="light">Light Mode</a>
                        </li>
                        <li class="l_sidebar">
                            <a href="#" data-layout="dark">Dark Mode</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
