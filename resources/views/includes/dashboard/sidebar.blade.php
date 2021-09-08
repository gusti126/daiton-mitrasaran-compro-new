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
        </ul>

    </aside>
</div>
