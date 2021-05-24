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



      @if ($errors->any())
      <div>
          <ul>
              @foreach ($errors as $error)
                   <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
          
      @endif
  
     <!-- ======= Create post ======= -->

     <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
           
            <ol>
              <li><a href="{{ url('blog') }}">Blog</a></li>
              <li>Create a Post</li>
            </ol>
          </div>
  
        </div>
      </section>

    <section id="createPost" class="section-bg">
        <div class="container" data-aos="fade-up">
  

          <div class="section-header justify-content-between">
            <h3>CREATE POST</h3>

          </div>
  
         
          <div class="form" >
            <form 
            action="/blog"
            method="POST"
            enctype="multipart/form-data">
            @csrf

            <h5>TITLE</h5>
            <input
                class="form-control"
                type="text" 
                name="title" 
                placeholder="Post Title....."
                required>
                <br>

            <h5>DESCRIPTION</h5>
            <textarea
                class="form-control"
                name="description" 
                rows="8"
                placeholder="Post Description....."
                required></textarea>
                <br>

            <label>
              <span>
                Upload an Image
              </span>
              <input 
                  class="form-control"
                  type="file"
                  name="image"
                  required>
            </label>
            <br><br>
         
            <div class="section-header justify-content-between">
            <button
                class="buttonCreatepost"
                type="submit">
              Submit Post
            </button>
          </div>
      </form>
    </div>
        
  
        </div>
        <br><br><br><br><br><br>
      </section><!-- End Contact Section -->
@endsection