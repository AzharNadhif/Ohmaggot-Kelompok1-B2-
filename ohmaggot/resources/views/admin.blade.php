<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ohmaggot! - Admin</title>
    <link rel="Website Icon" href="{{asset('images/icon/logomaggot.png')}}" type="png">
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <!-- FONT RUBIK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- ICON -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    {{-- @foreach ($tes as $user)
    {{ $user->username }}
@endforeach

@foreach ($produk as $product)
    {{ $product->name}}
@endforeach --}}


<!-- SIDENAVVVV -->

    <div class="sidenav" id="mySidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Ohmaggot!</a>
        <br>
        <a href="#section1" onclick="openSection('section1')"><i class="fa-regular fa-user"></i> <b>Table User</b></a>
        <a href="#section2" onclick="openSection('section2')"><i class="fa-solid fa-cart-shopping"></i> <b>Table Produk</b></a>
        <a href="#section3" onclick="openSection('section3')"><i class="fa-regular fa-newspaper"></i> <b>Table Artikel</b></a>
        <a href="#section4" onclick="openSection('section4')"><i class="fa-regular fa-credit-card"></i> <b>Table Transaksi</b></a>
        <form action="{{route('logoutadmin')}}" method="POST">
            @csrf
            <button class="btn btn-danger logout">
                Logout
            </button>
        </form>
    </div>

    <div class="content">
        <span id="maggot" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <img src="images/icon/logomaggot.png" alt=""style="height:100px" class="rounded float-right">
        <br><br>
        <div class="card mt-2" style="max-width: 540px; margin-left:50px;">
                <div class="card-body">
                    <h4>Haloo, @if(auth()->check() && auth()->user()->role === 'admin')
                        <b>{{ auth()->user()->username }}</b> (Admin)
                    @else
                        <b>{{ auth()->user()->username }}</b>
                    @endif
                    </h4>
                    <p>silakan kelola data data</p>
                    <hr>
                </div>
        </div>
        <br><br>
        <div class="section-content" id="section1-content">
            <h2>Table Pengguna</h2>
            <div class="container">
                    

                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            {{-- <th>Aksi</th> --}}
                            <th>Username</th>
                            <th>Email</th>
                            {{-- <th>Password</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tes as $t)
                                <tr>
                                    
                                
                                        <td>{{ $t ->username }}</td>
                                        <td>{{$t -> email}}</td>
                                        {{-- <td>{{$t ->password}}</td> --}}
                                
                                </tr>
                            @endforeach
                           
                        

                        </tbody>
                    </table>
                    
                </div>
            </div>
        {{-- SECTION 2 --}}
        
        <div class="section-content" id="section2-content">
            <h2>Table Produk</h2>
            <a href="{{route('formproduk')}}" class="btn btn-primary" style="margin-bottom:30px">Tambah Produk</a>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>Aksi</th>
                            <th>Nama Produk</th>
                            <th>Deskripsi</th>
                            <th>Stock</th>
                            <th>Gambar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cUrl = curl_init();

                            $options = array(
                                CURLOPT_URL => 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/getProduct',
                                CURLOPT_CUSTOMREQUEST => 'GET',
                                CURLOPT_RETURNTRANSFER => TRUE
                            );

                            curl_setopt_array($cUrl, $options);

                            $response = curl_exec($cUrl);

                            $data = json_decode($response);

                            curl_close($cUrl);
                            foreach ($produk as $row) :
                                echo '<tr>
                                <td> 
                                    <a href="javascript:void(0);" class="btn btn-warning btn-sm edit" data-id="' . $row->_id .'">Ubah</a> | 
                                    <form action="' . route('deleteproduct', ['id' => $row->_id]) . '" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="' . csrf_token() . '">
                                            <button type="submit"  class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah anda yakin akan menghapus data?\')">Hapus</button>
                                        </form>';
                                    
                                echo '<td>' . (empty($row->name) ? '' : $row->name) . '</td>';
                                echo '<td>' . (empty($row->description) ? '' : $row->description) . '</td>';
                                echo '<td>' . (empty($row->stock) ? 'Kosong' : 'Tersedia') . '</td>';
                                echo '<td>' . (empty($row->harga) ? '' : $row->harga) . '</td>';
                                echo '<td>';
                                if (!empty($row->images)) {
                                    if (is_string($row->images)) {
                                        // Pastikan URL gambar dibangun dengan benar
                                        echo '<img src="images/produk/' . htmlspecialchars($row->images) . '" width="100" height="100">';
                                    } else {
                                        echo 'Invalid image data'; // Atau tangani kasus di mana $row->gambar bukan string
                                    }
                                }
                               
                                '</tr>';
                            endforeach;

                            if (empty($data)) {
                                echo '<tr><td colspan="5" class="text-center">Tidak ada data</td></tr>';
                            }
                            ?>
                        </tbody>
                    </table>


                     <!-- Modal update produk -->
                     <form action="" method="POST" class="contact-form" enctype="multipart/form-data" id="formUpdate">
                        @method('PUT')
                        @csrf
                        <div class="modal modal-blur fade" id="updateProduct" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Update Artikel</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="result"></div>
                                        <div class="mb-3">
                                            <label class="form-label">Nama Produk</label>
                                            <input type="text" class="form-control" name="name" id="name">
                                            <input type="hidden" id="id" name="id">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Deskripsi</label>
                                            <input type="text" class="form-control" name="description" id="description">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Stock</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="stock" id="stokTrue" value="true" checked>
                                                <label class="form-check-label" for="stokTrue" name="stock">
                                                    tersedia
                                                </label>
                                            </div>
                                        
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="stock" id="stokFalse" value="false">
                                                <label class="form-check-label" for="stokFalse" name="stock">
                                                    kosong
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Harga</label>
                                            <input type="text" class="form-control" name="harga" id="harga">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Gambar</label> <br>
                                            <img id="currentimage" src="" alt="Current Image" style=" height: 200px;" />
                                            <input type="file" class="form-control" name="images">
                                            <input type="hidden" name="gambarLama" id="gambarLama">
                                        </div>
                                        

                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-danger" data-bs-dismiss="modal">
                                            Cancel
                                        </a>
                                        <button type="submit" class="btn btn-warning">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                     <!-- Jquery Core Js -->
                     <script src="/assets/bundles/libscripts.bundle.js"></script>

                     <!-- Plugin Js -->
                     <script src="/assets/bundles/apexcharts.bundle.js"></script>
                     <script src="/assets/bundles/dataTables.bundle.js"></script>
 
                     <!-- Jquery Page Js -->
                     <script src="/assets/js/page/index.js"></script>
                     <script src="/assets/js/page/template.js"></script>
                    
 
                     <script>
                         $(document).ready(function() {
                             $('.edit').click(function() {
                                 var id = $(this).data('id');
                                 console.log(id);
                 
                                 $.ajax({
                                     url: 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/getProductById?id=' + id,
                                     type: 'GET',
                                     success: function(res) {
                                         var data = res[0];
                                         // console.log(data);return
                                         $('#updateProduct').modal('show');
                 
                                         $('#id').val(data._id);
                                         $('#name').val(data.name);
                                         $('#description').val(data.description);
                                         $('#stock').val(data.stock);
                                         $('#harga').val(data.harga);   
                                         $('#currentimage').attr('src', "{{ asset('images/produk') }}/"+data.images); // Set the source of the image
                                         $('#gambarLama').val(data.images); // Set the value of the hidden input
                  
                                         var updateAction = "{{ route('updateproduct', ':id') }}".replace(':id', data._id);
                                         $('#formUpdate').attr('action', updateAction);
                                     },
                 
                                     error: function(err) {
                                         console.log(err);
                                     }
                                 });
                             });
                         });
                     </script>








        </div>
        
        <div class="section-content" id="section3-content">
            <h2>Table Artikel</h2>
            <a href="{{route('formartikel')}}" class="btn btn-primary" style="margin-bottom:30px">Tambah Artikel</a>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>Aksi</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Penulis</th>
                            <th>Tanggal</th>
                            <th>Isi</th>
                            <th>Sumber</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cUrl = curl_init();

                            $options = array(
                                CURLOPT_URL => 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/getArtikel',
                                CURLOPT_CUSTOMREQUEST => 'GET',
                                CURLOPT_RETURNTRANSFER => TRUE
                            );

                            curl_setopt_array($cUrl, $options);

                            $response = curl_exec($cUrl);

                            $data = json_decode($response);

                            curl_close($cUrl);
                            foreach ($artikel as $row) :
                                echo '<tr>
                                <td> 
                                    <a href="javascript:void(0);" class="btn btn-warning btn-sm edit" data-id="' . $row->_id .'">Ubah</a> | 
                                    <form action="' . route('deletearticle', ['id' => $row->_id]) . '" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="' . csrf_token() . '">
                                            <button type="submit"  class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah anda yakin akan menghapus data?\')">Hapus</button>
                                        </form>';
                                    
                                echo '<td>' . (empty($row->judul) ? '' : $row->judul) . '</td>';
                                echo '<td>';
                                if (!empty($row->gambar)) {
                                    if (is_string($row->gambar)) {
                                        // Pastikan URL gambar dibangun dengan benar
                                        echo '<img src="images/artikel/' . htmlspecialchars($row->gambar) . '" width="100" height="100">';
                                    } else {
                                        echo 'Invalid image data'; // Atau tangani kasus di mana $row->gambar bukan string
                                    }
                                }
                                echo '<td>' . (empty($row->penulis) ? '' : $row->penulis) . '</td>';
                                echo '<td>' . (empty($row->tanggal) ? '' : $row->tanggal) . '</td>';
                                echo '<td>' . (empty($row->isi) ? '' : $row->isi) . '</td>';
                                echo '<td>' . (empty($row->sumber) ? '' : $row->sumber) . '</td>';


                                // if (is_object($row) || is_array($row)) {
                                //     echo '<td>' . (empty($row->isi) ? '' : substr($row->isi, 0, 200)) . '</td>';
                                // } else {
                                //     echo '<td>$row is not an object or array: ' . gettype($row) . '</td>';
                                // }


                               

                               
                                '</tr>';
                            endforeach;

                            if (empty($data)) {
                                echo '<tr><td colspan="5" class="text-center">Tidak ada data</td></tr>';
                            }
                            ?>
                        </tbody>
                    </table>

                    <!-- Modal update artikel -->
                    <form action="" method="POST" class="contact-form" enctype="multipart/form-data" id="formupdate">
                        @method('PUT')
                        @csrf
                        <div class="modal modal-blur fade" id="modal-update" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Update Artikel</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="result"></div>
                                        <div class="mb-3">
                                            <label class="form-label">Judul</label>
                                            <input type="text" class="form-control" name="judul" id="judul">
                                            <input type="hidden" id="id" name="id">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Gambar</label>
                                            <img id="currentImage" src="" alt="Current Image" style="max-width: 100%; height: auto;" />
                                            <input type="file" class="form-control" name="gambar">
                                            <input type="hidden" name="gambarlama" id="gambarlama">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Penulis</label>
                                            <input type="text" class="form-control" name="penulis" id="penulis">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tanggal</label>
                                            <input type="text" class="form-control" name="tanggal" id="tanggal">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Isi</label>
                                            <input type="text" class="form-control" name="isi" id="isi">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Sumber</label>
                                            <input type="text" class="form-control" name="sumber" id="sumber">
                                        </div>
                                        

                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-danger" data-bs-dismiss="modal">
                                            Cancel
                                        </a>
                                        <button type="submit" class="btn btn-warning">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                     <!-- Jquery Core Js -->
                    <script src="/assets/bundles/libscripts.bundle.js"></script>

                    <!-- Plugin Js -->
                    <script src="/assets/bundles/apexcharts.bundle.js"></script>
                    <script src="/assets/bundles/dataTables.bundle.js"></script>

                    <!-- Jquery Page Js -->
                    <script src="/assets/js/page/index.js"></script>
                    <script src="/assets/js/page/template.js"></script>
                   

                    <script>
                        $(document).ready(function() {
                            $('.edit').click(function() {
                                var id = $(this).data('id');
                                console.log(id);
                
                                $.ajax({
                                    url: 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/getArticleByid?id=' + id,
                                    type: 'GET',
                                    success: function(res) {
                                        var data = res[0];
                                        // console.log(data);return
                                        $('#modal-update').modal('show');
                
                                        $('#id').val(data._id);
                                        $('#judul').val(data.judul);
                                        $('#penulis').val(data.penulis);
                                        $('#tanggal').val(data.tanggal);
                                        $('#isi').val(data.isi);         
                                        $('#sumber').val(data.sumber);      
                                        $('#currentImage').attr('src', "{{ asset('images/artikel') }}/"+data.gambar); // Set the source of the image
                                        $('#gambarlama').val(data.gambar); // Set the value of the hidden input
                 
                                        var updateAction = "{{ route('update', ':id') }}".replace(':id', data._id);
                                        $('#formupdate').attr('action', updateAction);
                                    },
                
                                    error: function(err) {
                                        console.log(err);
                                    }
                                });
                            });
                        });
                    </script>

        </div>
        

        {{-- SECTION 4 --}}
        <div class="section-content" id="section4-content">
            <h2>Table Transaksi</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>Nama</th>
                    <th>No. Telepon</th>
                    <th>Alamat</th>
                    <th>Keterangan</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Bukti Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $tr)
                        <tr>
                            <td>{{ $tr ->nama }}</td>
                            <td>{{ $tr ->telepon }}</td>
                            <td>{{ $tr ->alamat }}</td>
                            <td>{{ $tr ->keterangan }}</td>
                            <td>{{ $tr ->produk }}</td>
                            <td>{{ $tr ->harga }}</td>
                            <td>{{ $tr ->quantity }}</td>
                            <td>{{ $tr ->total }}</td>
                            {{-- <td>{{ $tr ->bukti }}</td> --}}
                            <td>
                                <p>Nama File : {{$tr -> bukti}}</p> 
                                <br>
                                <img src="images/bukti/{{ $tr ->bukti}}" class="artikel">
                            </td>
                
                        </tr>
                    @endforeach
                    
                

                </tbody>
            </table>
        </div>
    </div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.left = "0";
        document.querySelector(".content").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.left = "-250px";
        document.querySelector(".content").style.marginLeft = "0";
    }

    function openSection(sectionId) {
        // Sembunyikan semua konten section
        const sectionContents = document.getElementsByClassName("section-content");
        for (let i = 0; i < sectionContents.length; i++) {
            sectionContents[i].style.display = "none";
        }

        // Tampilkan konten yang sesuai
        document.getElementById(sectionId + "-content").style.display = "block";
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
