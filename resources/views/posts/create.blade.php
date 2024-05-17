@extends('layouts.app')

@section('title','Buat Postingan')


@section('content')
<div class="container mt-5" style="">
    <form method="POST" action="{{url('posts')}}" class="form-control">
        @csrf
            <h1 class="d-flex justify-content-center">
                Buat Postingan Baru
            </h1>

            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title">
              </div>

              <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <input type="text" class="form-control" id="content" name="content">

                {{-- Button --}}
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mt-5">Submit</button>
                </div>

            </div>
        </form>
</div>
@endsection
