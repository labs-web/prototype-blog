{{-- Ce fichier est maintenu par ESSARRAJ Fouad --}}

<li class="nav-item has-treeview {{ Request::is('PkgProfile*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link nav-link {{ Request::is('PkgProfile*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-table"></i>
        <p>
            PkgProfile
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('tags.index') }}" class="nav-link {{ Request::is('PkgProfile/tags') ? 'active' : '' }}">
                <i class="nav-icon fas fa-table"></i>
                <p>Tags</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('PkgProfile/users') ? 'active' : '' }}">
                <i class="nav-icon fas fa-table"></i>
                <p>Users</p>
            </a>
        </li>
    </ul>
</li>


