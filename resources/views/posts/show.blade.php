@extends('layouts.app')

@section('content')

        
        <h3 class="text-center">{{$post->title}}</h3>
      

        <div class="w-100 border p-4 my-3">
            <h3> {{$post->title}}</h3>
            <p>{!! $post->description !!}</p>
            <hr>
            <small>{{$post->created_at}}</small>
        </div>
      
        <a class="btn btn-primary" href="{{route('posts.index')}}">Go Back</a>


 
@endsection