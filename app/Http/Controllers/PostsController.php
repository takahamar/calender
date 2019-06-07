<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Calender;

class PostsController extends Controller
{
    
    public function index(){
        $cal = new Calender();
        return view('posts.index')->with('cal',$cal);
    }
    
}
