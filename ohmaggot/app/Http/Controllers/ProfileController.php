<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    public function show(){
        if(Auth::check()){
            return view('profile');
        }else{
            return redirect('/loginuser');
        }
        
    }

    public function updateUser(Request $request)
    {
        $id = $request->input('id');
        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');

        // Hash the password
        $hashedPassword = Hash::make($password);

        // Update operation
        $response = Http::put('https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/updateUser?id=' .
            urlencode($id) . '&email=' . urlencode($email) . '&username=' . urlencode($username) . '&password=' .
            urlencode($hashedPassword));

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Change this to handle the error as needed
        } else {
            // Redirect to the userprofile page
            return redirect()->route('profile');
        }
    }
}
