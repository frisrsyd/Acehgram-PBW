<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('firebase.post.index');
    }

    public function signIn()
    {
        return view('firebase.account.sign-in');
    }

    public function signUp()
    {
        return view('firebase.account.sign-up');
    }

    public function forgot()
    {
        return view('firebase.account.forgot-pass');
    }

    public function createPost()
    {
        return view('firebase.post.create-post');
    }

    public function profile()
    {
        return view('firebase.post.profile');
    }
}
