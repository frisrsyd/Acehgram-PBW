<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class AuthController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function createAccount(Request $request)
    {   
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'name' => 'required|min:3',
            'phone' => 'required|min:10',
        ]);
        
        $email = $request->input('email');
        $password = $request->input('password');
        $name = $request->input('name_depan' + ' ' + 'name_belakang');
        $phone = $request->input('phone');
        $city = $request->input('kota_asal');

        $postData = [
            'email' => $email,
            'password' => $password,
            'name' => $name,
            'phone' => $phone,
            'city' => $city
        ];
        $postRef = $this->database->getReference('users')->push($postData);
        if($postRef){
            return redirect('sign-in')->with('status', 'Account Created');
        }else{
            return redirect('sign-in')->with('status', 'Account Not Created');
        }
    }
}
