<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Calender;
use App\Post;

class PostsController extends Controller
{
    
    public function index(){
        $cal = new Calender();
        return view('posts.index')->with('cal',$cal);
    }
    
    public function edit($id){
        return view('posts.edit');
    }
    
    //public function store(Request $request) {
        //$post = new Post();
        //$post->title = $request->title;
        //$post->body = $request->body;
        //$post->save();
        //return redirect('/');
    //}
}
