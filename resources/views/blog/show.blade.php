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
            <h2>{{ $post->title }}</h2>
            <ol>
              <li><a href="{{ url('blog') }}">Blog</a></li>
              <li>{{ $post->user->name }}</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs Section -->

      <!-- ======= Portfolio Details Section ======= -->
     <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        <br>
        <div class="row gy-4">
    
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">
    
                <div class="">
                  <img src="{{ asset('images/'. $post->image_path) }}" alt="">
                </div>
    
    
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
    
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{ $post->title }}</h3>
              <ul>
                  <li><strong>Author</strong>: {{ $post->user->name }}</li>
                  <li><strong>Created on</strong>: {{ date('jS M Y', strtotime($post->updated_at)) }}</li>
                </ul>
              <p>
                {{ $post->description }}
        
              </p>
        
              
            </div>
          </div>
        </div>
      </div>
    
    </section><!-- End Portfolio Details Section -->
    <br><br><br>
@endsection