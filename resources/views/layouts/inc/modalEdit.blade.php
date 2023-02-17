 <div class="modal fade" id="editdata-{{$Id->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Edit Data Pengumuman</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    @foreach ($id as $item)
                                                        
                                                    <form action="#" method="post" enctype="multipart/form-data">
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
                                                            <textarea type="text" class="form-control" id="InputContent"
                                                            placeholder="Lorem" required name="konten" aria-valuemax="{{$item->konten}}"></textarea>
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
                                                @endforeach
                                            </div>       
                                        </div>
                                    </div>