<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TambahProduk-OhMaggot!</title>
    
        <link rel="Website Icon" href="{{asset('images/icon/logomaggot.png')}}" type="png">
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/formproduk.css')}}">
        <!-- FONT RUBIK -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
        <!-- ICON -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    
      </head>
      <body>

        <!-- FORM PRODUK -->
        
        <div class="container-xl" style="margin-top: 75px; margin-bottom: 75px;">
          <div class="card">
            <div class="card-header">
              <b style="color: #FFF7D4;">Product Details</b>
            </div>
            <div class="card-body">
              <form class="row g-3" id="formProduk" action="{{route('insertproduct')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                  <label for="name" class="form-label">Nama Produk</label>
                  <input type="name" class="form-control border-warning-subtle" name="name" id="name" required>
                </div>
                <div class="col-md-6">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="number" class="form-control border-warning-subtle" name="harga" id="harga" required>
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Deskripsi Produk</label>
                  <textarea class="form-control border-warning-subtle" id="description" name="description" rows="4" required></textarea>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="images" class="form-label">Upload Gambar</label>
                  <input class="form-control border-warning-subtle" type="file" id="images" name="images" accept="image/*" required>
                </div>

                <div class="col-auto">
                    <label for="stock" class="form-label">Stok Produk</label>
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
                

                <div class="d-grid gap-2 col-md-4 mx-auto">
                  <button class="btn s" type="submit" style="color: white;"><b>Simpan</b></button>
                  <button class="btn b" type="button"style="color: white;"><b>Batal</b></button>
                </div>
              </form>
            </div>
          </div>
        
        </div>



        
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="script.js"></script> 
        
    </body>
    </html>