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
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeringatan"
                    aria-expanded="true" aria-controls="collapsePeringatan">
                    <i class="fas fa-fw fa-exclamation-circle"></i>
                    <span>Peringatan</span>
                </a>
                <div id="collapsePeringatan" class="collapse" aria-labelledby="headingPeringatan"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="peringatanProduksi.html">Departemen Poduksi</a>
                        <a class="collapse-item" href="peringatanRnd.html">Departemen RND</a>
                        <a class="collapse-item" href="peringatanQa.html">Departemen QA</a>
                        <a class="collapse-item" href="peringatanQc.html">Departemen QC</a>
                        <a class="collapse-item" href="peringatanEnginer.html">Departemen Engineering</a>
                        <a class="collapse-item" href="peringatanCivil.html">Departemen Civil</a>
                        <a class="collapse-item" href="peringatanIt.html">Departemen IT</a>
                        <a class="collapse-item" href="peringatanAccounting.html">Departemen Accounting</a>
                        <a class="collapse-item" href="peringatanFinance.html">Departemen Finance</a>
                        <a class="collapse-item" href="peringatanHrd.html">Departemen HRD</a>
                        <a class="collapse-item" href="peringatanK3.html">Departemen K3</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Awards
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
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
                    <a class="nav-link" href="/editPengumuman">
                        <i class="fas fa-fw fa-eraser"></i>
                        <span>Edit Pengumuman Terkini</span></a>
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