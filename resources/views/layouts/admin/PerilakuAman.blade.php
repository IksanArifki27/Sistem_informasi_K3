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
                    <h1 class="h3 mb-4 text-gray-800">Perilaku Aman Menurut K3</h1>

                    <div class="row">


                            <!-- Brand Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Meningkatkan kesadaran keamanan, kesehatan, kerja (safety)</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="http://www.srssafetyndo.com/assets/img/artikel/16bd01b31c8e9a647b74efa5a6b10f41.jpg" alt="...">
                                    </div>
                                    <p>Syarat-syarat Penerapan K3 (Keselamatan dan Kesehatan Kerja) di tempat kerja tertuang dalam Undang-Undang No 1 Tahun 1970 tentang Keselamatan Kerja pasal 3 (tiga). Pada pasal tersebut disebutkan 18 (delapan belas) syarat penerapan keselamatan kerja di tempat kerja di antaranya sebagai berikut :</p>
                                    <p>1. Mencegah & mengurangi kecelakaan kerja.</p>
                                    <p>2. Mencegah, mengurangi, & memadamkan kebakaran.</p>
                                    <p>3. Mencegah & mengurangi bahaya peledakan.</p>
                                    <p>4. Memberi jalur evakuasi keadaan darurat.</p>
                                    <p>5. Memberi P3K Kecelakaan Kerja.</p>
                                    <p>6. Memberi APD (Alat Pelindung Diri) pada tenaga kerja.</p>
                                    <p>7. Mencegah & mengendalikan timbulnya penyebaran suhu, kelembaban, debu, kotoran, asap, uap, gas, radiasi, kebisingan & getaran.</p>
                                    <p>8. Memberi P3K Kecelakaan Kerja.</p>
                                    <p>9. Memberi P3K Kecelakaan Kerja.</p>
                                    <p>10. Memberi P3K Kecelakaan Kerja.</p>
                                    <p>11. Memberi P3K Kecelakaan Kerja.</p>
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