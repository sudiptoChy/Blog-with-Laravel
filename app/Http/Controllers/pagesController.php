<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function getIndex(){
      return view('pages.welcome');
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
