<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('category', 'user')->latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::All();


        return view('posts.create', compact('categories'));
    }
    
    public function store(StorePostRequest $request)
    {
        $imageName = $request->image->store('posts');
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName
        ]);

        return redirect()->route('dashboard')->with('success','Votre post a été créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $comments = $post->comments()->with('user')->latest()->get();

        return view('posts.show', compact('post', 'comments'));
        
    }
   
    public function edit(Post $post)
    {

        $categories = Category::All();

        return view('posts.edit', compact('post','categories'));
    }

 
    public function update(StorePostRequest $request, Post $post)
    {

        $arrayUpdate = [
            'title' => $request->title,
            'content' => $request->content
        ];

        if ($request->image != null ) {
            $imageName = $request->image->store('posts');

            $arrayUpdate = array_merge($arrayUpdate, [
                'image' => $imageName
            ]);
        }

        $post->update($arrayUpdate);

        return redirect()->route('dashboard')->with('success', 'Votre post a été modifié');
    }

   
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('dashboard')->with('success', 'Votre post a été supprimé');
    }
}
