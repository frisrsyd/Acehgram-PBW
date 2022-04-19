<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;
use Illuminate\Support\Facades\File;

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
            return redirect('home')->with('status', 'Post Created');
        }else{
            return redirect('home')->with('status', 'Post Not Created');
        }
    }

    public function editPost($id)
    {   
        $key = $id;
        $editdata = $this->database->getReference('posts')->getChild($key)->getValue();
        if($editdata){
            return view('post.edit-post', compact('editdata', 'key'));
        }else{
            return redirect('profile')->with('status', 'Post Not Exist');
        }
    }

    public function updatePost(Request $request, $id)
    {   
        $key = $id;
        
        $updateData = [
            'caption' => $request->caption,
        ];
        $updateRef = $this->database->getReference('posts'.'/'.$key)->update($updateData);

        if($updateRef){
            return redirect('profile')->with('status', 'Post Updated');
        }else{
            return redirect('profile')->with('status', 'Post Not Updated');
        }
    }
    public function deletePost($id)
    {   
        $key = $id;
        $path = 'images/' . $this->database->getReference('posts')->getChild($key)->getValue()['image'];
        if(File::exists($path)){
            File::delete($path);
        }
        $deleteRef = $this->database->getReference('posts'.'/'.$key)->remove();
        if($deleteRef){
            return redirect('profile')->with('status', 'Post Deleted');
        }else{
            return redirect('profile')->with('status', 'Post Not Deleted');
        }
    }
}
