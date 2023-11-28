<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OhMaggot Checkout!</title>
    
        <link rel="Website Icon" href="{{asset('images/icon/logomaggot.png')}}" type="png">
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/thanks.css')}}">
        <!-- FONT RUBIK -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
        <!-- ICON -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Bootstrap JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.min.js"></script>
    </head>
<body>
     <!-- NAVBAR -->
     <div class="navbar">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img src="{{asset('images/icon/logomaggot.png')}}" alt="" height="120px"
                    class="d-inline-block align-text-top">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="#navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
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


    <div class="container">

        <div class="text-center">
            <img class="keranjang" src="{{asset('images/icon/shopping.png')}}" alt="">
            <h1 class="fw-bold">Terima Kasih !</h1>
            <h4>
                Pesanan Anda Akan Kami Proses <br>
                dan Akan Segera Dikirim ke Alamat Tujuan
            </h4>
            <br>
            <br>
            <!-- Tambahkan atribut data-toggle pada tombol untuk memudahkan identifikasi -->
            <button class="btn btn-warning btn-lg fw-bold rounded-pill tranksip" id="toggle" data-toggle="transkip">Lihat Transkip</button>

            <br><br>
            <?php
                            if (auth()->check()) {
                                $username = auth()->user()->username;
                            }

                             $cUrl = curl_init();

                            $options = array(
                                CURLOPT_URL => 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/getTransaksiByUsername?username=' . $username,
                                CURLOPT_CUSTOMREQUEST => 'GET',
                                CURLOPT_RETURNTRANSFER => true
                            );

                            curl_setopt_array($cUrl, $options);

                            $response = curl_exec($cUrl);

                            $transaksi = json_decode($response);

                            curl_close($cUrl);
                            
                            foreach ($transaksi as $tr ) :

                            echo '<div class="square card mb-3 shadow" style="max-width: 900px; margin: 0 auto;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    
                                    <img src="' . asset('images/produk/' . $tr->fotoproduk) . '" class="card-img border-0" style="height: 100%; object-fit: cover;">
                                </div>
                            <div class="col-md-8 text-start">
                                <div class="card-body">';


                            echo '<h4>Transkip Order</h4>
                            <hr>
                            <p class="card-title fw-bold" style="font-size: 25px">' . $tr->produk . '</p>'
                            . '<p class="card-text">Nama Penerima : ' . $tr->nama . '</p>'
                            . '<p class="card-text">Nomor Telepon : ' . $tr->telepon . '</p>'
                            . '<p class="card-text">Alamat : ' . $tr->alamat . '</p>'
                            . '<p class="card-text">Kode Pos : ' . $tr->keterangan . '</p>'
                            . '<p class="card-text">Harga : Rp. ' . $tr->harga . '</p>'
                            . '<p class="card-text">Jumlah : ' . $tr->quantity . ' Buah </p>'
                            . '<p class="card-text fw-bold">Total Harga : Rp.' . $tr->total . ' </p>';
                       
                       
                  
                    echo'</div>
                  </div>
                </div>
              </div>';
              endforeach;
              ?>
            {{-- <div id="square" class="rounded shadow " style="background-color: #FFD95A; width: 900px; height: 400px; margin: 0 auto;">
                <br>
                <h1 class="text-start fw-bold" style="margin-left: 30px">Pupuk Maggot</h1>
                <br>
                <img src="{{asset('images/produk/pupuk.jpeg')}}" class="produk rounded shadow-sm">
                
                <div class="text-start" style="margin-left: 320px">
                    <h5 class="text-start">
                        Nama Penerima : <br>
                        Bayu
                    </h5>
                    <h5 class="text-start">
                        No. Telepon : <br>
                        08952713671
                    </h5>
                    <h5 class="text-start">
                        Alamat : <br>
                        Jl. Malabar Utara blok D4/No.2D 1243 ( Rumah Warna Biru)
                    </h5>
                    
                </div>
                
                <div class="text-start" style="margin-left: 30px">
                    <h4 >Harga      : Rp.35.000</h4>
                    <h4>Jumlah      : 2 Buah</h4>
                    <h4>Total Harga : Rp. 70.000</h4>
                </div>
            </div> --}}
            <br><br>


        </div>

    </div>


    <!-- Sertakan jQuery (pastikan untuk menyertakan jQuery sebelum skrip JavaScript) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Skrip JavaScript untuk mengubah teks tombol -->
    <script>
        $(document).ready(function() {
            var squares = $('.square');
    
            // Sembunyikan elemen .square saat halaman dimuat
            squares.hide();
    
            $("#toggle").click(function() {
                // Menampilkan/menyembunyikan elemen dengan kelas .square
                squares.toggle();
    
                // Mengubah teks tombol berdasarkan kondisi sebelumnya
                var newText = (squares.is(":visible")) ? "Tutup Transkip" : "Lihat Transkip";
                $(this).text(newText);
            });
        });
    </script>










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
                        <img src="images/logomaggot.png" alt="" class="logo">

                        <p style="color: white;">
                            <br>
                            OhMaggot! adalah sebuah aplikasi yang dirancang untuk memberikan dukungan kepada para
                            pemelihara Maggot dalam kegiatan budidaya mereka.
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
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="fab fa-twitter"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light" href="#!" role="button"><i
                                class="fa-brands fa-instagram"></i></a>
                    </div>

                    <!--Grid column-->
                </div>

                <!--Grid row-->
            </div>

            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 : SyntaxSquad >< </div> <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>

    <!-- FOOTER -->
</body>
</html>