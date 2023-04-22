@extends('layouts.app')

@section('content')

<h3 class="text-center">Edit</h3>

            <form class="my-4" action="{{ route('posts.update', $post->id)}} " method="POST">
            @method('PUT')
            @csrf

            <input class="form-control my-4 py-4" type="text" value="{{ $post->title }}" name="title">
            {{-- <input class="form-control my-4 py-4" type="text" placeholder="description" name="description"> --}}
            <textarea class="my-4" type="text" value="{{ $post->description }}" name="description">
                {{ $post->description }}
            </textarea>
            <input class="btn btn-dark text-white" type="submit" value="submit">

        </form>
        
        
        <a class="btn btn-primary" href="{{route('posts.index')}}">Go Back</a>
@endsection