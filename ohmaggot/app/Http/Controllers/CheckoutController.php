<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class CheckoutController extends Controller
{
    public function show(String $id) {
        $produk = Product::find($id);
        if(Auth::check()){
            return view('checkout', [
                "produk" => $produk
            ]);
        }else{
            return redirect('/loginuser');
        }
        
    }

    public function calculate(Request $request)
    {
        $harga = $request->input('harga');
        $quantity = $request->input('quantity');
        $total = $harga * $quantity;

        return response()->json(['total' => $total]);
    }

    public function checkout(Request $request){
        $productId = $request->input('_id'); // Adjust the input field name accordingly
        $produk = Product::find($productId);
       
       $user = Auth::user();
       $username = $user->username;
        // Mendapatkan nama dan harga dari produk
        $namaProduk = $produk->name;
        $hargaProduk = $produk->harga;
        $fotoProduk = $produk->images;

        $total = $hargaProduk * $request->input('quantity');


        $nama = $request->input('nama');
        $telepon = $request->input('telepon');
        $alamat = $request->input('alamat');
        $keterangan = $request->input('keterangan');
        $quantity = $request->input('quantity');


       // Menggunakan request untuk mengelola pengunggahan gambar
       $gambar = $request->file('bukti');
 
       // Validasi file
       if ($gambar && $gambar->isValid()) {
           // Mendapatkan nama unik untuk gambar
           $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
   
           // Pindahkan gambar ke folder tujuan (misalnya, public/images)
           $gambar->move(public_path('images/bukti'), $namaGambar);

            $response = Http::post('https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/insertTransaksi', [
                'username' => $username,
                'nama' => $nama,
                'telepon' => $telepon,
                'alamat' => $alamat,
                'keterangan' => $keterangan,
                'produk' => $namaProduk,
                'harga' => $hargaProduk,
                'quantity' => $quantity,
                'total' => $total,
                'fotoproduk' => $fotoProduk,
                'bukti' => $namaGambar
            ]);
            // dd($response->json());
    
            if ($response->failed()) {
                // Handle error
                $errorMessage = $response->body();
                return $errorMessage;
            } else {
                return redirect()->route('thanks');
            }
            
        } else {
            // Tangani kesalahan, file tidak diunggah atau tidak valid
            return 'Error: Gambar tidak diunggah atau tidak valid.';
        }
    }
    public function getTransaksiById($id)
    {
        $transaksi = Transaction::find($id);
        return response()->json($transaksi);
    }
   
}
    