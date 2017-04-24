<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class pagesController extends Controller
{
    public function getLogin()
    {
      return redirect()->route('login');
    }

    public function getIndex(){
      $posts = Post::latest()->paginate(3);
      //$posts = Post::orderBy('created_at', 'desc')->limit(5)->get();
      return view('pages.welcome')->withPosts($posts);
    }

    public function getContact(){
      return view('pages.contact');
    }

    public function getAbout(){
      $first = "Sudipto";
      $middle = "Chowdhury";
      $last = "Dip";
      $full = $first." ".$middle." ".$last;

      $mail = "dip.chy93@gmail.com";
      $data = [];
      $data['email'] = $mail;
      $data['fullname'] = $full;
        return view('pages.about')->withData($data);
    }
}
