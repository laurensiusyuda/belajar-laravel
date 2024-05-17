<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Buat Postingan</title>
    {{-- Css Only --}}
    <link href="{{asset('bootstrap-5/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Js Only --}}
    <script src="{{asset('bootstrap-5/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
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
</body>
</html>
