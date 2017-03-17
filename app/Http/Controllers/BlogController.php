<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    //
    public function getSingle($slug){
    	
    	//Fetching from DB based on slug
    	$post = Post::where('slug', '=', $slug)->first();

    	//Return the view and pass the post object
    	return view('blog.single')->withPost($post);
    }
}
