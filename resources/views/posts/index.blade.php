<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    {{-- Css Only --}}
    <link href="{{asset('bootstrap-5/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Js Only --}}
    <script src="{{asset('bootstrap-5/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
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

</body>
</html>
