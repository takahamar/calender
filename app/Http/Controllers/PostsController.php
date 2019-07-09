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
    
    public function create(){
        return view('posts.create');
    }
    
    public function store(Request $request) {
        $post = new Post();
        $post->designated_at = $request->designated_at;
        $post->title = $request->title;
        $post->body = $request->body;
        //$post->image_url = $request->file('image_url')->storeAs('public/post_images', $time.'_'.Auth::user()->id . '.jpg');
        //$post->image_url = $request->file('image_url')->storeAs('uploads', 'filename.jpg');
        //$post->image_url = $request->file('image_url')->storeAs('uploads', 'filename.jpg', enctype="multipart/form-data");
        $post->save();
        return redirect()->action('PostsController@show', $post->designated_at);
    }
    
    public function show(Post $post, Request $request) {
    //public function show() {
    //public function show($designated_at) {
        //$posts = Post::where('designated_at', $post->designated_at)->get();
        //$posts = Post::findOrFail($post->designated_at);
        //$posts = Post::where('designated_at', $request->designated_at)->get();
        //$posts = Post::all();;
        $day='';
        $day = $request->designated_at;
        //$posts = Post::where('designated_at', $day)->get();
        //$posts = Post::where('id', '113')->get();
        //$date = $post->designated_at;
        //$posts = Post::where('designated_at', 20190706)->get();
        //dd($posts->toArray());
        //dd($day);
        //$posts = Post::where('designated_at', $request->designated_at)->get();
        $posts = Post::where('designated_at', $day)->get();
        //return view('posts.show')->with('posts', $posts, 'day', $day);
        return view('posts.show')->with('posts', $posts)->with('day', $day);
    }
    
    public function edit(Post $post) {
      return view('posts.edit')->with('post', $post);
    }

    public function update(Request $request, Post $post) {
        $post->designated_at = $request->designated_at;
        $post->title = $request->title;
        $post->body = $request->body;
        //$post->image_url = $request->file('image_url')->storeAs('public/post_images', $time.'_'.Auth::user()->id . '.jpg');
        //$post->image_url = $request->file('image_url')->storeAs('uploads', 'filename.jpg');
        //$post->image_url = $request->file('image_url')->storeAs('uploads', 'filename.jpg', enctype="multipart/form-data");
        $post->save();
        return redirect()->action('PostsController@show', $post->designated_at);
    }
    
}
