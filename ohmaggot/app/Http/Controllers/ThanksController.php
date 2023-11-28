<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function show() {
        // $transaksi = Transaction::find($id);
        if(Auth::check()){

            // if ($transaksi == null){
            //     abort(403);
            // }
            return view('thanks', [
                // "transaksi" => $transaksi
            ]);

        }else{
            return redirect('/loginuser');
        }
    }
    

}
