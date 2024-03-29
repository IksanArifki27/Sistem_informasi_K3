
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Login</title>

  @include('layouts.inc.head')

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                             </div>     
                        @endif
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row mx-auto">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="https://cdnapi.sooplai.com/media/products/275482/4409258a-375.jpg" width="400" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div style="text-align:end">
                                        <a href="/" class="text-center">
                                            <i class="fa fa-times fw-bold" 
                                                aria-hidden="true">
                                            </i>
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Halaman Login </h1>
                                    </div>
                                    <form class="user" method="POST" action="/postLogin">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Email..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password"
                                                id="exampleInputPassword" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                           
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                        <hr>
                                       
                                    </form>
                                    <hr>
                                    
                                   
                                    <div class="text-center">
                                        <a  href="/" >Home</a>
                                        <br>
                                        <a href="/forgotPassword">lupa password?</a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
   @include('layouts.inc.script')

</body>

</html>