<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Pencapaian K3</title>
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
                    <div class="d-sm-flex align-items-center justify-content-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><b>Sertifikat yang Diperoleh K3</b></h1>
                        
                    </div>
                   
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Penghargaan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total}} </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style="height:2px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(38, 44, 156)" >
                    <div class="row">
                        <!-- Penghargaan 1-->
                        <div class="col-xl-4 col-lg-5">
                            @foreach ($data as $item) 
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 border-bottom-success">
                                    <h6 class="m-0 font-weight-bold text-primary">{{$item->judul}}</h6>
                                </div>
                                <div class="card-body ">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 20rem;"
                                            src="{{asset('gambarPenghargaan/'. $item->foto )}}" alt="...">
                                    </div>
                                    <div style="text-align: justify;">
                                        <p>{{$item->keterangan}}</p>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                        </div>

                        <!-- Penghargaan 1-->
                       

               
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