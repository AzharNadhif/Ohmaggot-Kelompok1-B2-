<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class FormarticleController extends Controller
{
    public function show(){
        if(Auth::check()){
            return view('formartikel');
        }else{
            return redirect('/sign-in');
        }
    }

    public function insertArticle(Request $request){

        $judul = $request->input('judul');
        $penulis = $request->input('penulis');
        $tanggal = $request->input('tanggal');
        $isi = $request->input('isi');
        $sumber = $request->input('sumber');
    
        // Menggunakan request untuk mengelola pengunggahan gambar
        $gambar = $request->file('gambar');
        
        // Validasi file
        if ($gambar && $gambar->isValid()) {
            
            // Mendapatkan nama unik untuk gambar
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            
            // Pindahkan gambar ke folder tujuan (misalnya, public/images)
            $gambar->move(public_path('images/artikel'), $namaGambar);
    
            $response = Http::post('https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/insertArticle', [
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
        } else {
            // Tangani kesalahan, file tidak diunggah atau tidak valid
            return 'Error: Gambar tidak diunggah atau tidak valid.';
        }
    }
    

}
