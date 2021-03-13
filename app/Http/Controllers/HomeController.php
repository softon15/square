<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')
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
            $data[] = $ar;
        }    


        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'posts' => $data
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $user = auth()->user();
        $posts = Post::where('user_id', $user->__get('id'))
            ->sortable()
            ->get();

        return view('posts.index',compact('posts'));  
    }
}
