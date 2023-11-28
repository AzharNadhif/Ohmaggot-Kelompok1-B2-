<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TambahArtikel-OhMaggot!</title>
    
        <link rel="Website Icon" href="{{asset('images/icon/logomaggot.png')}}" type="png">
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/formartikel.css')}}">
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
        
        <div class="container-xl " style="margin-top: 75px; margin-bottom: 75px;">
          <div class="card">
            <div class="card-header">
              <b style="color: #FFF7D4;">Article Details</b>
            </div>
            <div class="card-body">
              <form class="row g-3 " id="formArtikel" action="{{route('insertarticle')}}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                  <label for="namapenulis" class="form-label">Nama Penulis</label>
                  <input type="nama" class="form-control border-warning-subtle" name="penulis"  id="namapenulis" required placeholder="Masukkan nama penulis">
                </div>
                <div class="col-md-6">
                  <label for="tanggal" class="form-label">Tanggal Publish</label>
                  <input type="text" class="form-control border-warning-subtle" id="tanggal" name="tanggal" required placeholder="DD/MM/YY">
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">Judul Artikel</label>
                  <input type="text" class="form-control border-warning-subtle" id="judul"  name="judul" required placeholder="Masukkan judul">
                </div>
                <div class="mb-3">
                  <label for="isi" class="form-label">Isi Artikel</label>
                  <textarea class="form-control border-warning-subtle" id="isi" name="isi" rows="5" required></textarea>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="foto" class="form-label">Upload Gambar</label>
                    <input class="form-control border-warning-subtle" type="file" id="gambar" name="gambar" accept="image/*" required>
                  </div>
                <div class="col-md-6">
                  <label for="sumber" class="form-label">Sumber</label>
                  <input type="text" class="form-control border-warning-subtle" id="sumber" name="sumber" required placeholder="Masukkan sumber">
                </div>
                <div class="d-grid gap-2 col-md-6 mx-auto">
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