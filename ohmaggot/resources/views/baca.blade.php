<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="Website Icon" href="{{asset('images/icon/logomaggot.png')}}" type="png">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/baca.css')}}">
    <!-- FONT RUBIK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- ICON -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>{{$artikel->judul}} </title>
    

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
  
    <!-- SECTION 1 -->
    <div class="section1">
        {{-- {{ $artikel }} --}}
        {{-- {{-- @foreach ($artikel as $ar) --}}
            
            <div class="artikel">
                <br>
                <h1> <b> {{$artikel->judul}} </b></h1>
                <br>
                <img src="/images/artikel/{{$artikel->gambar}}">
                <br><br>

                <h6><b>{{$artikel->tanggal}} - Oleh {{$artikel->penulis}}</b></h6>

                <p>
                  {!! nl2br(e($artikel->isi))!!}
                </p>
                <a href="#">Sumber Artikel : </a>
                <p>
                    <a href="#">{{$artikel->sumber}}</a>
                </p>
                <br>
                
                <br>
            </div>

        {{-- @endforeach --}}

    </div>

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
    
</body>
</html>