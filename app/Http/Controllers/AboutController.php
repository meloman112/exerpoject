<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about');
    }

    public function create(){
        $post = [
            'tatle' => 'second-post',
            'column' => 'bla2bla2',
            'likes' => 20,
            'views' => 100
        ];
        Post::create($post);
        // Post::create([
        //     'tatle' => $post['column'],
        //     'column' => 'bla2bla2',
        //     'likes' => 20,
        //     'views' => 100
        // ]);
        dd('created');
    }

    public function update(){

        $post = Post::find(2);

        $post -> update([
            'tatle' => 'title',
            'column' => 'bla2bla2',
            'likes' => 20,
            'views' => 100
        ]);

        dd('updated');
    }

    public function delete(){

        $posts = Post::all();
        foreach($posts as $post){
            $post -> delete();
        }
        dd('deleted');
    }
}
