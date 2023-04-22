<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('posts.index', [
            'posts' => Post::orderByDesc('created_at')->paginate(4)
        ]);
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();

        return redirect()->route('posts.index')->with('success', 'waw it is amazing');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('posts.show', [
            'post' => Post::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('posts.edit', [
            'post' => Post::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $post =Post::find($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();

        return redirect()->route('posts.index')->with('success', 'waw it was Updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        
        return redirect()->route('posts.index')->with('success', 'waw it was Deleted');       
        
    }
}
