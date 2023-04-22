@extends('layouts.app')

@section('content')


            <form class="my-4" action="{{ route('posts.store') }}" method="POST">
            @method('POST')
            @csrf

            <input class="form-control my-4 py-4" type="text" placeholder="title" name="title">
            {{-- <input class="form-control my-4 py-4" type="text" placeholder="description" name="description"> --}}
            <textarea class="my-4" type="text" placeholder="description" name="description">
             
            </textarea>
            <input class="btn btn-dark text-white" type="submit" value="submit">

        </form>
        
        
        <a class="btn btn-primary" href="{{route('posts.index')}}">Go Back</a>
@endsection