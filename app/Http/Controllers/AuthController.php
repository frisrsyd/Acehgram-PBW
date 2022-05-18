<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function store(Request $request)
    {   
        $nama = $request->name_depan . " " . $request->name_belakang;

        $validatedData = request()->validate([
            'name_depan' => 'required',
            'name_belakang' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required',
            'kota_asal' => 'required',
        ]);

        $password = bcrypt($request->password);

        $register_ref = User::create([
            'name' => $nama,
            'email' => $request->email,
            'username' => $request->username,
            'phone' => $request->phone,
            'kota_asal' => $request->kota_asal,
            'password' => $password,
        ]);

        if($register_ref) {
            return redirect('/sign-in')->with('status', 'Register Success');
        }else{
            return redirect('/sign-up')->with('status', 'Register Failed');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('status', 'Login Success');
        }
        
        return back()->with('status', 'Email atau Password salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('status', 'Berhasil Logout!');
    }

    public function updateProfile(Request $request, User $user)
    {
        $nama = $request->name_depan . " " . $request->name_belakang;

        $validatedData = request()->validate([
            'name_depan' => 'required',
            'name_belakang' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'kota_asal' => 'required',
        ]);

        $user->update([
            'name' => $nama,
            'email' => $request->email,
            'phone' => $request->phone,
            'kota_asal' => $request->kota_asal,
        ]);

        if($user) {
            return redirect('/profile')->with('status', 'Profile Updated');
        }else{
            return redirect('/edit-profile')->with('status', 'Profile Not Updated');
        }
    }
}
