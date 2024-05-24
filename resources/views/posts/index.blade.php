@extends('layouts.app')

@section('title','HomePage')


@section('content')
<div class="container">
    <h1 class="d-flex justify-content-center">
        Belajar Laravel
    </h1>
    <div class="mt-5">
        @foreach ( $blogs as $blog)
            <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"> {{$blog->title}} </h5>
                        <p class="card-text">{{$blog->content}}</p>
                        <p class="card-text"><small class="text-muted">Last updated {{date("d M Y H:i", strtotime($blog->created_at ))}}</small></p>
                        <a href="{{url("posts/$blog->slug")}}" class="btn btn-info"> Selengkapnya </a>
                        <a href="{{url("posts/$blog->slug/edit")}}" class="btn btn-primary"> edit </a>
                    </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        <a href="{{url('posts/create')}}", class="btn btn-dark mt-2 "> Buat Postingan </a>
    </div>
</div>
@endsection
