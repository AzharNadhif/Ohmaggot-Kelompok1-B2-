<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About OhMaggot!</title>

    <link rel="Website Icon" href="images/icon/logomaggot.png" type="png">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/about.css">
    <!-- FONT RUBIK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- ICON -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>

  <body>
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

    <!-- ABOUT US -->
    <div class="aboutmg">
      {{-- <img src="images/background/header.jpg" class="img-fluid" style="width:100%;"> --}}

      <!-- SECTION 1 -->
      <div class="sec1" style="padding: 5%;">
        <div class="row">
          <div class="col-6">
            <h1 class="fw-bold ">About Us</h1>
            <br>
            <p style="text-align: justify">
              Kehidupan manusia dipengaruhi oleh perkembangan dan inovasi di berbagai bidang, termasuk industri pertanian. Salah satu permasalahan umum dalam industri ini adalah kenaikan harga pakan hewan ternak setiap hari. Untuk mengatasi hal ini, diperlukan solusi yang dapat membantu petani mengurangi pengeluaran dan sekaligus bersahabat dengan lingkungan. Salah satu solusi menarik adalah pemanfaatan larva BSF (Black Soldier Fly) atau Maggot.
              <br><br> 
              <b style="font-size: 20px">OhMaggot!</b> hadir sebagai sebuah aplikasi e-commerce yang dirancang untuk mendukung kesejahteraan para peternak larva maggot dalam menjalankan kegiatan budidaya mereka, dengan cara membantu mereka dalam memperkenalkan dan meningkatkan penjualan produk mereka melalui kemitraan dengan para peternak maggot. Saat ini aplikasi OhMaggot berfokus menjadi supplier hasil pertanian dan produk olahan para petani maggot.
              <br>
            </p>
            
          </div>
          <div class="col-6">
            <img src="{{asset('images/background/koin.png')}}" style="height:500px; margin-left:100px" >
          </div>
        </div>
      </div>
    
      <!-- SECTION 2 -->
      <div class="sec2" style="padding: 5%;">
        <h1 class="fw-bold">Our Team</h1>
        <p style="margin-top: 35px;">The whole team who will strive to do our best, we are SyntaxSquad><.</p>

          <!-- CARD BOX -->
          <div class="about-container">

            <!-- BOX 1 -->
            <div class="zoommg">
                <div class="zoom">
                    <!-- Team Member 1-->
                    <div class="card" style="width: 12rem;">
                        <img src="images/background/alya.png" class="card-img-top" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Alya Putri Salsabila</h5>
                            <p class="card-text"><small class="text-body-secondary">Project Manager</small></p>
                        </div>
                    </div>   
                </div>         
            </div>

            <!-- BOX 2 -->
            <div class="zoommg">
                <div class="zoom">
                    <!-- Team Member 2-->
                    <div class="card" style="width: 12rem;">
                        <img src="images/background/nadhif.png" class="card-img-top" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Azhar Nadhif Annaufal</h5>
                            <p class="card-text"><small class="text-body-secondary">Full-Stack Developer</small></p>
                        </div>
                    </div>
                </div>                
            </div>

            <!-- BOX 3 -->
            <div class="zoommg">
                <div class="zoom">
                    <!-- Team Member 3-->
                    <div class="card" style="width: 12rem;">
                        <img src="images/background/siti.png" class="card-img-top" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Siti Farah Fakhirah</h5>
                            <p class="card-text"><small class="text-body-secondary">System Analyst</small></p>
                        </div>
                    </div>        
                </div>    
            </div>

            <!-- BOX 4 -->
            <div class="zoommg">
                <div class="zoom">
                    <!-- Team Member 4-->
                    <div class="card" style="width: 12rem;">
                        <img src="images/background/ari.png" class="card-img-top" alt="Team Member.">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Aridian <br> Prastyo</h5>
                            <p class="card-text"><small class="text-body-secondary">Front-End Developer</small></p>
                        </div>
                    </div>        
                </div>        
            </div>

            <!-- BOX 5 -->
            <div class="zoommg">
                <div class="zoom">
                    <!-- Team Member 5-->
                    <div class="card" style="width: 12rem;">
                        <img src="images/background/david.png" class="card-img-top" alt="Team Member.">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">David Reza Widhiwiphati</h5>
                            <p class="card-text"><small class="text-body-secondary">UI/UX Desiger</small></p>
                        </div>
                    </div>    
                </div>        
            </div>  
          </div>
      </div>

      <!-- SECTION 3 -->
      <div class="sec3" style="padding: 5%;">
        <h1 class="text-center fw-bold" style="margin-bottom: 50px;">Fiture of Application</h1>
        
            <div class="about-cotainer2">
              <!-- FITUR 1 -->
                <br>
                <div class="row">
                    <div class="col-4">
                        <div class="fitur-img">
                            <img src="images/icon/community.png" alt="Fitur Aplikasi">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="fitur-teks">
                            <h5 class="card-title fw-bold">MAGGOT GROWERS</h5>
                            <p class="card-text"><small class="text-body-secondary"></small>Layanan pesan atau forum komunitas antara pembudidaya dan konsumen maggot.</small></p>
                          </div>
                    </div>
                </div>

              <!-- FITUR 2 -->
                <br>
                <div class="row">
                    <div class="col-4">
                        <div class="fitur-img">
                            <img src="images/icon/marketplace.png" alt="Fitur Aplikasi">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="fitur-teks">
                            <h5 class="card-title fw-bold">MAGGOT MARKET</h5>
                            <p class="card-text"><small class="text-body-secondary"></small>Layanan e-commerce untuk memasarkan produk-produk olahan maggot atau maggot murni yang bisa didapatkan dengan mudah dan praktis.
                            </small></p>
                        </div>
                    </div>
                </div>


            <!-- FITUR 3 -->

            <br>
            <div class="row">
                <div class="col-4">
                    <div class="fitur-img">
                        <img src="images/icon/animalcare.png" alt="Fitur Aplikasi">
                    </div>
                </div>
                <div class="col-8">
                    <div class="fitur-teks">
                        <h5 class="card-title fw-bold">IMAGGOT</h5>
                        <p class="card-text"><small class="text-body-secondary"></small>Layanan informasi seputar perkembangan dan pemanfaatan maggot, informasi perawatan, dan saran budidaya maggot. </small></p>
                    </div>
                </div>
            </div>
        </div>
        <div>
          <br><br>
          <h1 class="fw-bold text-center">Lokasi</h1>
          <br>
          <!--Google map-->
          <div class="maps">
              <div id="map-container-google-2 maps" class="z-depth-1-half map-container"  >
                <iframe src="https://maps.google.com/maps?q=Bogor&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" class="peta"
              allowfullscreen></iframe>
              </div>
          </div>
          <!--Google Maps-->
        </div>
      </div>


    </section>


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
              <img src="images/icon/logomaggot.png" alt="" class="logo">
    
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
    
    
  </body>
</html>