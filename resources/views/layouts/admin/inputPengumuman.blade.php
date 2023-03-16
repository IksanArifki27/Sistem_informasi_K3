
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Input Pengumuman Terkini</title>
    @include('layouts.inc.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
      @include('layouts.inc.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
            @include('layouts.inc.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Penginputan</h1>

                    <div class="card shadow mb-4">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mt-3 mb-4">Input Pengumuman Terkini</h1>
                        </div>
                        <div class="card-body">
                            <form class="user" method="POST" action="/postPengumuman" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control" name="judul" id="InputJudul"
                                        placeholder="Judul">
                                </div>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" id="InputContent" name="konten"
                                        placeholder="Isi Konten"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="customFile">Masukkan Foto</label>
                                    <input type="file" accept="image/*" class="form-control-file"  name="foto">
                                </div>
                                <button class="btn btn-success" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
            <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts.inc.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('layouts.inc.logout')

    <!-- Bootstrap core JavaScript-->
    @include('layouts.inc.script')

</body>

</html>