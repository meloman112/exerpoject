<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ServiceController extends Controller
{
    public function index(){

        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create(){

        return view('post.create');
    }

    public function store(){

        $data = request() -> validate([
            'tatle' => 'string',
            'column' => 'string',
            'autor' => 'string',
        ]);

        Post::create($data);

        return redirect() -> route('service.index');

    }

    public function show($id){
        $post = Post::findOrFail($id);
        return view('post/show', compact('post'));
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    public function update($id){
        $post = Post::findOrFail($id);
        $data = request() -> validate([
            'tatle' => 'string',
            'column' => 'string',
            'autor' => 'string',
        ]);

        $post->update($data);

        return view('post/show', compact('post'));
    }

    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect() -> route('service.index');



    }
}

