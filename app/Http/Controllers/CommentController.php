<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(): View
    { {
            $comments = Comment::all();

            return view('posts.show', ['comments' => $comments]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Post $post, Request $request)
    {
        

        if (auth()->check()) {
            $validated = $request->validate([
                'message' => 'required|string|max:255',
            ]);
    
            $comment = new Comment();
            $comment->message = $validated['message'];
            $comment->user_id = auth()->id();
            $comment->post_id = $post->id;
            $comment->save();
            return redirect()->back()->with('success', 'Commentaire ajouté ');
        } else {
            return redirect('/posts/show/' . $post->id);
        }
        
    }
    

// FONCTION EDITER /////////////////////////////////////////////////////////////////////////////////////

    public function edit(Comment $comment): View
    {
        $this->authorize('update', $comment);

        return view('comments.edit', [
            'comment' => $comment,
        ]);
    }

    public function update(Request $request, Comment $comment): RedirectResponse
    {
        $this->authorize('update', $comment);

        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $comment->update($validated);

        return redirect(route("posts.show", $comment->post));
    }


    public function destroy(Comment $comment): RedirectResponse
    {
        $this->authorize('delete', $comment);

        $comment->delete();

        return redirect()->back()->with('success', 'Commentaire supprimé ');
    }
}


