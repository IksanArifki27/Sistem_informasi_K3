
<!doctype html>
<html lang="en">
  <head>
    <title>Welcome K3 Interbat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    <!-- my font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Viga&display=swap" rel="stylesheet">



<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('css/carousel2.css')}}" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
 
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="/">K3 Interbat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          
          <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#tips">Tips</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#p3k">Kotak P3K</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#pencapaian">Pencapaian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#pengumuman">Pengumuman</a>
            </li>
          </ul>
          <a href="/login" class="nav-item btn btn-primary fw-bold px-3">Login</a>
     
        </div>
        </div>
      </div>
    
  </nav>
</header>

<main>
  



  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">


    <img src="{{asset('gambarPengumuman/'.$data->foto)}}" width="100%" alt="">
    <h1>{{$data->judul}}</h1>
    <p>{{$data->konten}}</p>
        
    
    </div><!-- /.container -->
    
    <!-- FOOTER -->
    <footer class="container-fluid text-center text-bg-info p-3">
        <p>&copy; K3 Interbat</p>
    </footer>
</main>


  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

      
  </body>
</html>
