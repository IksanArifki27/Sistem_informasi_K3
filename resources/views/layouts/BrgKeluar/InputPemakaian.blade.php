
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
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                             </div>     
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                             </div>     
                        @endif
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mt-3 mb-4"> <b> Form Pemakaian Barang di Kotak P3K </b></h1>
                        </div>
                        <div class="card-body">
                           <form class="user" method="POST" action="/postKeluarStok"    >
                                  <!-- Lokasi TEXT BUTTON -->
                                  @csrf
                                      <label for="exampleFormControlSelect1">Nama Pengguna </label>
                                <div class="input-group flex-nowrap">
                                     
                                     <span class="input-group-text" id="addon-wrapping">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                     </span>
                                     <input type="text" class="form-control" placeholder="example : yanti" aria-label="Nama" aria-describedby="addon-wrapping" name="nama">
                                </div><br>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Lokasi </label>
                                    <select class="form-control selectLokasiKeluar " id="exampleFormControlSelect1" name="lokasi_id" >
                                    <option hidden value="" >--Pilih Lokasi--</option> 
                                    @foreach ($lokasi as $lok)
                                    <option value="{{$lok->id}}">{{$lok->nama}} </option>
                                    @endforeach
                                    </select>
                                </div>
                                <br>
                                <!-- NAMA USER TEXT BUTTON -->
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Barang </label>
                                    <select class="form-control selectBarangKeluar" id="exampleFormControlSelect1 " name="barang_id">
                                      <option hidden value="" >--Pilih Barang --</option>
                                    </select>
                                </div>

                              
                                <br>

                          
                              <label for="exampleFormControlSelect1">Jumlah barang </label>
                                <div class="input-group flex-nowrap">
                                     
                                     <span class="input-group-text" id="addon-wrapping">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-buildings-fill" viewBox="0 0 16 16">
                                            <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z"/>
                                          </svg>
                                     </span>
                                     <input type="number" class="form-control" placeholder="example :  5" aria-label="Nama" aria-describedby="addon-wrapping" name="jumlah_barang_keluar">
                                </div><br>

                                <!-- BUTTON SIMPAN -->
                                <div class="d-grid ">
                                   <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Ambil</button>
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