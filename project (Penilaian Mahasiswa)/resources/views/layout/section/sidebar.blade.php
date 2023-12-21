<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        {{-- <img src="{{ asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8"> --}}
        <span class="brand-text font-weight-bold font-weight-light">Penilaian Mahasiswa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link @yield('dashboard' ?? '')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="{{ route('jurusan.index') }}" class="nav-link @yield('jurusan' ?? '')">
                        <i class="nav-icon fas fa-bookmark"></i>
                        <p>Data Jurusan</p>
                    </a>
                </li> --}}
                @if ( session()->get('role') == 'admin')
                    <li class="nav-item">
                        <a href="{{ route('matakuliah.index') }}" class="nav-link @yield('matkul' ?? '')">
                            <i class="nav-icon fas fa-bookmark"></i>
                            <p>Data Matakuliah</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dosen.index') }}" class="nav-link @yield('dosen' ?? '')">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Data Dosen</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('mahasiswa.index') }}" class="nav-link @yield('mahasiswa' ?? '')">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Data Mahasiswa</p>
                        </a>
                    </li>
                @elseif( session()->get('role') == 'dosen')
                    <li class="nav-item">
                        <a href="{{ route('nilai.index') }}" class="nav-link @yield('nilai' ?? '')">
                            <i class="nav-icon fas fa-award"></i>
                            <p>Data Nilai Mahasiswa</p>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
