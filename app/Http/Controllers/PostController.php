<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Return an specific post
     */
    public function detail($id)
    {
        $posts = Post::where('id', $id)
            ->get();

        $data = array();
        foreach($posts AS $post)
        {
            $ar = array(
                "id" => $post->id,
                "title" => $post->title,
                "text" => $post->text,
                "created_at" => $post->created_at,
                "user" => $post->user->name
            );
            $data = $ar;
        }

        return Inertia::render('PostDetail', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'post' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required'
        ]);

        $user = auth()->user();
        
        $post = new Post;
        $post->title = $request->title;
        $post->text = $request->text;
        $post->user_id = $user->id;

        $post->save();

        return redirect()->route('posts.index')
            ->with('success','Post created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
    
        return redirect()->route('home.dashboard')->with('success','Post deleted successfully');
    }
}
