<?php

namespace App\Http\Controllers;

use App\Mail\BlogPosted;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function index()
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        $posts = Post::active()->get();
            $return_data =
            [
                'blogs' => $posts,
            ];
         return view('posts.index',$return_data);
    }


    public function create()
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        return view('posts.create');
    }


    public function store(Request $request)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        $title = $request->input('title');
        $content = $request->input('content');
         $request->validate([
            'title' => 'required',
            'content' => 'required',
        ], [
            'title.required' => 'Judul wajib diisi.',
            'content.required' => 'Konten wajib diisi.',
        ]);
        $post = Post::create([
            'title' => $title,
            'content' => $content,
        ]);
        Mail::to(Auth::user()->email)->send(new BlogPosted($post));
        return redirect('posts');
    }


    public function show($slug)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        $post = Post::where('slug', $slug)->firstOrFail();
        $comments = $post->comments()->limit(2)->get();
        $total_comments = $post->total_comments();
        $return_data = [
            'blog'            => $post,
            'comments'        => $comments,
            'total_comments'  => $total_comments,
        ];

        return view('posts.show',$return_data);
    }

    public function edit($slug)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        $post = Post::where('slug', $slug)->firstOrFail();
        $return_data = [
            'blog' => $post
        ];
        return view('posts.edit',$return_data);
    }

    public function update(Request $request, $id)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        $title = $request->input('title');
        $content = $request->input('content');
        Post::where('id', '=', $id)->update([
            'title' => $title,
            'content' => $content,
            'updated_at' => now()
        ]);
        return redirect("posts/{$id}");
    }

    public function destroy($id)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }
        Post::where('id','=',$id)->delete();
        return redirect('posts');
    }
}
