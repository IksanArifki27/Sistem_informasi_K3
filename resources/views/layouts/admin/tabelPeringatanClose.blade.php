<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tabel Peringatan</title>
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
                    <!-- Topbar Navbar -->
                    @include('layouts.inc.topbar')
               
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 text-center"><b> Tabel Data Peringatan Closed </b></h1>

                    <!-- PENGUMUMAN -->
                    <div class="card shadow mb-4">
                        
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead style="text-align: center;">
                                    <tr>
                                    <th>No.</th>
                                    <th>tanggal Temuan</th>
                                    <th>Gambar</th>
                                    <th>Lokasi</th>
                                    <th>fasilitas/Nama</th>
                                    <th>Masalah</th>
                                    <th>Penyebab</th>
                                    <th>Tindak Lanjut</th>
                                    <th>PIC</th>
                                    <th>Batas Waktu</th>
                                    <th>Tgl Penyelesaian </th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                    
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
                                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('img/bahayajatuh.jpg')}}" alt="foto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                 {{-- data siokag mobile  --}}
                                 @php
                                     $no = 1;
                                 @endphp
                                 @foreach ($datas as $data)
                                    <tr>
                                        <td>{{$no++}} </td>
                                        <td>{{$data->sioktag->created_at->format('d-m-Y')}} </td>
                                        <td>
                                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="{{asset('imgMobileSioktag/'.$data->sioktag->foto)}}" alt="..." data-toggle="modal" data-target="#ModalDetail{{$data->sioktag->id}}">
                                            {{-- <button type="button" class="btn btn-primary btn-sm ms-4" data-toggle="modal" data-target="#ModalDetail{{$data->id}}">
                                                view
                                            </button>  --}}
                                        </td>
                                        <td><b>{{$data->sioktag->lokasi}}</b></td>
                                        <td><b>{{$data->sioktag->nama}}</b></td>
                                        <td>{{$data->sioktag->keterangan}} .</td>
                                        <td>{{$data->sioktag->penyebab}} </td>
                                        <td>{{$data->sioktag->tindak_lanjut}}</td>
                                        <td>{{$data->sioktag->PIC}}</td>
                                        <td>{{$data->sioktag->DL}}</td>
                                        <td>{{$data->created_at->format('d-m-Y')}}</td>
                                        <td style="background-color: rgb(183, 255, 183)"> {{$data->status}}</td>
                                        <td>
                                           <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="{{asset('fotoKeterangan/'.$data->keterangan)}}" alt="..." data-toggle="modal" data-target="#ModalDetailClosed{{$data->id}}">
                                        </td>
                                        {{-- <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalDetail{{$data->id}}">
                                                Klik Gambar
                                            </button> 
                                        </td> --}}
                                    </tr>
                                     @endforeach 
                                    <!-- Modal -->
                                    @foreach ($datas as $item) 
                                    <div class="modal fade" id="ModalDetail{{$item->sioktag->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <b>Detail Gambar Peringatan</b>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('imgMobileSioktag/'.$item->sioktag->foto)}}" alt="foto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                     @endforeach    
                                     {{-- modal gambar Closed --}}
                                    @foreach ($datas as $item) 
                                    <div class="modal fade" id="ModalDetailClosed{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <b>Detail Gambar Penyelesaian</b>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('fotoKeterangan/'.$item->keterangan)}}" alt="foto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
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