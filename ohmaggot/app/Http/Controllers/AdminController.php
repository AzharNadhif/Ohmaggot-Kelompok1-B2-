<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function show() {
        if(Auth::check()){
            // $user = Auth::user();
            $data = User::where('role', 'user')->get();
            $produk = Product::all();
            $artikel = Article::all();
            $transaksi = Transaction::all();
           
            // $user = Auth::user();


            // if ($user->role == 'admin') {
            return view('admin', [
                    "tes" => $data,
                    "produk" => $produk,
                    "artikel" => $artikel,
                    "transaksi" => $transaksi,
                ]);
            // } else {
            //     // Jika peran bukan 'admin', lakukan logout dan kembalikan pengguna ke halaman login
            //     Auth::logout();
            //     return redirect('loginuser')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
            // }

        }else{
            return redirect('/sign-in');
        }
    }

   

    public function deleteproduct(string $id){
        $produk = Product::find($id);

        $response = Http::delete('https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/deleteProductById?id='.$produk->id);

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            return redirect('/Admin#section2');
            // Gantilah 'admin' dengan nama rute yang sesuai
        }
    }

    public function deletearticle(string $id){
        $artikel = Article::find($id);

        $response = Http::delete('https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/deleteArticleById?id='.$artikel->id);

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            return redirect('/Admin#section2');
            // Gantilah 'admin' dengan nama rute yang sesuai
        }
    }

    public function updateArticle(Request $request, $id){

        $artikel = Article::find($id);
        
        $judul = $request->input('judul');
        $penulis = $request->input('penulis');
        $tanggal = $request->input('tanggal');
        $isi = $request->input('isi');
        $sumber = $request->input('sumber');
        $gambarlama = $request->input('gambarlama');
        // Menggunakan request untuk mengelola pengunggahan gambar
        $gambar = $request->file('gambar');
    
        // Validasi file
        if ($gambar && $gambar->isValid()) {
            // Mendapatkan nama unik untuk gambar
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
    
            // Pindahkan gambar ke folder tujuan (misalnya, public/images)
            $gambar->move(public_path('images/artikel'), $namaGambar);
    
           
        } else {
            $namaGambar = $gambarlama; 
            // Tangani kesalahan, file tidak diunggah atau tidak valid
            // return 'Error: Gambar tidak diunggah atau tidak valid.';
        }

        $response = Http::put('https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/updateArticle', [
            'id' => $id,
            'judul' => $judul,
            'penulis' => $penulis,
            'tanggal' => $tanggal,
            'isi' => $isi,
            'sumber' => $sumber,
            'gambar' => $namaGambar,
        ]);

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            return redirect('/Admin');
            // Gantilah 'login' dengan nama rute yang sesuai
        }
    }

    public function updateProduct(Request $request, $id){

        $produk = Product::find($id);
        
        $nama = $request->input('name');
        $deskripsi = $request->input('description');
        $stock = $request->input('stock');
        // Konversi nilai 'true' atau 'false' dari string ke boolean
        $stock = ($stock === 'true');        
        $harga = $request->input('harga');
        $gambarlama = $request->input('gambarLama');
        // Menggunakan request untuk mengelola pengunggahan gambar
        $gambar = $request->file('images');
    
        // Validasi file
        if ($gambar && $gambar->isValid()) {
            // Mendapatkan nama unik untuk gambar
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
    
            // Pindahkan gambar ke folder tujuan (misalnya, public/images)
            $gambar->move(public_path('images/produk'), $namaGambar);
    
           
        } else {
            $namaGambar = $gambarlama; 
            // Tangani kesalahan, file tidak diunggah atau tidak valid
            // return 'Error: Gambar tidak diunggah atau tidak valid.';
        }

        $response = Http::put('https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/updateProduct', [
            'id' => $id,
            'name' => $nama,
            'description' => $deskripsi,
            'stock' => $stock,
            'harga' => $harga,
            'images' => $namaGambar,
        ]);

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            return redirect('/Admin');
            // Gantilah 'login' dengan nama rute yang sesuai
        }
    }
    



    

    
        
}

