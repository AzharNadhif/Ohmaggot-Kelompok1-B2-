<?php

namespace App\Http\Controllers;
use App\Models\Article;


class BacaController extends Controller
{
    public function show(string $id){
        $artikel = Article::find($id);
        if ($artikel == null){
            abort(403);
        }
        return view('baca', [
            "artikel" => $artikel
        ]);
    }
    
}
