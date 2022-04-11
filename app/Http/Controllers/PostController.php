<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index');
    }

    public function signIn()
    {
        return view('account.sign-in');
    }

    public function signUp()
    {
        return view('account.sign-up');
    }

    public function forgot()
    {
        return view('account.forgot-pass');
    }

    public function createPost()
    {
        return view('post.create-post');
    }

    public function profile()
    {
        return view('post.profile');
    }
}
