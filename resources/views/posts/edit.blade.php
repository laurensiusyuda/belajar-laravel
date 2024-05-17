@extends('layouts.app')

@section('title')
    {{ $blog->title }}
@endsection

@section('content')
<div class="container mt-5 form-control" style="">
    <form method="POST" action="{{url("posts/$blog->id")}}">
        @method('PATCH')
        @csrf
            <h1 class="d-flex justify-content-center">
                Ubah Postingan
            </h1>
            <div class="mb-3">
                <label for="title" class="form-label" >Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$blog->title}}">
              </div>
              <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <input type="text" class="form-control" id="content" name="content" value="{{$blog->content}}">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </div>
            </div>
     </form>
     <form method="POST" action="{{url("posts/$blog->id")}}">
        @method('DELETE')
        @csrf
            {{--Button--}}
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-danger mt-2">Delete</button>
            </div>
    </form>
</div>
@endsection
