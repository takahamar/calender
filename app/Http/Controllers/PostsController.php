<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Calender;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    
    public function index(){
        $cal = new Calender();
        //dd(Auth::id());
        $auths = Auth::id();
        return view('posts.index')->with('cal',$cal)->with('auth',$auths);
    }
    
    
    public function store(Request $request) {
        $post = new Post();
        //$post->id = $request->id;
        $post->designated_at = $request->designated_at;
        $post->title = $request->title;
        $post->body = $request->body;
        date_default_timezone_set('Asia/Tokyo');
        $now = date("Y-m-d H:i:s", strtotime('+9hour'));
        //$post->created_at = $request->created_at;
        //$time='';
        //$time = Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('His');
        //$post->image_url = $request->image_url->storeAs('public/post_images');
        //$post->image_url = $request->image_url->storeAs('public/storage/post_images', '.jpg');
        $post->image_url = $request->image_url->storeAs('public/post_images', $now.'.jpg');
        //dd($post->image_url);
        //$post->image_url = $request->image_url->store('public/post_images', '.jpg');
        //$post->image_url = $request->file('image_url')->storeAs('uploads', 'filename.jpg', enctype="multipart/form-data");
        $post->save();
        return redirect()->action('PostsController@list', $post->designated_at);
        //return redirect()->action('PostsController@list');
    }
    
    public function list(Post $post, Request $request) {
    //public function list(Post $post) {
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
        return view('posts.list')->with('posts', $posts)->with('day', $day);
        //return view('posts.list')->with('posts', $post);
    }
    
    public function create(){
        return view('posts.create');
    }
    
    
    public function show(Post $post) {
        $image_url = '';
        //$image_url = str_replace('public/', 'storage/', $post->image_url);
        $image_url = str_replace('public/', 'storage/', $post->image_url);
        //$image_url = str_replace('public/','storage/post_images', $post->image_url);
        //dd($image_url);
        return view('posts.show')->with('post', $post)->with('image_url', $image_url);
        //return view('posts.show')->with('post', $post);
    }
    
    //public function show(Post $post)
    //{
        //return view('posts/show', [
            //'designated_at' => $post->designated_at,
            //'title' => $post->title,
            //'body' => $post->content,
            //'image_url' => str_replace('public/', 'storage/', $post->image_url), //今回追加
        //]);        
    //}
    
    
    public function edit(Post $post) {
      //return view('posts.edit')->with('post', $post);
      $image_url = '';
      $image_url = str_replace('public/', 'storage/', $post->image_url);
      return view('posts.edit')->with('post', $post)->with('image_url', $image_url);
    }

    public function update(Request $request, Post $post) {
        $post->designated_at = $request->designated_at;
        $post->title = $request->title;
        $post->body = $request->body;
        //$post->image_url = $request->file('image_url')->storeAs('public/post_images', $time.'_'.Auth::user()->id . '.jpg');
        //$post->image_url = $request->file('image_url')->storeAs('uploads', 'filename.jpg');
        //$post->image_url = $request->file('image_url')->storeAs('uploads', 'filename.jpg', enctype="multipart/form-data");
        //$post->image_url = $request->image_url->storeAs('public/post_images', '.jpg');
        //$post->image_url = $request->image_url->storeAs('public/post_images');
        //$post->image_url = $request->image_url->storeAs('public/post_images');
        date_default_timezone_set('Asia/Tokyo');
        $now = date("Y-m-d H:i:s", strtotime('+9hour'));
        $post->image_url = $request->image_url->storeAs('public/post_images', $now.'.jpg');
        //$post->image_url = $request->image_url->store('public/post_images', '.jpg');
        $post->save();
        return redirect()->action('PostsController@list', $post->designated_at);
    }
    
     public function destroy(Post $post) {
       $post->delete();
       return redirect()->action('PostsController@list', $post->designated_at);
       //return redirect('/');
    }
    
     public function logout () {
     //logout user
     auth()->logout();
     // redirect to homepage
     return redirect('/');
}
    
}
