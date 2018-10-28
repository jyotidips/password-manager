<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $user_id = Auth::User()->id;
        $posts = Post::Where('user_id', $user_id)->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title'     => 'required|max:255',
            'description'  => 'required',
            'password'  => 'required|max:255',
            'url'  => 'required|max:255'
        ]);

        // $title = $request->title;
        // $post = new Post();
        // $post->title = $title;
        
        Post::create([
            'title'     => $request->input('title'),
            'password'     => $request->input('password'),
            'url'     => $request->input('url'),
            'description' => $request->input('description'),
            'user_id'   => Auth::user()->id,
        ]);

        return redirect('/posts')->with('status', 'Password Info was created successfully');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }


    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title'     => 'required|max:255',
            'description'  => 'required',
            'password'  => 'required|max:255',
            'url'  => 'required|max:255'
        ]);

        // $post = Post::find($id);
        // $post->title = $request->title;
        // $post->password = $request->password;
        // $post->url = $request->url;
        // $post->description = $request->description;
        // $post->save();

        $post->update($request->all());
        return back()->with('success', 'Password info updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts')->with('success', 'Password Info was deleted');
    }

    public function postSearch(Request $request){
        $this->validate($request, [
            'post_search' => 'required'
        ]);

        $post_search = $request->post_search;

        $posts = Post::where('title', $post_search)
            ->where('user_id', Auth::id())
            ->get();
        
        return view('posts.index',compact('posts'));
    }
}
