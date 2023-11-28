<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class FormprodukController extends Controller
{
    public function show(){  
            if(Auth::check()){
                return view('formproduk');
            }else{
                return redirect('/sign-in');
            }
        
    }

    public function insertProduct(Request $request){

        $namaproduk = $request->input('name');
        $description = $request->input('description');
        $stock = $request->has('stock') && $request->input('stock') == true;
        $harga = $request->input('harga');
    
        // Menggunakan request untuk mengelola pengunggahan gambar
        $gambar = $request->file('images');
 
        // Validasi file
        if ($gambar && $gambar->isValid()) {
            // Mendapatkan nama unik untuk gambar
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
    
            // Pindahkan gambar ke folder tujuan (misalnya, public/images)
            $gambar->move(public_path('images/produk'), $namaGambar);
    
            $response = Http::post('https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/insertProduct',[
                'name'=>$namaproduk,
                'description'=>$description,
                'stock'=>$stock,
                'harga'=>$harga,
                'images'=>$namaGambar,
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
        } else {
            // Tangani kesalahan, file tidak diunggah atau tidak valid
            return 'Error: Gambar tidak diunggah atau tidak valid.';
        }
    }
}
