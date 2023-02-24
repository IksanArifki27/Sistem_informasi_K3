
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Pengumuman</title>
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
                    <h1 class="h3 mb-2 text-gray-800" >Tabel Data Penghargaan</h1>

                    <!-- PENGUMUMAN -->
                    <div class="card shadow mb-4">
                        <div class="my-4" >
                            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="/editPenghargaan">
                        <div class="input-group border">
                            <input type="search" name="search" class="form-control bg-light border-0 small" placeholder="Cari Judul ..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            
                        </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                             @if ($message = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                   {{$message}}
                                </div>
                            @endif
                            <table class="table table-striped table-bordered">
                                <thead style="text-align: center;">
                                    <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Keterangan</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- DATA 1 -->
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($datas as $data)      
                                    <tr>
                                        <td>{{$no++}} </td>
                                        <td> <b>{{$data->judul}}</b> </td>
                                        <td>{{Str::limit($data->keterangan,150)}}</td>
                                        <td>
                                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;"
                                            src="{{asset('gambarPenghargaan/'.$data->foto)}}" alt="...">
                                        </td>
                                        <td>
                                            <!-- BUTTON EDIT -->
                                           <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#modalEdit{{$data->id}}">
                                            <svg id="edit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon line" width="20" height="20"><path id="primary" d="M19.88,7,11,15.83,7,17l1.17-4,8.88-8.88A2.09,2.09,0,0,1,20,4,2.09,2.09,0,0,1,19.88,7ZM21,21H3" style="fill: none; stroke: rgb(255, 252, 252); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2.5;"></path></svg>
                                            edit
                                            </button>
                                            
                                            <!-- BUTTON HAPUS -->
                                           
                                             <button type="button" class="btn btn-danger hapus" data-toggle="modal"  data-target="#modalHapus" data-id-hapus={{$data->id}}>
                                                    <svg id="delete-alt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon line" width="20" height="20"><path id="primary" d="M4,7H20M16,7V4a1,1,0,0,0-1-1H9A1,1,0,0,0,8,4V7m9.07,13.07L18,7H6l.93,13.07a1,1,0,0,0,1,.93h8.14A1,1,0,0,0,17.07,20.07ZM12,11v6" style="fill: none; stroke: rgb(254, 254, 254); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2.5;"></path></svg>	 Hapus
                                            </button>
                                            
                                        </td>
                                    </tr> 
                                    @endforeach  
                                        
                                   <!-- Button trigger modal -->                                   
                                    @foreach ($datas as $item) 
                                    <!-- edit Modal -->
                                    <div class="modal fade" id="modalEdit{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Data penghargaan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="/updatePenghargaan/{{$item->id}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                        <div class="item form-group">
                                                            <!-- JUDUL PENGUMUMAN TEXT BUTTON MODAL -->
                                                        <label for="judul" class="col-form-label label-align" style=" font-size:20px;">Judul Penghargaan</label>
                                                        <div>
                                                            <input type = "text" name="judul" id="judul_pengumuman" class="form-control" 
                                                            placeholder= "example : juara1" value="{{$item->judul}}"  required>
                                                        </div>
                                                        
                                                        <!-- ISI KONTEN TEXTAREA BUTTON MODAL -->
                                                        <label for="konten" class="col-form-label label-align"   style="font-size:20px;">Isi Konten</label>
                                                        <div>
                                                            <input type = "text" name="keterangan" id="judul_pengumuman" class="form-control" 
                                                             value="{{$item->keterangan}}"  required>
                                                        </div>
                                                        
                                                        <!-- GAMBAR TEXT BUTTON MODAL -->
                                                        {{-- <label for="customFile" Class="col-form-label label-align" style=" font-size:20px;">Masukkan Foto</label>
                                                        <input type="file" accept="image/*" class="form-control-file" name="foto" id="customFile" value="{{$item->foto}}"> --}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                    </div>                                                   
                                                </form>
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