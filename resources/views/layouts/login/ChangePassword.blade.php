
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create new password</title>
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
                                        <h1 class="h4 text-gray-900 mb-2">Buat Password Baru?</h1>
                                        <p class="mb-4">Masukkan password saat ini dan Password baru anda</p>
                                    </div>
                                        <form class="user" action="/changePassword" method="POST">
                                            @csrf
                                           
                                            <input type="hidden" name="token" value="{{$token}} ">
                                           <div class="form-group">
                                            <label for="exampleInputPassword1">Masukan Email</label>
                                            <input type="email" class="form-control"  name="email" >
                                        </div>
                                    @error('email')
                                            <div class="alert alert-danger alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                            <strong>{{ $message }}</strong>
                                            </div>     
                                    @enderror
                                       
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password Baru</label>
                                            <input type="password" class="form-control"  name="newPassword" >
                                        </div>
                                    @error('newPassword')
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>	
                                            <strong>{{ $message }}</strong>
                                            </div>     
                                    @enderror
                                                                             
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
                                            <input type="password" class="form-control"  name="confirmPassword" >
                                        </div>
                                     @error('confirmPassword')
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>	
                                            <strong>{{ $message }}</strong>
                                            </div>     
                                    @enderror
                                       
                                  
                                        <button type="submit" class="btn btn-primary btn-user btn-block" >Buat password</button>
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