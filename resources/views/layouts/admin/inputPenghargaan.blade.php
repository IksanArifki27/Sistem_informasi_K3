<!DOCTYPE html>
<html lang="en">

<head>
    <title>Input Penghargaan</title>
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

                    <div class="card shadow mb-4">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mt-3 mb-4">Form Input Penghargaan</h1>
                        </div>
                        <div class="card-body">
                            <form class="user">

                                <!-- JUDUL TEXT BUTTON -->
                                <label for="exampleFormControlSelect1">Judul Penghargaan </label>
                                <div class="input-group flex-nowrap">
                                    
                                    <span class="input-group-text" id="addon-wrapping">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                                            <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-11zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56V3.224zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z"/>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="example : Meraih TOP 10 " aria-label="Nama" aria-describedby="addon-wrapping">
                                </div><br>

                               <!-- ALASAN -->
                                <label for="exampleFormControlSelect1">Keterangan </label>
                                <div class="input-group flex-nowrap">
                                     
                                     <span class="input-group-text" id="addon-wrapping">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                            <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                                          </svg>
                                     </span>
                                     <textarea type="text" class="form-control" id="InputContent"
                                        placeholder="Isi Konten">
                                    </textarea>
                                </div><br>


                                <!-- MASUKAN GAMBAR -->
                                <div class="form-group">
                                    <label for="customFile">Masukkan Foto</label>
                                    <input type="file" accept="image/*" class="form-control-file" id="customFile">
                                </div>

                                <!-- BUTTON SIMPAN -->
                                <div class="d-grid ">
                                    <a href="#" class="btn btn-success active" role="button" data-bs-toggle="button" aria-pressed="true">SIMPAN DATA</a>
                                
                                </div>
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