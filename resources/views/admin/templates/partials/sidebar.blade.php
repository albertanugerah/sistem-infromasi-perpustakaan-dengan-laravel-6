<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
        <span class="brand-text font-weight-light"><b>Per</b>pus</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-header">MAIN NAVIGATION</li>
                <li class="nav-item">
                    <a href="{{ route('admin.author.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Penulis</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.book.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Buku</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.borrow.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Peminjaman Buku</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.report.top-book') }}" class="nav-link">
                                <i class="fas fa-book nav-icon"></i>
                                <p>Buku Terlaris</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.report.top-user') }}" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>User Teraktif</p>
                            </a>
                        </li>
                    </ul>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
