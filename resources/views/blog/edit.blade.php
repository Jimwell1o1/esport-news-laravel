@extends('layouts.app')


@section('headercontent')
<header id="header" class="fixed-top d-flex align-items-center">
@endsection

@section('nav')
<nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="{{ url('index') }}">Home</a></li>
              <li><a class="nav-link scrollto" href="{{ url('news') }}">News</a></li>
              <li><a class="nav-link scrollto active" href="{{ url('blog') }}">Blog</a></li>
              <li><a class="nav-link scrollto" href="{{ url('about') }}">About</a></li>
              <li><a class="nav-link scrollto" href="{{ url('gallery') }}">Gallery</a></li>
              <li><a class="nav-link scrollto" href="{{ url('team') }}">Team</a></li>
              <li><a class="nav-link scrollto" href="{{ url('contact') }}">Contact</a></li>
              <li><a class="btn btn-primary sign-up-btn" href="{{ url('login') }}">Log In</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
@endsection


@section('content')



    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Update your Post</h2>
            <ol>
              <li><a href="{{ url('blog') }}">Blog</a></li>
              <li>Update Post</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs Section -->


      @if ($errors->any())
      <div>
          <ul>
              @foreach ($errors as $error)
                   <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
          
      @endif
  
      <form 
            action="/blog/{{ $post->slug }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input 
                type="text" 
                name="title" 
                value="{{ $post->title }}">
                <br>
            <textarea 
                name="description" 
                >{{ $post->description }}</textarea>
                <br>
            
            <button
                type="submit">
              Submit Post
            </button>
      </form>
@endsection