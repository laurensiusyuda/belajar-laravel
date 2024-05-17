@extends('layouts.app')

@section('title','HomePage')


@section('content')
<div>
    <h1 class="d-flex justify-content-center">
        Belajar Laravel Controller
    </h1>
    <div class="mt-5">
        @foreach ( $blogs as $blog)
            <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"> {{$blog->title}} </h5>
                        <p class="card-text">{{$blog->content}}</p>
                        <p class="card-text"><small class="text-muted">Last updated {{date("d M Y H:i", strtotime($blog->created_at ))}}</small></p>
                        <a href="{{url("posts/$blog->id")}}" class="btn btn-info"> Selengkapnya </a>
                        <a href="{{url("posts/$blog->id/edit")}}" class="btn btn-primary"> edit </a>
                    </div>
            </div>
        @endforeach
        <a href="{{url('posts/create')}}", class="btn btn-success mt-2 d-flex justify-content-center"> Buat Postingan </a>
    </div>
</div>
@endsection
