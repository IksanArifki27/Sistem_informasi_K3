
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Isi dan Lokasi P3K</title>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 mx-auto"> <b> Lokasi P3k</b></h1>
                    </div>
                        <div class="my-4 col-3">
                             <div class="input-group border">
                               <form action="/isip3k" method="get" enctype="multipart/form-data">
                                 <input type="search" name="search" class="form-control bg-light border-0 small" placeholder="Cari Lokasi ..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                               </form>
                                
                                </div>
                        </div>
                        <div class="row">
                        
                            <!-- Departement 1 -->
                            @foreach ($datas as $data)      
                            <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">{{$data->nama}}</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 18rem;"
                                            src="{{asset('img/obat1.jpg')}}" alt="...">
                                        </div>
                                        <a  rel="nofollow" href="/isip3k_dept/{{$data->id}}">Klik Untuk Melihat Isi Kotak P3K &rarr;</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                    </div>
                    {{$datas->links()}}
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