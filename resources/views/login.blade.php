@extends('layouts.master')


@section('headercontent')
<header id="header" class="fixed-top d-flex align-items-center">
@endsection

@section('nav')
<nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="{{ url('index') }}">Home</a></li>
              <li><a class="nav-link scrollto" href="{{ url('news') }}">News</a></li>
              <li><a class="nav-link scrollto" href="{{ url('about') }}">About</a></li>
              <li><a class="nav-link scrollto" href="{{ url('gallery') }}">Gallery</a></li>
              <li><a class="nav-link scrollto" href="{{ url('team') }}">Team</a></li>
              <li><a class="nav-link scrollto" href="{{ url('contact') }}">Contact</a></li>
              <li><a class="btn btn-primary sign-up-btn" href="{{ url('#') }}">Log In</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
@endsection

@section('content')
  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Registration Page</h2>
          <ol>
            <li><a href="{{ url('index') }}">Home</a></li>
            <li>Register</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->
    <!-- ======= Registration Form ======= -->
    <section id="contact" class="section-bg">
        <div class="container" data-aos="fade-up">

          <div class="form">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                Team Name
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Team Name" required>
                </div>
                <div class="form-group col-md-6">
                Coach /Manager Email
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              Players
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Full name - email" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Register</button></div>
            </form>
          </div>
  
        </div>
      </section><!-- End Contact Section -->
  @endsection