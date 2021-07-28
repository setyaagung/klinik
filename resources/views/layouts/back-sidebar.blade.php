<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('images/logo.jpeg')}}" alt="AdminLTE Logo" class="img-fluid" style="width: 80px">
        <span class="brand-text font-weight-light"><b>SUMBER MEDIKA</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard')}}" class="nav-link {{ (request()->segment(1) == 'dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ (request()->segment(1) == 'doctor') ? 'active' : '' }} {{ (request()->segment(1) == 'pasien') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Master Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('doctor.index')}}" class="nav-link {{ (request()->segment(1) == 'doctor') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pasien.index')}}" class="nav-link {{ (request()->segment(1) == 'pasien') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pasien</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('covid.index')}}" class="nav-link {{ (request()->segment(1) == 'covid') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Pemeriksaan Covid</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('keterangan-dokter.index')}}" class="nav-link {{ (request()->segment(1) == 'keterangan-dokter') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Surat Keterangan Dokter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index')}}" class="nav-link {{ (request()->segment(1) == 'user') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Kelola Pengguna</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
