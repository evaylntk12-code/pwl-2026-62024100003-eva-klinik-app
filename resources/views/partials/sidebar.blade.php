<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}" class="brand-link">
            <img src="{{ asset('adminLTE/assets/img/AdminLTELogo.png') }}" alt="Logo" class="brand-image opacity-75 shadow" />
            <span class="brand-text fw-light">Sistem Informasi Klinik</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2" aria-label="Main navigation">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" id="navigation">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link @if(request()->routeIs('dashboard')) active @endif">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pasien.index') }}" class="nav-link @if(request()->routeIs('pasien.*')) active @endif">
                        <i class="nav-icon bi bi-table"></i>
                        <p>Pasien</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dokter.index') }}" class="nav-link @if(request()->routeIs('dokter.*')) active @endif">
                        <i class="nav-icon bi bi-table"></i>
                        <p>Dokter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('poli.index') }}" class="nav-link @if(request()->routeIs('poli.*')) active @endif">
                        <i class="nav-icon bi bi-table"></i>
                        <p>Poli</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('jadwal.index') }}" class="nav-link @if(request()->routeIs('jadwal.*')) active @endif">
                        <i class="nav-icon bi bi-table"></i>
                        <p>Jadwal</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>