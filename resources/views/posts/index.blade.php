@extends('layouts.app')

@section('content')

        
        <h3 class="text-center">Posts Index</h3>
      
        @foreach($posts as $post)

        <div class="w-100 border p-4 my-3">
            <h3> <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h3>

            <small>{{$post->created_at}}</small>
        </div>
      
        @endforeach


<div class="buttons d-flex justify-content-between">
    {{$posts->links()}}
     <a class="btn" href="{{route('posts.create')}}">Create</a>
</div>
 
@endsection