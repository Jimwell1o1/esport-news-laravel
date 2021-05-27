<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    //
    public function index(){

        return view('index');
    }

    public function about(){

        return view('about');
    }

    public function news(){

        return view('news');
    }

    public function gallery(){

        return view('gallery');
    }

    public function team(){

        return view('team');
    }

    public function contact(){

        return view('contact');
    }

    public function login(){

        return view('login');
    }

    public function blog(){

        return view('blog');
    }

    public function register(){

        return auth('register');
    }
}
