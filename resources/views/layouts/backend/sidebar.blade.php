<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Utama</li>

        <li class="sidebar-item {{ request()->is('v1') ? 'active' : '' }}">
            <a href="{{ route('v1') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-title">Kelola Antrian</li>

        <li class="sidebar-item {{ request()->is('v1/antrian*') ? 'active' : '' }}">
            <a href="{{ route('v1.antrian') }}" class='sidebar-link'>
                <i class="bi bi-door-open-fill"></i>
                <span>Mulai Antrian</span>
            </a>
        </li>

        <li class="sidebar-title">Configurasi</li>

        <li class="sidebar-item {{ request()->is('v1/loket*') ? 'active' : '' }}">
            <a href="{{ route('v1.loket') }}" class='sidebar-link'>
                <i class="bi bi-ui-checks-grid"></i>
                <span>Kelola Loket</span>
            </a>
        </li>

    </ul>
</div>
