<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Perilaku Aman Menurut K3</title>
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
                    <h1 class="h3 mb-4 text-gray-800" style="text-align: center;"><b>Perilaku Aman Menurut K3</b></h1>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Apa itu perilaku aman K3 ? </h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 50rem;"
                                            src="{{asset('img/safety.jpg')}}" alt="...">
                                    </div>
                                    <p style="text-align: justify;">Menurut Zin, dkk (2012) <b>perilaku keselamatan</b> adalah perilaku yang mendukung praktek dan aktivitas keselamatan dalam bekerja, dimana kedua hal tersebut harus diterima oleh karyawan sebagai persayaratan kerja untuk menghindari kecelakaan dalam bekerja.</p>
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                         <div class="col-xl-6 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Apa itu K3 ??</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" width="400"
                                            src="{{asset('img/k3.png')}}" 
                                        alt="logok3">
                                    </div>
                                    <div style="text-align: justify;">
                                        Menurut Peraturan Pemerintah Nomor 50 Tahun 2012, <b>Pengertian Keselamatan Dan Kesehatan Kerja Atau K3</b> Adalah Segala Kegiatan Untuk Menjamin Dan  Melindungi  Keselamatan  Dan  Kesehatan  Tenaga Kerja Melalui Upaya Pencegahan Kecelakaan Kerja Dan Penyakit Akibat Kerja.
                                        <br><br>
                                        <b>Tujuan K3 secara umum</b>, <br>
                                        1. Melindungi dan memelihara kesehatan dan keselamatan tenaga kerja sehingga kinerjanya dapat meningkat.<br>
                                        2. Menjaga dan memastikan keselamatan dan kesehatan semua orang yang berada di lingkungan kerja.<br>
                                        3. Memastikan sumber produksi terpelihara dengan baik dan dapat digunakan secara aman dan efisien.




                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                            

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