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
  
  <!--    OLD FORM FOR POST
          <form 
            action="/blog"
            method="POST"
            enctype="multipart/form-data">
            @csrf

            <h5>TITLE</h5>
            <input class="form-control" 
                type="text" 
                name="title" 
                placeholder="Post Title.....">
                <br>

            <h5>DESCRIPTION</h5>
            <textarea  class="form-control
                name="description" 
                placeholder="Post Description....."></textarea>
                <br>

            <label>
              <span>
                Select a file
              </span>
              <input 
                  type="file"
                  name="image">
            </label>
            <br><br>

            <button class="btn btn-primary"
                type="submit">
              Submit Post
            </button>
      </form>

    <br><br>-->



     <!-- ======= Create post ======= -->

     <section class="breadcrumbs">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
           
            <ol>
              <li><a href="{{ url('blog') }}">Blog</a></li>
              <li>Create Post</li>
            </ol>
          </div>
  
        </div>
      </section>

    <section id="contact" class="section-bg">
        <div class="container" data-aos="fade-up">
  

          <div class="section-header justify-content-between">
            <h3>CREATE POST</h3>

          </div>
  
         
          <div class="form">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
      
             
              <div class="form-group">
              TITLE
                <input type="text" 
                class="form-control" 
                name="title" 
                id="subject" 
                placeholder="Post Title..." required>
              </div>
              <div class="form-group">
              DESCRIPTION
                <textarea class="form-control" 
                name="description" 
                rows="5"
                placeholder="Post Descriptions..." required></textarea>
              </div>

              <label>
              <span>
                Select a file
              </span>
              <input 
                  type="file"
                  name="image">
            </label>


              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your Post has been sent. Thank you!</div>
              </div>

              <div class="text-center">
              <button type="submit">SUBMIT POST</button>
              </div>
            </form>
          </div>
  
        </div>
      </section><!-- End Contact Section -->
@endsection