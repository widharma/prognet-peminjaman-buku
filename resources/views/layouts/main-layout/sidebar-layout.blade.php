<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-2">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-decoration-none mt-1">
        {{-- <img src="{{asset('base-template/dist/img/logo-01.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light fw-bold">
           <div class="h6 mb-0 text-center">(SPB) <br>Sistem Peminjaman Buku</div>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-4">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li id="side-pengaturan-akun" class="user-panel nav-item">
                    <a href="#" class="nav-link mb-2 p-2">
                        <img src="{{asset('base-template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2 mr-2 mb-1" alt="User Image">
                        <p>
                            Krama Bali
                            <i class="fas fa-angle-left right mt-2"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ml-3">
                            <a id="side-konfirmasi-sulinggih" href="#" class="nav-link p-2">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item ml-3">
                            <a id="side-konfirmasi-sulinggih" href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-header font-weight-bold pl-2">DASHBOARD</li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link p-2">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-header font-weight-bold pl-2">MENU UTAMA</li>
                <li id="side-upacara" class="nav-item">
                    <a href="#" class="nav-link p-2 ">
                        <i class="fa bi-brightness-high-fill nav-icon m-0"></i>
                        <p>
                            Manajemen Buku
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ml-3">
                            <a id="side-kabupaten" href="#" class="nav-link p-2">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Upacaraku</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ml-3">
                            <a id="side-tambah-upacara" href="#" class="nav-link p-2">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Upacaraku</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li id="side-reservasi" class="nav-item">
                    <a href="#" class="nav-link p-2">
                        <i class="fas fa-calendar-alt nav-icon m-0"></i>
                        <p >
                            Transaksi Peminjaman
                            <i class="fas fa-angle-left right ml-lg-4"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ml-3">
                            <a id="side-data-reservasi" href="#" class="nav-link p-2">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Reservasi</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ml-3">
                            <a id="side-tambah-reservasi" href="#" class="nav-link p-2">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Reservasi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header font-weight-bold pl-2">LAPORAN</li>
                <li id="side-upacara" class="nav-item">
                    <a href="#" class="nav-link p-2 ">
                        <i class="fa bi-brightness-high-fill nav-icon m-0"></i>
                        <p>
                            Laporan Peminjaman
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ml-3">
                            <a id="side-kabupaten" href="#" class="nav-link p-2">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Upacaraku</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ml-3">
                            <a id="side-tambah-upacara" href="#" class="nav-link p-2">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Upacaraku</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>