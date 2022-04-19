<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class PostController extends Controller
{   
    public function __construct(Database $database)
    {
        $this->database = $database;
    }
    public function index()
    {   
        $post_image = $this->database->getReference('posts')->getValue();
        return view('post.index', compact('post_image'));
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
        $post_image = $this->database->getReference('posts')->getValue();
        return view('post.profile', compact('post_image'));
    }

    public function store(Request $request)
    {   
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('image');
        $imageName = time() . "_" . $image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);
        $postData = [
            'image' => $imageName,
            'caption' => $request->caption,
            'user_id' => 1,
            'created_at' => $request->created_at,
        ];

        $postRef = $this->database->getReference('posts')->push($postData);
        if($postRef){
            return redirect('home')->with('status', 'Account Created');
        }else{
            return redirect('home')->with('status', 'Account Not Created');
        }
    }
}
