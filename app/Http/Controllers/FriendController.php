<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    /**
     * 友人一覧
     * @return void
     */
    
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function index()
    {
        return view('friend/index');
    }
    
     /**
     * 友人検索
     * @return void
     */
    public function search()
    {
        return view('friend/search');
    }
}
