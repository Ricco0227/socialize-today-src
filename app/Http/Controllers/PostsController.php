<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
        $data = request()->validate([
           'title' => 'required',
            'post' => 'required',
            'image' => ['image'],
        ]);
        if (request()->hasFile('image')) {
            $imagePath = request('image')->store('image_uploads', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
            $image->save();

        auth()->user()->posts()->create([
            'title' => $data['title'],
            'post' => $data['post'],
            'image' => $imagePath,
        ]);
        } else {
            $imagePath = 'image_uploads/NoImage.png';

            auth()->user()->posts()->create([
                'title' => $data['title'],
                'post' => $data['post'],
                'image' => $imagePath,

        ]);
        }
        return redirect('/user/' . auth()->user()->id);

    }

    public function show(\App\Models\Post $post)
    {
        return view('posts.show', compact('post'));
    }

}
