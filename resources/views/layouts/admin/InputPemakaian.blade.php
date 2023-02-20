
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inputan Isi P3K</title>
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
                            <h1 class="h4 text-gray-900 mt-3 mb-4">Form Pemakaian Barang di Kotak P3K</h1>
                        </div>
                        <div class="card-body">
                            <form class="user">
                                <!-- NAMA USER TEXT BUTTON -->
                                <label for="exampleFormControlSelect1">Nama User </label>
                                <div class="input-group flex-nowrap">
                                    
                                    <span class="input-group-text" id="addon-wrapping">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/></svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="example : tika" aria-label="Nama" aria-describedby="addon-wrapping">
                                </div><br>

                                <!-- DEPARTEMEN TEXT BUTTON -->
                                <label for="exampleFormControlSelect1">Departemen </label>
                                <div class="input-group flex-nowrap">
                                     
                                     <span class="input-group-text" id="addon-wrapping">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-buildings-fill" viewBox="0 0 16 16">
                                            <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z"/>
                                          </svg>
                                     </span>
                                     <input type="text" class="form-control" placeholder="example :  IT" aria-label="Nama" aria-describedby="addon-wrapping">
                                </div><br>

                                <!-- POSISI TEXT BUTTON -->
                                <label for="exampleFormControlSelect1">Jabatan</label>
                                <div class="input-group flex-nowrap">
                                    
                                    <span class="input-group-text" id="addon-wrapping">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-microsoft-teams" viewBox="0 0 16 16">
                                            <path d="M9.186 4.797a2.42 2.42 0 1 0-2.86-2.448h1.178c.929 0 1.682.753 1.682 1.682v.766Zm-4.295 7.738h2.613c.929 0 1.682-.753 1.682-1.682V5.58h2.783a.7.7 0 0 1 .682.716v4.294a4.197 4.197 0 0 1-4.093 4.293c-1.618-.04-3-.99-3.667-2.35Zm10.737-9.372a1.674 1.674 0 1 1-3.349 0 1.674 1.674 0 0 1 3.349 0Zm-2.238 9.488c-.04 0-.08 0-.12-.002a5.19 5.19 0 0 0 .381-2.07V6.306a1.692 1.692 0 0 0-.15-.725h1.792c.39 0 .707.317.707.707v3.765a2.598 2.598 0 0 1-2.598 2.598h-.013Z"/>
                                            <path d="M.682 3.349h6.822c.377 0 .682.305.682.682v6.822a.682.682 0 0 1-.682.682H.682A.682.682 0 0 1 0 10.853V4.03c0-.377.305-.682.682-.682Zm5.206 2.596v-.72h-3.59v.72h1.357V9.66h.87V5.945h1.363Z"/>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="example :  Asissten Manager" aria-label="Nama" aria-describedby="addon-wrapping">
                                </div><br>

                                <!-- KALENDER TEXT BUTTON -->

                               <!-- NAMA BARANG DROPDOWN -->
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Barang </label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Hansaplast</option>
                                      <option>Kapas</option>
                                      <option>Kassa</option>
                                      <option>Perban</option>
                                      <option>Solasi</option>
                                    </select>
                                </div>

                              <label for="exampleFormControlSelect1">Jumlah barang </label>
                                <div class="input-group flex-nowrap">
                                     
                                     <span class="input-group-text" id="addon-wrapping">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-buildings-fill" viewBox="0 0 16 16">
                                            <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z"/>
                                          </svg>
                                     </span>
                                     <input type="number" class="form-control" placeholder="example :  5" aria-label="Nama" aria-describedby="addon-wrapping">
                                </div><br>

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