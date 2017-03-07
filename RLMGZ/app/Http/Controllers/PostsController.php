<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Storage;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();


        return view('posts.index', compact('posts'));
    }


   

    public function create()
    {
        return view('posts.create');
    }



    public function show(Post $post)
    {

        
        return view('posts.show', compact('post'));
    }
    



    public function store(Request $request)
    {
       $post = new Post;
       
       $this->validate(request(),[

            'title' => 'required',
            'secondtitle' => 'required',
            'name' => 'required',
            'image' => 'required',
            'body' => 'required'

        ]);




       Post::create([
            'title' => request('title'),
            'secondtitle' => request('secondtitle'),
            'name' => request('name'),
            'pictures' => request('image'),
            'body' => request('body')

        ]);



       

       return redirect('/');
    }




}
?>
