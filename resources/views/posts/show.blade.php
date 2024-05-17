@extends('layouts.app')

@section('title')
    {{ $blog->title }}
@endsection

@section('content')
<div class="container">
    <article class="blog-post">
        <h2 class="blog-post-title">{{$blog->title}}</h2>
        <p class="blog-post-meta">{{date("d M Y H:i", strtotime($blog->created_at))}} by <a href="#">Laurensius Yuda</a></p>
        <p>
            {{$blog->content}}
        </p>
        <small class="text-muted">
            {{ $total_comments }}
        </small>
        @foreach ( $comments as $comment)
        <div class="card mb-3">
            <div class="card-body">
                <p style="font-size:8pt">
                    {{ $comment->comment }}
                </p>
            </div>
        </div>
        @endforeach
    </article>
    <a href="{{url("posts")}}">Kembali</a>
</div>
@endsection
