     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-cog"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SIOKTIG</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/dashbord">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Keselamatan dan Kesehatan Kerja (K3)
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="/perilaku">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Perilaku Aman Menurut K3</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseP3k"
                    aria-expanded="true" aria-controls="collapseP3k">
                    <i class="fas fa-fw fa-plus-square"></i>
                    <span>Kotak P3K</span>
                </a>
                <div id="collapseP3k" class="collapse" aria-labelledby="headingP3k"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tentang Kotak P3K:</h6>
                        <a class="collapse-item" href="/isip3k">Isi Kotak P3K & Lokasinya</a>
                        <a class="collapse-item" href="/inputPemakaian">Input Pemakaian <br>Kotak P3K</a>
                        <a class="collapse-item" href="/diagram">Diagram Penggunaan <br>P3K</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Awards
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="/tabelPeringatan">
                    <i class="fas fa-fw"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg></i>
                    <span>Tabel Peringatan </span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/percapaian">
                    <i class="fas fa-fw fa-trophy"></i>
                    <span>Pencapaian K3</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
           
            @if (auth()->user()->level == "admin")
                    <div class="sidebar-heading">
                        Edit
                    </div>
                    
                <li class="nav-item">
                       <a class="nav-link" href="/inputPengumuman">
                           <i class="fas fa-fw fa-plus-square"></i>
                           <span>Tambah Pengumuman Terkini</span></a>
                </li>
                <li class="nav-item">
                       <a class="nav-link" href="/inputPenghargaan">
                           <i class="fas fa-fw fa-plus-square"></i>
                           <span>Tambah Penghargaan </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/editPengumuman">
                        <i class="fas fa-fw fa-eraser"></i>
                        <span>Edit Pengumuman Terkini</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/editPenghargaan">
                        <i class="fas fa-fw fa-eraser"></i>
                        <span>Edit Penghargaan</span></a>
                </li>
                <div class="sidebar-heading">
                    Buat User Baru
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="/register">
                        <i class="fas fa-fw fa-user-plus"></i>
                        <span>Tambah User</span></a>
                </li>
                @endif

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>