<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Judul : {{ $blog->title }} </title>

    {{-- Css Only --}}
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link href="{{asset('bootstrap-5/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Js Only --}}
    <script src="{{asset('bootstrap-5/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <article class="blog-post">
            <h2 class="blog-post-title">{{$blog->title}}</h2>
            <p class="blog-post-meta">{{date("d M Y H:i", strtotime($blog->created_at))}} by <a href="#">Laurensius Yuda</a></p>
            <p>
                {{$blog->content}}
            </p>
            <a href="{{url("posts")}}">Kembali</a>
          </article>
    </div>
</body>
</html>
