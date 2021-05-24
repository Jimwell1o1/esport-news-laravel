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
              
              @include('layouts.navbar')
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

      <section id="createPost" class="section-bg">
        <div class="container" data-aos="fade-up">
  

          <div class="section-header justify-content-between">
            <h3>UPDATE YOUR POST</h3>

          </div>
  
         
          <div class="form" >
            <form 
            action="/blog/{{ $post->slug }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <h5>TITLE</h5>
            <input
                class="form-control"
                type="text" 
                name="title" 
                value="{{ $post->title }}">
                <br>

            <h5>DESCRIPTION</h5>
            <textarea
                class="form-control"
                name="description" 
                rows="8"
                >{{ $post->description }}</textarea>
                <br>

            <br>
            
         
            <div class="section-header justify-content-between">
            <button
                class="buttonCreatepost"
                type="submit">
              Update Post
            </button>
          </div>
      </form>
    </div>
        
  
        </div>
        <br><br><br><br>
  </section><!-- End Contact Section -->
@endsection