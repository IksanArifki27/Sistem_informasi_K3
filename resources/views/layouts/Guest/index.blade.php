<!doctype html>
<html lang="en">
  <head>
    <title>Sistem K3</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Icon -->
    <link rel="shorcut icon" href="{{asset('img/k3.png')}}" type="image/x-icon"/>

    <!-- Fonts Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- My css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>

    <!-- CDN Animate Style -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- AOS CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  </head>
  <body id="home1">
    
    <!-- NAV BAR START -->
    <nav class="navbar navbar-expand-lg fixed-top animate__animated animate__fadeInDown">
        <div class="container">
          <a class="navbar-brand fw-bold fs-4 text-white" href="/">Sioktag</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
              <li class="nav-item">
                <a class="nav-link active mx-1 text-white " aria-current="page" href="#home1">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-1 text-white" href="#tips">Tips</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-1 text-white" href="/kotakp3k">Kotak P3K</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-1 text-white" href="#penghargaan">Penghargaan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-1 text-white" href="#pengumuman">Pengumuman</a>
              </li>
            </ul>
            <div class="text-center">
              <a href="http://www.interbat.co.id/" class="fs-5 mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="white" class="bi bi-browser-chrome" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
              </svg></a>
              <a href="https://www.instagram.com/interbatstore" class="fs-5 mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg></a>
            </div>
          </div>
        </div>
      </nav>
    <!-- STOP -->

    <!-- Hero -->
    <div class="hero d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-white fw-bold mb-4 animate__animated animate__fadeInUp animate__delay-1s">Kesehatan dan Keselamatan Kerja (K3)<br>PT. Interbat</h1>
                    <p class="text-white mb-4 text-opacity-75 animate__animated animate__fadeInUp animate__delay-1s"> Keselamatan adalah prioritas utama kita,seperti benang rajut yang menghubungkan kehidupan. Jangan jadikannya kendor dengan tidak menghiraukan keselamatan.</p>
                    {{-- <button class="btn btn-primary btn-lg rounded-1 me-2 animate__animated animate__fadeInUp animate__delay-1s">Login</button> --}}
                    <a href="/login" class="btn btn-primary btn-lg rounded-1 me-2 animate__animated animate__fadeInUp animate__delay-1s">Login</a>
                </div>
            </div>
        </div>
    </div>
    <!-- stop -->

    <!-- About -->
    <div class="about" >
        <div class="container-fluid">
            <div class="row row-cols-lg-2 row-cols-1">
                <div class="col text-center py-5">
                    <h2 >2000+</h2>
                    <h2 class="fw-bold mb-2" >Menyelamatkan nyawa</h2>
                    <p>dan menjaga karyawan dari ancaman bahaya </p>
                </div>
                    
                <div class="col text-center py-5 bg-warning">
                    <h2>10+</h2>
                    <h2 class="fw-bold mb-2">Project selesai</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- STOP -->

    <!-- PENGHARGAAN -->
    <div class="projects" id="pengumuman">
      <div class="container">
        <div class="row mb-4">
          <div class="col">
            <h2 class="border-bottom pb-2 fw-bold" data-aos="fade-right" data-aos-duration="1000" >Pengumuman K3 <br/> Hari ini</h2>
          </div>
        </div>
        <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 g-4">
          {{-- <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <img src="{{asset('img/projects-5.jpg')}}" alt="unsplash.com" class="w-100 mb-3">
            <h4 class="fw-semibold" >ISO</h4>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore architecto, veritatis accusantium in nihil eveniet alias. Odit ipsa aperiam culpa, alias reiciendis dolores eaque necessitatibus magni praesentium, nulla, iusto obcaecati.</p>
            <a class=" text-primary" href="detail_info.html">Lihat lebih lanjut</a>
          </div> --}}
          @foreach ($datas as $data)     
          <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
            <img src="{{asset('gambarPengumuman/'.$data->foto)}}" alt="unsplash.com" class="w-100 mb-3">
            <h4 class="fw-semibold">{{$data->judul}}</h4>
            <p style="text-align: justify;">{{$data->konten}}.</p>
            <a class=" text-primary" href="/detail/{{$data->id}}">Lihat lebih lanjut</a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- STOP -->

    
  <!-- Penghargaan -->
  <div class="services" id="penghargaan">
    <div class="container">
      <div class="row mb-4">
        <div class="col">
          <h2 class="fw-semibold border-bottom pb-2 " data-aos="fade-right" data-aos-duration="1000" >Penghargaan <br/> Terkini</h2>
        </div>
      </div>
      {{-- <div class="row align-items-center row-cols-lg-2 row-cols-1">
        <div class="col d-flex d-lg-block d-none">
          <img src="{{asset('img/projects-3.jpg')}}" class="me-2" alt="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        </div>
        <div class="col">
          <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400"> <i class="fa-regular fa-circle-check"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius, nobis eos ut modi fugit unde non aspernatur aperiam.
          </h5>
          <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500"><i class="fa-regular fa-circle-check"></i> Yohana lorem dolor sit amet, consectetur adipisicing elit.</h5>
          <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="700"><i class="fa-regular fa-circle-check"></i> pakde fiken</h5>
          <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="800"><i class="fa-regular fa-circle-check"></i> untag sby</h5>
        </div>
      </div> --}}
    </div>
    @foreach ($penghargaans as $item)
     <div class="row align-items-center row-cols-lg-2 row-cols-1 my-3">
        <div class="col d-flex d-lg-block d-none">
          <img src="{{asset('gambarPenghargaan/'.$item->foto)}}" class="ms-5" alt="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        </div>
        <div class="col">
          <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400"> <i class="fa-regular fa-circle-check"></i> {{$item->judul}}
          </h5>
          <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400"> <i class="fa-regular fa-circle-check"></i> {{$item->keterangan}}
          </h5>
          
        </div>
      </div>
    @endforeach
  </div>
  <!-- STOP -->

  <!-- START TIPS -->
  <div class="faq" id="tips">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="fw-semibold border-bottom pb-2" data-aos="fade-right" data-aos-duration="1000" >Tips-Tips aman <br>agar kamu selalu terhindar dari bahaya</h2>
        </div>
      </div>
      <div class="row row-cols-lg-3 row-cols-1 g-4 pt-4 ">

        <!-- CARD TIPS 1 Full body Harness  -->
        <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
          <div class="card" style="width: 18rem;">
            <img src="{{asset('img/body_harnes.jpg')}}" class="card-img-top" alt="obat">
            <div class="card-body">
              <h6><b>Memeriksa Kelayakan Full Body Harness</b></h6>
              <p class="card-text">Full body harness memang berfungsi sebagai alat pelindung diri saat bekerja di ketinggian lebih dari 1,8 meter.</p>
              <a class=" text-primary" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">simak tipsnya</a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tips agar kamu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <figure>
                      <video src="/vidio/body_harnes.mp4" width="400" controls></video>
                      <figcaption>
                        <p class="card-text">Pastikan kamu menggunakan full body harness yang digunakan sesuai dengan standar lalu selalu cek webbing/tali pada full body harness tidak ada yang terpelintir dan ketahui batas maksimum untuk menahan beban.<br></p>
                        anda bisa lihat video lainnya  
                        <a target="_blank" rel="noopener"  href="https://www.youtube.com/watch?v=NKPYtq1LOrE">klik</a>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- STOP CARD 1 -->

        <!-- CARD TIPS 2 -->
        <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
          <div class="card" style="width: 18rem;">
            <img src="{{asset('img/danger.jpg')}}" class="card-img-top" alt="obat">
            <div class="card-body">
              <h6><b>Bahaya Tegangan Tinggi</b></h6>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, asperiores.</p>
              <a class=" text-primary" href="" data-bs-toggle="modal" data-bs-target="#exampleModal1">simak tipsnya</a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tips Agar Kamu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <figure>
                      <video src="/vidio/K3_listrik.mp4" width="400" controls></video>
                      <figcaption>
                        <p>
                          Sebelum itu, cek peralatan kamu apakah sesuai dan memenuhi standar, lalu Cek kabel-kabel dilantai jangan sampai menyebabkan tripping hazard. <b>Dan pastinya direncanakan secara matang serta dikerjakan oleh orang yang kompeten </b> <br>
                        </p>  
                        anda bisa lihat video lainnya  
                            <a target="_blank" rel="noopener"  href="https://youtu.be/QigILRBMnRI">klik</a>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- STOP CARD 2 -->

        <!-- CARD TIPS 3 -->
        <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
          <div class="card" style="width: 18rem;">
            <img src="{{asset('img/angkat.jpg')}}" class="card-img-top" alt="obat">
            <div class="card-body">
              <h6><b>Bahaya Benda Jatuh</b></h6>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur, asperiores.</p>
              <a class=" text-primary" href="" data-bs-toggle="modal" data-bs-target="#exampleModal2">simak tipsnya</a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tips Agar Kamu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <figure>
                      <video src="/vidio/mengangkat_barang.mp4" width="400" controls></video>
                      <figcaption>
                        anda bisa lihat video lainnya  
                        <a target="_blank" rel="noopener"  href="https://youtu.be/H08TlhCMDdg">klik</a>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- STOP CARD 3 -->

        



      </div>
    </div>
  </div>
  <!-- STOP -->

  <!-- START FOOTER -->
  <div class="footer pt-5">
    <div class="container">
      <div class="row row-cols-lg-3 row-cols-1 justify-content-center">
        <div class="col col-lg-6 mb-lg-0 mb-4">
          <h2 class="fw-bold text-white mb-3">Sioktig.</h2>
          <p class="text-white-50" style="text-align: start;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos vero repellat, laborum deserunt consequatur ad minus cum ipsam et doloremque.</p>
        </div>
        <div class="col col-lg-2 d-flex flex-column mb-lg-0 mb-4">
          <h5 class="fw-bold text-white">Menu</h5>
          <a href="/" class="text-white-50 mt-3 text-decoration-none">Home</a>
          <a href="#tips" class="text-white-50 mt-2 text-decoration-none">Tips</a>
          <a href="/kotakp3k" class="text-white-50 mt-2 text-decoration-none">Kotak P3K</a>
          <a href="#pengumuman" class="text-white-50 mt-2 text-decoration-none">Pengumuman</a>
          <a href="#penghargaan" class="text-white-50 mt-2 text-decoration-none">Penghargaan</a>
        </div>
        <div class="col col-lg-4 d-flex flex-column mb-lg-0 mb-4">
          <h5 class="fw-bold text-white mb-3">Contact</h5>
          <a href="#" class="text-decoration-none text-white-50 mt-3">Email : interbat.factory@interbat.co.id</a>
          <a href="#" class="text-decoration-none text-white-50 mt-3">Phone : (031) 891 4201</a>
          <a href="#" class="text-decoration-none text-white-50 mt-3">Fax : (031) 891 4015</a>
          <a href="#" class="text-decoration-none text-white-50 mt-3">Jl. H.R. Moch. Mangundiprojo No. 1
            Sidoarjo 61252, Indonesia</a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="text-center text-white copyright">&copy; copyright 2023 PT.INTERBAT K3</p>
        </div>
      </div>
    </div>
  </div>
  <!-- STOP FOOTER -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    

    <!-- My Js -->
    <script src="{{asset('js/script.js')}}"></script>

    <!-- Script AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>