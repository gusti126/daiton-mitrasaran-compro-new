<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Admin</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Daiton Mitrasarana</a>
        </div>
        <ul class="sidebar-menu">
            <li class="  {{ request()->is('admin') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('livewire-dashboard') }}">
                    <i class="fas fa-fire"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="  {{ request()->is('admin/user*') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('livewire-user') }}">
                    <i class="fas fa-user"></i>
                    <span>User</span></a>
            </li>
            <li class="  {{ request()->is('admin/artikel*') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('admin-livewire-artikel') }}"><i
                        class="fas fa-book-reader"></i>
                    <span>Artikel</span></a>
            </li>
            <li class="  {{ request()->is('admin/pesan*') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('livewire-pesan') }}">
                    <i class="fas fa-comments"></i>
                    <span>Pesan masuk</span></a>
            </li>
            <li class="nav-item dropdown {{ request()->is('admin/webmaster*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown "><i class="fas fa-atom"></i><span>Web Master</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link {{ request()->is('admin/webmaster/home') ? 'text-primary' : '' }}"
                            href="{{ route('webmaster-home') }}">Page Home</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('admin/webmaster/about') ? 'text-primary' : '' }}"
                            href="{{ route('webmaster-about') }}">Page About</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('admin/webmaster/kontak') ? 'text-primary' : '' }}"
                            href="{{ route('webmaster-kontak') }}">Page Kontak</a>
                    </li>
                </ul>
            </li>
        </ul>

    </aside>
</div>
