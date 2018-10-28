<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class HomeController extends Controller
{
    /*
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::User()->id;
        $posts = Post::Where('user_id', $user_id)->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function home(){
        return view('home');
    }
}
