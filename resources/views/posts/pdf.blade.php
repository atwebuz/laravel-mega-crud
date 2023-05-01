<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/e4s0qbm3knlethe3espnbe8z3916s7bjxpetwpbp5k7vi0vm/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Document</title>
</head>
<body>
  
    @foreach($posts as $post)

    <div class="w-100 border p-4 my-3">
        <h3>{{$post->title}}</h3>
        <p>{!! $post->description!!}</p>
        <small>{{$post->created_at}}</small>
    </div>
  
    @endforeach

</body>
</html>