<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FrontController extends Controller
{
    public function welcome() 
    {
    	$post = Post::latest()->limit(3)->get();
    	return view('/accueil', compact('post'));
    }
}