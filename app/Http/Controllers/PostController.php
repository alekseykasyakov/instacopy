<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __constructor()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
           'caption' => 'required',
            'image' => 'required|image', // or ['required', 'image']
        ]);

        $imagePath=request('image')->store('uploads','public');

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

       // \App\Models\Post::create($data);
        //redirect after save
        return redirect('/profile/' . auth()->user()->id);
    }
}
