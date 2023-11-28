<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artikel OhMaggot!</title>

    <link rel="Website Icon" href="{{asset('images/icon/logomaggot.png')}}" type="png">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/article.css')}}">
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

<!-- Section -->
<section>
  {{-- @foreach ($artikel as $ar)
    {{$ar}}
      
  @endforeach --}}
    <div class="container">
     
      <h1 style="text-align: center; margin-top: 100px;"><b> Artikel OhMaggot</b></h1>
      <h6 class="text-center" style="margin-bottom: 100px;"> Temukan berbagai macam artikel untuk menambah pengetahuan seputar maggot</h6> 

      @foreach ($artikel as $ar)
          
      
        <div class="blog-post">
            <div class="blog-post_img">
              <img class="zoom-2" src="images/artikel/{{$ar->gambar}}" alt="Deskripsi gambar Anda">
            </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                    <span>Oleh {{$ar->penulis}}</span>
                    <span>{{$ar->tanggal}}</span>
                </div>
                <h1 class="blog-post_title">{{$ar->judul}}</h1>
                <p class="blog-post_text">{{ substr($ar->isi, 0, 250) }}...</p>
                <a href="{{route('baca', ['id'=>$ar->_id])}}" class="blog-post_cta">Read More</a>
            </div>
        </div>

      @endforeach
  
     
</section>
<!-- Section -->

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