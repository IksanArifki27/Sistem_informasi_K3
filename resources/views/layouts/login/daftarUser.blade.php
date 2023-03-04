<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar User</title>
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
                    <h1 class="h3 mb-2 text-gray-800" >Tabel Daftar User</h1>

                    <!-- PENGUMUMAN -->
                    <div class="card shadow mb-4">

                        <div class="table-responsive text-center">
                            <table class="table table-striped table-bordered">
                                <thead style="text-align: center;">
                                    <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                    <th>Tanggal dibuat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- DATA 1 -->
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($datas as $data)    
                                    <tr>
                                        <td> {{$no++}}</td>
                                        <td>{{$data->name}}</td>
                                        <td><b>{{$data->email}}</b></td>
                                        <td>{{$data->level}}</td>                                
                                        <td>{{$data->created_at->format('d-m-Y')}}</td>                                
                                    </tr>
                                    @endforeach
                                    
                                                                 
                                </tbody> 
                            </table>  
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