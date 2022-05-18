<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{   
    public function index()
    {   
        $posts = Post::orderBy('updated_at', 'desc')->get();
        return view('post.index', compact('posts'));
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
        $post_image = Post::where('user_id', auth()->user()->id)->get();
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
            'user_id' => auth()->user()->id,
            'created_at' => $request->created_at,
        ];

        $postRef = Post::create($postData);
        if($postRef){
            return redirect('home')->with('status', 'Post Created');
        }else{
            return redirect('home')->with('status', 'Post Not Created');
        }
    }

    public function editPost(Post $post)
    {   
        $posts = Post::find($post->id);
        if($posts){
            return view('post.edit-post', compact('posts'));
        }else{
            return redirect('profile')->with('status', 'Post Not Exist');
        }
    }

    public function updatePost(Request $request, Post $post)
    {         
        $updateData = [
            'caption' => $request->caption,
        ];
        $updateRef = Post::where('id', $post->id)->update($updateData);

        if($updateRef){
            return redirect('profile')->with('status', 'Post Updated');
        }else{
            return redirect('profile')->with('status', 'Post Not Updated');
        }
    }
    public function deletePost(Post $post)
    {   
        $path = 'images/' . $post->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $deleteRef = Post::where('id', $post->id)->delete();
        if($deleteRef){
            return redirect('profile')->with('status', 'Post Deleted');
        }else{
            return redirect('profile')->with('status', 'Post Not Deleted');
        }
    }
}
