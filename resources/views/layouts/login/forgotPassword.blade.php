
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Lupa Password</title>
    @include('layouts.inc.head')

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           
                            <div class="col-lg-10 mx-auto">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Apa Anda lupa Password?</h1>
                                        <p class="mb-4">Cukup masukkan alamat email Anda di bawah ini
                                            dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda!</p>
                                    </div>
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                            <strong>{{ $message }}</strong>
                                        </div> 
                                        
                                    @endif
                                    <form class="user" method="POST" action="/forgotPassword">
                                       @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Email anda" name="email">
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary btn-user btn-block">reset password</button>
                                    </form>
                                    <hr>
                                    
                                    <div class="text-center">
                                        <a class="small" href="/login">Sudah punya akunt? Login!</a>
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