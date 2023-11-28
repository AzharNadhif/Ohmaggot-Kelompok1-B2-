<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OhMaggot!</title>

    <link rel="Website Icon" href="{{asset('images/icon/logomaggot.png')}}" type="png">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- FONT RUBIK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- ICON -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


  </head>
  <body>
    {{-- @foreach ($tes as $t)
        
    {{ $t }}
    @endforeach --}}

    <!-- NAVBAR -->
    <div class="navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <img src="{{asset('images/icon/logomaggot.png')}}" alt="" height="120px" class="d-inline-block align-text-top">
            
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">home</a>
                  </li>
                  <li class="nav-item" style="margin-left: 20px;">
                    <a class="nav-link" href="{{ route('article') }}">article</a>
                  </li>
                  <li class="nav-item" style="margin-left: 20px;">
                    <a class="nav-link" href="{{route('product')}}">product</a>
                  </li>
                  <li class="nav-item" style="margin-left: 20px;">
                    <a class="nav-link" href="{{route('about')}}">about</a>
                  </li>
                  <li class="profile" style="margin-left: 20px;">
                    <a class="nav-link" href="{{route('profile')}}">
                      <i class="fa-solid fa-user"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <!-- NAVBAR -->

    <!-- SECTION 1 -->
    <div class="section1">
      <!-- <br> -->
        <!-- SLOGAN -->
        <h1 >Maggot, Solusi Pintar <br>
          Sejuta Manfaat</h1>
        <!-- SLOGAN -->


        <!-- SLIDER -->
          <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
        
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/slider/slider1.png')}}"  class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/slider/slider2.png')}}" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/slider/slider3.png')}}"  class="d-block w-100">
            </div>
            </div>
        
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
          </div>
      <!-- TUTUP SLIDER -->
        
        <!-- LENGKUNGAN MAUT -->
        <br><br><br><br><br><br>
        <div class="lengkungan">
          <svg style="background-color: #FFF7D4" width="100%" height="150" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path id="wavepath" d="M0,0  L110,0C35,150 35,0 0,100z" fill="#FFD95A"></path>
          </svg>
        </div>
        <!-- LENGKUNGAN MAUT -->
      
    </div>
    <!-- SECTION 1 -->

    <!-- SECTION 2 -->
    <div class="section2">
      <!-- SINGKAT -->
      <div class="singkat">
        <div class="card mb-3" >
          <div class="row no-gutters">
            <div class="col-md-8">
              <div class="card-body">
                <h2 class="card-title"><b>OhMaggot! <br>
                  Solution</b></h2> <br>
                <p class="card-text" style="text-align: justify;">Solusi untuk memenuhi dan menyokong kebutuhan usaha Maggot anda. Lewat dari berbagai macam fitur beragam, anda dapat terhubung dengan pembudidaya lain lewat komunitas, menjual hasil produk olahan Maggot anda lewat platform yang telah tersedia, hingga edukasi tentang budidaya Maggot bagi anda pembudidaya awam. OhMaggot berkomitmen untuk mewujudkan potensi budidaya anda menjadi nyata.</p>
              </div>
            </div>
            <div class="col-md-4">
              <img src="{{asset('images/background/card-maggot.png')}}" class="card-img" style="height: auto;">
            </div>
          </div>
        </div>
      </div>
      <br><br><br>
      <!-- SINGKAT -->

      <!-- KEMUDAHAN -->
      <h1 style="font-weight:1000;">Kemudahan yang Anda Dapatkan.</h1>
      <br>
      <br>
      <br><br>

      <!-- 3 CARD -->
          <!-- BOX -->
          <div class="blog-container">

            <!-- BOX 1 -->
            <div class="zoom">
                <div class="blog-bos">

                            <!-- BLOG IMG 1-->
                            <div class="blog-img">
                              <br>
                                <img src="{{asset('images/icon/map.png')}}" alt="Blog">
                            </div>

                            <!-- TEXT -->
                            <div class="blog-teks">
                                <h6> <b> Akses Lokasi Budidaya</b></h6>
                                <p style="padding-bottom: 30px;">Tertera banyak titik lokasi budidaya Maggot yang sesuai dengan lokasi masing-masing pengguna </p>
                            
                            </div>
                </div>
            </div>

            <!-- BOX 2-->
            <div class="zoom">
                <div class="blog-bos">

                        <!-- BLOG IMG 1-->
                        <div class="blog-img">
                          <br>
                            <img src="{{asset('images/icon/shop.png')}}" alt="Blog">
                        </div>

                        <!-- TEXT -->
                        <div class="blog-teks">
                            <h6><b>Tersedia Produk Olahan</b></h6>
                            <p style="padding-bottom: 30px;">Tersedia berbagai produk olahan Maggot yang dapat dipilih dan dibeli sesuai dengan kebutuhan 
                              masing-masing</p>
                        
                        </div>

                </div>
            </div>

            <!-- BOX 3 -->
            <div class="zoom">
                <div class="blog-bos">

                        <!-- BLOG IMG 1-->
                        <div class="blog-img">
                          <br>
                            <img src="{{asset('images/icon/smartphone.png')}}" alt="Blog">
                        </div>

                        <!-- TEXT -->
                        <div class="blog-teks">
                          <h6><b>Proses Pemesanan Anti Ribet</b></h6>
                            <p style="padding-bottom: 30px;">Cukup pilih produk yang ingin kalian beli, lalu hubungi pemilik produk untuk melakukan transaksi.</p>

                        </div>

                </div>
            </div>
        </div>
    
      <!-- 3 CARD -->
      <br><br><br><br>

    </div>
    <!-- SECTION 2 -->

        <!-- SECTION 3 -->
    <div class="section3">
      <h1>Produk Unggulan</h1>


       <!-- 3 CARD -->
          <!-- BOX -->
          <div class="blog-container">

            <!-- BOX 1 -->
            <div class="zoom">
                <div class="blog-box">
                          <br><br>
                            <!-- BLOG IMG 1-->
                            <div class="blog-imeg">
                              <br>
                                <img src="{{asset('images/icon/pakan.png')}}" alt="Blog">
                            </div>
                          <br><br><br><br>

                </div>
            </div>

            <!-- BOX 2-->
            <div class="zoom">
                <div class="blog-box">
                      <br><br>
                        <!-- BLOG IMG 1-->
                        <div class="blog-imeg">
                          <br>
                            <img src="{{asset('images/icon/maggot.png')}}" alt="Blog">
                        </div>
                      <br><br><br><br>

                </div>
            </div>

            <!-- BOX 3 -->
            <div class="zoom">
                <div class="blog-box">
                    <br><br>
                        <!-- BLOG IMG 1-->
                        <div class="blog-imeg">
                          <br>
                            <img src="{{asset('images/icon/pupuk.png')}}" alt="Blog">
                        </div>
                        <br><br><br><br>

                </div>
            </div>
        </div>
        <div class="text-center">
          <a class="btn btn-lg selengkapnya" href="index_product.html" role="button" style="margin-top: 30px; background-color:#FFC474;"> <b>Lihat Selengkapnya</b></a>
        </div>
       

       <br><br>
      <!-- 3 CARD -->
        
      <!-- CTA BELI -->

      <div class="beli">
        <div class="child">
          <h1> <b> Tertarik untuk berniaga ? </b></h1>
          <div class="text-center">
            <a class="btn btn-lg" href="{{route('product')}}" role="button"> <b> Beli Sekarang </b></a>
          </div>
           
        </div>
      </div>
      <br>

     <!-- AKHIR CTA BELI-->


    </div>
    <!-- SECTION 3 -->

    <!-- SECTION 4 -->

    <div class="section4">
      <br>
      <h1>Article</h1>
      <br>

      <!-- SLIDER ARTIKEL -->

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" id="inner2">
          <div class="carousel-item active">
            <img src="{{asset('images/artikel/art1.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h4><b>Budidaya Maggot Black Soldier Fly (BSF)</b></h4>
              <p style="color: white;">Tidak bisa dipungkiri, sampah merupakan konsekuensi dari adanya aktivitas manusia. Timbulan sampah akan meningkat seiring dengan pertumbuhan jumlah penduduk dan pola konsumsi masyarakat. Di Yogyakarta, berdasarkan data dari Badan Perencanaan dan Pembangunan Daerah pada tahun 2021</p>
              <a class="btn btn-lg" href="baca1.html" role="button" style="margin-top: 30px; background-color:#FFC474;"> <b>Lihat Selengkapnya</b></a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/artikel/art2.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h4><b>Bahan Produk Kecantikan</b></h4>
              <p style="color: white;">Budidaya maggot atau belatung dari lalat jenis black soldier fly untuk pakan alternatif ternak, sekaligus meminimalkan sampah organik, terus meluas di sejumlah wilayah di Jawa Tengah. Apalagi nilai ekonomisnya sangat menjanjikan.</p>
              <a class="btn btn-lg" href="baca2.html" role="button" style="margin-top: 30px; background-color:#FFC474;"> <b>Lihat Selengkapnya</b></a>
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('images/artikel/art3.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h4><b>Budidaya Maggot sebagai Inovasi Atasi Sampah</b></h4>
              <p style="color: white;">Pengolahan sampah organik menjadi salah satu permasalahan yang kerap ditemukan di berbagai daerah. Berdasarkan fakta tersebut, mahasiswa Belajar Bersama Komunitas (BBK) ke-2 yang diterjunkan di Desa Mertani, mengenalkan budidaya maggot untuk mengatasi permasalahan tersebut.</p>
              <a class="btn btn-lg" href="baca3.html" role="button" style="margin-top: 30px; background-color:#FFC474;"> <b>Lihat Selengkapnya</b></a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- SLIDER ARTIKEL -->
      <br>
    </div>
    <!-- SECTION 4 -->

   
    <!-- FOOTER -->

    <section class="footer">
      <!-- Footer -->
      <footer class="text-white">
        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-4">
              <h3 style="font-weight: bold; font-size: 35px;">OhMaggot !</h3>
              <img src="{{asset('images/icon/logomaggot.png')}}" alt="" class="logo">
    
              <p style="color: white;">
                <br>
                OhMaggot! adalah sebuah aplikasi yang dirancang untuk memberikan dukungan kepada para pemelihara Maggot dalam kegiatan budidaya mereka.
              </p>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-4" id="footer-center">
              <br><br>
              <div>
                <i class="fa-solid fa-location-dot"></i>
                <p> <a href="https://maps.app.goo.gl/ZVxACBi3DYQZvb1g8">Sekolah Vokasi - IPB</a></p>
              </div>
              <div>
                <i class="fa fa-phone"></i>
                <p>08xxxxxxxxx</p>
              </div>
              <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">ohmaggott@gmail.com</a></p>
              </div>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-lg-4">
              <br>
              <h5 style="margin-top: 200px;"><b>Social Media</b></h5>
    
              <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

              <!-- Instagram -->
              <a class="btn btn-outline-light" href="#!" role="button"><i class="fa-brands fa-instagram"></i></a>
            </div>

            <!--Grid column-->
          </div>

          <!--Grid row-->
        </div>

        <!-- Grid container -->
    
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 : SyntaxSquad ><
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    </section>

    <!-- FOOTER -->


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    
  </body>

</html>