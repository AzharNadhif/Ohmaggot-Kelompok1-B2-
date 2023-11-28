<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginadminController extends Controller
{
    public function show(){

        if(Auth::check()){
            
            $user = Auth::user();

            if ($user->role == 'admin') {
                return view('admin');
            } elseif ($user->role == 'user') {
                // Jika peran adalah 'user', arahkan ke halaman loginuser
                return redirect()->route('loginuser');
            }
            
        }
        return view('login', [
            // 'data'=>Hash::make('pengguna')
        ]);
    }
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('Admin');
        }
 
        return back()->withErrors([
            'email' => 'Akun belum terdaftar.',
        ])->onlyInput('email');
    }
    public function signOut(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/sign-in');
    }
}
