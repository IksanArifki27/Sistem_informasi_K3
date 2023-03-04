<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tabel Transaksi Masuk</title>
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
                    <h1 class="h3  text-gray-800 text-center mb-4" > <b>Tabel Catatan Transaksi Masuk Obat P3K</b> </h1>

                    <!-- PENGUMUMAN -->
                    <div class="card shadow mb-4">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered text-center">
                                <thead style="text-align: center;">
                                    <tr>
                                    <th>No.</th>
                                    <th>Nama User</th>
                                    <th>Nama Barang</th>
                                    <th>Lokasi</th>
                                    <th>Total keluar</th>
                                    <th>Tanggal Keluar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- DATA 1 -->
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($brg_klr as $item)     
                                    <tr>
                                        <td>{{$no++}} </td>
                                        <td>{{$item->nama}} </td>
                                        <td>{{$item->barang->nama}} </td>
                                        <td>{{$item->lokasi->nama}} </td>
                                        <td>{{$item->jumlah_barang_keluar}} </td>
                                        <td>{{$item->created_at->format('d-m-Y')}} </td>
                                        
                                    </tr>
                                    @endforeach
                                    
                                                       
                                </tbody> 
                            </table>  
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