@extends('layouts.app')

@section('content')

        
        <h3 class="text-center">{{$post->title}}</h3>
      

        <div class="w-100 border p-4 my-3">
            <h3> {{$post->title}}</h3>
            <p>{!! $post->description !!}</p>
            <hr>
            <small>{{$post->created_at}}</small>
        </div>

  

        <div class="btn-groups d-flex align-items-center justify-content-start gap-2">
               <a class="btn btn-primary" href="{{route('posts.index')}}">Go Back</a>
        <a class="btn btn-warning" href="{{route('posts.edit', $post->id)}}">Edit</a>

        <form action="{{route('posts.destroy', $post->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </div>
      
     



 
@endsection