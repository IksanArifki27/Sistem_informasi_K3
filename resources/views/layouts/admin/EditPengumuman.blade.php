
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
                    <h1 class="h3 mb-2 text-gray-800" >Tabel Data Pengumuman</h1>

                    <!-- PENGUMUMAN -->
                    <div class="card shadow mb-4">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead style="text-align: center;">
                                    <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Isi Konten</th>
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
                                        <td>{{$data->judul}} </td>
                                        <td>{{$data->konten}}</td>
                                        <td>
                                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem;"
                                            src="{{asset('gambarPengumuman/'.$data->foto)}}" alt="...">
                                        </td>
                                        <td>
                                            <!-- BUTTON EDIT -->
                                            <a href="" data-toggle="modal" data-target="#editdata{{$data->id}}" class="btn btn-primary btn-sm"><svg id="edit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon line" width="20" height="20"><path id="primary" d="M19.88,7,11,15.83,7,17l1.17-4,8.88-8.88A2.09,2.09,0,0,1,20,4,2.09,2.09,0,0,1,19.88,7ZM21,21H3" style="fill: none; stroke: rgb(255, 252, 252); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2.5;"></path></svg>  Edit</a> <br><br>

                                            <!-- BUTTON HAPUS -->
                                            <a href="" data-toggle="modal" data-target="#hapusModal" class="btn btn-danger btn-sm"><svg id="delete-alt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon line" width="20" height="20"><path id="primary" d="M4,7H20M16,7V4a1,1,0,0,0-1-1H9A1,1,0,0,0,8,4V7m9.07,13.07L18,7H6l.93,13.07a1,1,0,0,0,1,.93h8.14A1,1,0,0,0,17.07,20.07ZM12,11v6" style="fill: none; stroke: rgb(254, 254, 254); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2.5;"></path></svg> Hapus</a> 
                                        </td>
                                    </tr> 
                                    @endforeach  
                                        
                                    @foreach ($datas as $item)
                                    <!-- START EDIT PENGUMUMAN MODAL -->
                                    <div class="modal fade" id="editdata{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Edit Data Pengumuman</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">    
                                                        
                                                    <form action="/updatePengumuman/{{$item->id}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="item form-group">
                                                            <!-- JUDUL PENGUMUMAN TEXT BUTTON MODAL -->
                                                        <label for="judul" class="col-form-label label-align" style=" font-size:20px;">Judul Pengumuman</label>
                                                        <div>
                                                            <input type = "text" name="judul" id="judul_pengumuman" class="form-control" 
                                                            placeholder= "example : Kunjungan Tim Audit" value="{{$item->judul}}"  required>
                                                        </div>
                                                        
                                                        <!-- ISI KONTEN TEXTAREA BUTTON MODAL -->
                                                        <label for="konten" class="col-form-label label-align"   style="font-size:20px;">Isi Konten</label>
                                                        <div>
                                                            <input type = "text" name="konten" id="judul_pengumuman" class="form-control" 
                                                            placeholder= "example : Kunjungan Tim Audit" value="{{$item->konten}}"  required>
                                                        </div>
                                                        
                                                        <!-- GAMBAR TEXT BUTTON MODAL -->
                                                        <label for="customFile" Class="col-form-label label-align" style=" font-size:20px;" name="foto">Masukkan Foto</label>
                                                        <input type="file" accept="image/*" class="form-control-file" id="customFile" value="{{$item->foto}}">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                    </div> 
                                                    
                                                </form>
                                            </div>       
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- FINISH EDIT MODAL -->
                                    
                                    {{-- start hapus pengumuman Modal --}}
                                    <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Apakah yakin untuk dihapus?</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">Data yang anda pilih akan dihapus secara permanen</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-success" type="button" data-dismiss="modal">Iya</button>
                                                <a class="btn btn-danger" href="/editPengumuman">Tidak</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    {{-- Finish hapus pengumuman Modal --}}
                                  

                                   

                                   
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