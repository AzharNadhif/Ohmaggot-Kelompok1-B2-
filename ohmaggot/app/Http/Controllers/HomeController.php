<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        // $data = User::where('role_id', 1)->get();
        return view('index', [
            // "tes" => $data
        ]);
    }
}
