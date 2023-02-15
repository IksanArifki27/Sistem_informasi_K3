
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Register</title>
  @include('layouts.inc.head')

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row mx-auto">
                    <div class="col-lg-5 d-none d-lg-block ">
                        <img src="https://cdnapi.sooplai.com/media/products/275482/4409258a-375.jpg" width="500" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar User</h1>
                            </div>
                            <form class="user" action="postRegister" method="POST">
                                @csrf
                                <div class="form-group" >
                                    <input type="text" name="name" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="masukan Nama ">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="masukan Email.. ">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="masukan password.. ">
                                </div>
                                
                                {{-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Daftar akun
                                </a> --}}
                                <button class="btn btn-primary btn-user btn-block" type="submit">Daftar</button>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/login">Sudah Punya Akun? Login!</a>
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