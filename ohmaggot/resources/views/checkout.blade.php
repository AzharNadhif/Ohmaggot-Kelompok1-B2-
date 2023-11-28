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
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
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
    <!-- <h1>CHECKOUT</h1> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

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

    <!-- TAMPILAN KERANJANG -->
    <div class="container" style="margin-top: 80px; margin-bottom: 80px;">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-warning">Rincian Pesanan</span>
                        </h3>
        <form id="formCheckout" action="{{route('order')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_id" value="{{$produk->_id}}">
                            <ul class="list-group mb-1 " style="border: 0;">
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div class="d-flex flex-column mb-1">
                                        <h6 class="my-0">
                                            <span id="produk" class="text-body-secondary">{{$produk->name}}</span>
                                        </h6>
                                        <input type="hidden" id="fotoproduk" value="{{$produk->images}}">
                                    </div>                             
                                </li>
                            </ul>
                            <br>
                            <ul class="list-group mb-3 " style="border: 0;">
                                <li class="list-group-item d-flex justify-content-between lh-sm"> 
                                    <div class="d-flex flex-column mb-1">   
                                        <div class="d-flex align-items-center mt-1">
                                            <span class="text-body-secondary">Rp.</span>
                                           
                                            <input type="text" id="harga" class="text-body-secondary" style="border: 0px;" value="{{$produk->harga}}" disabled>
                                            

                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div>
                                <label class="form-label" for="quantity">Jumlah</label>
                                <input type="number" id="quantity" name="quantity" class="form-control"
                                    placeholder="Quantity" min="1">
                            </div>
                            <br>
                            <div>
                                <button class="btn btn-warning" onclick="hitung()">Hitung</button>
                            </div>
                            <div class="d-flex justify-content-between" style="margin-top: 50px;">
                                <span class="text-warning"><b>Total Harga</b></span>
                                <p style="font-weight: bold">Rp. <span id="totalHarga" name="total"></span></p>
                            </div>
                            <script>
                                // Mendapatkan nilai dari input hidden
                                var fotoProduk = document.getElementById('fotoproduk').value;
                        
                                // Menampilkan URL gambar di console (ini hanya contoh)
                                console.log('URL Gambar:', fotoProduk);
                            </script>

                    </div>
                </div>
            </div>

            <!-- TAMPILAN DATA USER -->
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h5 class="mb-2 text-warning"><b>Pemesanan</b></h5>
                            </div>


                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama"
                                    placeholder="Masukan Nama Lengkap Anda" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="noTelp" class="form-label">Nomor Telepon</label>
                                <input type="number" class="form-control" id="telepon"
                                    placeholder="Masukan Nama Nomor Telepon Anda" name="telepon" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" rows="3"
                                    placeholder="Masukan Alamat Lengkap Anda" name="alamat" required></textarea>
                            </div>
                            <div class="mb-3" style="margin-bottom: 20px;">
                                <label for="detail" class="form-label">Kode Pos</label>
                                <input type="number" class="form-control" id="detail" name="keterangan" required
                                    placeholder="Masukkan Kode Pos">
                            </div>
                            <div class="d-grid gap-1 col-2 mx-auto" style="margin-bottom: 15px;">
                                <!-- Tombol Order Now -->
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#orderModal">Pesan</button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="orderModal" tabindex="-1" role="dialog"
                                aria-labelledby="orderModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="orderModalLabel">Upload Bukti Transaksi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Isi formulir modal disini -->
                                            {{-- <form> --}}
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="act3">
                                                        <div class="card-body border border-top-0 rounded-bottom">
                                                            <h5 class="card-title"><b>Transfer ke akun bank di bawah
                                                                    ini</b></h5>
                                                            <span class="d-block my-2">Akun bank OhMaggot Store</span>
                                                            <span
                                                                class="d-block text-warning font-weight-bold my-2">123-XXXXXXXXXXXXXXXX</span>
                                                            <p class="card-text">Kami akan memproses pesanan anda setelah anda melakukan pembayaran.<br>Lalu akan memproses pengiriman paket anda hingga sampai ke tujuan</p>
                                                            <br>
                                                            <div class="mb-3">
                                                                <label for="buktiPembayaran" class="form-label">Upload
                                                                    Bukti
                                                                    Pembayaran</label>
                                                                <input type="file" class="form-control" id="bukti" name="bukti" accept="image*/" required>
                                                                
                                                            </div>
                                            {{-- </form> --}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-warning">Submit Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
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


    <!-- JS -->
    <script>
        function hitung() {
            var harga = document.getElementById('harga').value;
            var quantity = document.getElementById('quantity').value;

            // Periksa apakah harga dan quantity berisi angka
            if (isNaN(harga) || isNaN(quantity)) {
                alert('Harga dan Quantity harus berupa angka.');
                return;
            }

            // Hitung total
            var total = harga * quantity;

            // Tampilkan hasil di dalam span dengan id totalHarga
            document.getElementById('totalHarga').innerText = total;
        }

    </script>

    <!-- Skrip JavaScript -->
    <script>
        document.getElementById('order').addEventListener('click', function () {
            // Temukan modal berdasarkan ID
            var modal = document.getElementById('orderModal');

            // Tampilkan modal
            modal.style.display = 'block';
        });

    </script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Skrip jQuery -->
    <script>
        $(document).ready(function () {
            $('#order').click(function () {
                $('#orderModal').modal('show');
            });
        });

    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>

</body>

</html>
