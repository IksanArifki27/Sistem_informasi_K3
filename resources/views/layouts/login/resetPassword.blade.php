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
                                        <h1 class="h4 text-gray-900 mb-2">Reset Your Password?</h1>
                                        <p class="mb-4">Masukkan password saat ini dan baru anda</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password Saat Ini</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password Baru</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        
                                        
                                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                                            Reset Password
                                        </a>
                                    </form>
                                    <hr>
                                   
                                    <div class="text-center">
                                        <a class="small" href="login.html">Already have an account? Login!</a>
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