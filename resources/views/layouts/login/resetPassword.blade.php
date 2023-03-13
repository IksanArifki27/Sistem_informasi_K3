<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reset Password</title>
    @include('layouts.inc.head')

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden  shadow-lg my-5">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Ganti Password?</h1>
                                        <p class="mb-4">Masukkan password saat ini dan Password baru anda</p>
                                    </div>
                                    @if (session('success'))
                                         <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                            <strong>{{ session('success') }}</strong>
                                        </div>
                                    
                                    @elseif(session('error'))    
                                         <div class="alert alert-danger alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                            <strong>{{ session('error') }}</strong>
                                        </div>
                                    @endif
                                    @error('newPassword')
                                        <div class="alert alert-danger alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                    <form class="user" action="/prosesChange" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password Saat Ini</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="oldPassword" >
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password Baru</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="newPassword" >
                                        </div>
                                         @error('keterangan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="repeatPassword" >
                                        </div>
                                       
                                    
                                        <button type="submit" class="btn btn-primary btn-user btn-block" >Ganti Password</button>
                                    </form>
                                    <hr>
                                   
                                    <div class="text-center">
                                        <a class="small" href="/login">Sudah punya akun ? Login!</a>
                                        <br>
                                        <a href="/dashbord" class="mt-5">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

@include('layouts.inc.script')

</body>


</html>