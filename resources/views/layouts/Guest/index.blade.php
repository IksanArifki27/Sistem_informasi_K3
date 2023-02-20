
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
  
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="img/k31.jpg" style="width:100%">
        <div class="container">
          <div class="carousel-caption">
            {{-- <h1 class="text">BERITA 1.</h1>
            <p class="">Some representative placeholder content for the first slide of the carousel.</p> --}}
          </div>
        </div>
      </div>
      <div class="carousel-item">
        
        <img src="img/k32.png" style="width:100%; backround-size:cover;">
        <div class="container">
          <div class="carousel-caption">
            {{-- <h1>BERITA 2.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p> --}}
          </div>
        </div>
          
        </div>
      </div>
      
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row text-center" id="tips">
      <div class="col">
        <h2 class="text">Tips Selamat</h2>
        <br><br>
      </div> 
    </div>
    <div class="row " >
      <div class="col-lg-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-basket2" viewBox="0 0 16 16">
          <path d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z"/>
          <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z"/>
        </svg>
        <h2 class="fw-normal" >Mengangkat Barang</h2>
        <p>Mengangkat dan membawa adalah pekerjaan yang membutuhkan tenaga. Ketika Anda mengangkat dan membawa dengan cara yang salah, Anda dapat merusak punggung Anda atau berakhir dengan cedera...</p>
        <button type="button" class="btn btn-primary tips" data-bs-toggle="modal" data-bs-target="#myModal">
          Lihat lebih banyak
        </button>
        <div class="modal" id="myModal">
          <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header text-center">
                <!-- <p class="text-center">Center aligned text on all viewport sizes.</p> -->
                <h4 class="modal-title-end ">Tips Mengangkat Barang dengan benar</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
                <img src="img/angkat2.jfif" style="width:50%">
                <br><br>
                1. Lindungi kaki dan tangan anda dengan pelindung yang sesuai <br> 
                2. Selalu gunakan otot perut Anda untuk membantu pinggang di saat mengangkat. <br>
                3. Periksa lajur yang akan Anda lewati untuk memastikan bahwa tidak ada benda-benda yang akan membuat anda tersandung dan jatuh. <br>
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
        </svg>
        <h2 class="fw-normal">Daerah Tegangan Tinggi</h2>
        <p>Sebagian besar pekerjaan sekarang tak bisa dilepaskan dari listrik. Untuk itu, keselamatan kerja listrik sangat penting agar proses kerja bisa berlangsung dengan lancar. Namun, listrik ini juga sering menjadi penyebab terjadinya kecelakaan kerja.</p>
        <button type="button" class="btn btn-primary tips" data-bs-toggle="modal" data-bs-target="#myModal2">
          Lihat lebih banyak
        </button>
        <div class="modal" id="myModal2">
          <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title-end">Tips Aman Bekerja dengan Listrik</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
                <img src="img/danger.jpg" style="width:30%">
                <br><br>
                1. Gunakan alat pelindung diri dan alat kelistrikan yang aman dan berkualitas. <br>
                2. Lakukan prosedur yang efektif dan aman ketika memperbaiki sirkuit listrik maupun peralatan yang menggunakan listrik.<br>
                3. Pastikan semua peralatan maupun listrik, kabelnya tertutup dan tidak ada yang terkelupas.<br>
                4. Jika ada kabel listrik yang rusak atau terkelupas, segera ganti. Agar tidak berbahaya bagi pekerja.<br>
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
          <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
        </svg>
        <h2 class="fw-normal">Membuang Sampah</h2>
        <p>Kebersihan adalah salah satu kunci kesehatan yang utama. Sayangnya, masih banyak orang yang lalai menjaga kebersihan diri dan lingkungannya dengan membuang sampah sembarangan. Padahal...</p>
        <button type="button" class="btn btn-primary tips" data-bs-toggle="modal" data-bs-target="#myModal1">
          Lihat lebih banyak
        </button>
        <div class="modal" id="myModal1">
          <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title-end">Tips Membuang sampah </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
        
              <!-- Modal body -->
              <div class="modal-body">
                <img src="img/sampah.jpg" style="width:50%">
                <br><br>
                1. Mengenali jenis sampah yang hendak dibuang. <br>
                2. Pisahkan sampah yang mudah terurai dengan sampah lainnya. <br>
                3. Jangan lupa tutup bak sampah, agar tidak menimbulkan bau kurang sedap<br>

              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      

    </div><!-- /.row -->

    <hr class="featurette-divider">
    <!-- KOTAK P3K START -->
    <section id="p3k">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2 class="text">Kotak P3K</h2>
            <br><br>
          </div> 
        </div>
        <div class="row justify-content-center">
          <div>
            <img src="img/p3k.png" class="rounded mx-auto d-block gambar" alt="kotak p3k">
            <br><br>
            <!-- start table -->
            <table class="table table-hover table-striped table-bordered text-center" >
              <thead class="table-primary table">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Isi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Hansaplast</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Minyak Kayu putih</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Alkohol</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Kapas</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Kasa</td>
                </tr>
              </tbody>
            </table>
            <!-- stop -->
          </div>

        </div>
      </div>
    </section>
    <!-- STOP -->
    <hr class="featurette-divider">
    <!-- PENGHARGAAN START -->
    <section id="pencapaian">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2 class="text">Penghargaan</h2>
            <br><br>
          </div> 
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card" >
              <img src="img/kor.jpg" class="card-img-top" alt="gambar1">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
            
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" >
              <img src=" img/kor.jpg" class="card-img-top" alt="gambar1">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" >
              <img src="img/kor.jpg" class="card-img-top" alt="gambar1">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" >
              <img src="img/kor.jpg" class="card-img-top" alt="gambar1">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" >
              <img src="img/kor.jpg" class="card-img-top" alt="gambar1">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- STOP -->

    <!-- START PENGUMUMAN -->
    
    <hr class="featurette-divider">
    <h1 id="pengumuman">PENGUMUMAN</h1>

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Cek Ketersediaan Obat</h2>
        <p class="lead">Menteri Koordinator Bidang Pembangunan Manusia dan Kebudayaan (Menko PMK) RI, Muhadjir Effendy mengunjungi PT Interbat di Jln. Raya Buduran, Sidoarjo, untuk memastikan produksi obat perawatan bagi pasien Covid-19 yang diproduksi industri farmasi ini masih berjalan, Selasa (13/07/2021).</p>
      </div>
      <div class="col-md-5">
        <img src="img/in1.jpeg" style="width:100%">
      </div>

    </div>
    @foreach ($datas as $data)
    <div class="row featurette my-2">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">{{$data->judul}}</h2>
        <p class="lead">{{Str::limit($data->konten,160)}},<a href="/detail/{{$data->id}}">Baca lebih lanjut</a> ({{$data->created_at->format('l d-m-Y')}}).</p>
      </div>
      
      <div class="col-md-5">
        <img src="{{asset('gambarPengumuman/'.$data->foto)}}" style="width:100%">
      </div>
    </div>
    @endforeach

    <hr class="featurette-divider">

    <!-- STOP PENGUMUMAN -->

    
</div><!-- /.container -->
    
    <!-- FOOTER -->
    <footer class="container-fluid text-center text-bg-info p-3">
        <p>&copy; K3 Interbat</p>
    </footer>
</main>


  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

      
  </body>
</html>
