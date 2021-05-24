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
<br><br><br><br>
<header class="section-header">
    <h3>RECENT POSTS</h3>
    <p>See our Latest Post from our lovely users. This is a forum where you can read reviews, updates and other concerns about the Esports Industry</p>
</header>
@if (session()->has('message'))
  <div id="myDIV">
    <p>{{ session()->get('message') }}</p>
    <div class='alert alert-success alert-dismissible' style="margin-left: 120px;margin-right: 120px;">
     
      <button type='button' class='close' data-dismiss='alert' onclick="myFunction()">&times;</button>
      {{ session()->get('message') }}
    </div>
  </div>
@endif


@if (Auth::check())
  <div class = "text-center">
    <a class="btn btn-secondary btn-lg btn-success createPostButton" href="/blog/create" >
      Create a post
    </a>
  </div>
  
  
@endif

@foreach ($posts as $post)
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
          @if (isset(Auth::user()->id) && Auth::user()->id==$post->user_id)
              <span>
                <a href="/blog/{{ $post->slug }}/edit">Edit</a>
              </span>
              
              <span>
               <form action="/blog/{{ $post->slug }}" method="POST">
              @csrf
              @method('delete')

              <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">
                  Delete
              </button>
              </form>
              </span>

          @endif
          <ul>
              <li><strong>Author</strong>: {{ $post->user->name }}</li>
              <li><strong>Created on</strong>: {{ date('jS M Y', strtotime($post->updated_at)) }}</li>
            </ul>
          <p>
            {{ $post->description }}
          <a href="/blog/{{ $post->slug }}">Read more...</a>
          </p>
    
          
        </div>
      </div>
    </div>
  </div>

@endforeach
<br><br><br>
</section><!-- End Portfolio Details Section -->
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
@endsection