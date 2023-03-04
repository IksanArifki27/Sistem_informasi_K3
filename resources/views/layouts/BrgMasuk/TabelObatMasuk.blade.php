<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tabel obat Masuk</title>

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
                                    <th>Nama Barang</th>
                                    <th>Lokasi</th>
                                    <th>Jumlah Barang</th>
                                    <th>Tanggal Masuk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- DATA 1 -->
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($brg_msk as $item)
                                    <tr>
                                        <td>{{$no++}} </td>
                                        <td> <b> {{$item->barang->nama}}</b> </td>
                                        <td>{{$item->barang->lokasi->nama}} </td>
                                        <td>{{$item->jumlah_barang_masuk}} </td>
                                        <td>{{$item->created_at->format('d-m-Y')}} </td>
                                       
                                    </tr>
                                    @endforeach
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <b>Detail Gambar</b>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem; " src="img/undraw_posting_photo.svg" alt="foto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>                               
                                </tbody> 
                            </table>  
                        </div> 
                        {{$brg_msk->links()}}    
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