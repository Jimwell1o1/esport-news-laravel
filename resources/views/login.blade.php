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
        <form>
        <label for="exampleInputEmail1" class="form-label">Application Type:</label>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">Individual Application</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">Team Application</label>
        </div>

        <hr>
        
          <div class="mb-3">
          <div class="input-group">
              <span class="input-group-text">Name</span>
              <input type="text" aria-label="First name" class="form-control"  placeholder = "First Name">
              <input type="text" aria-label="Last name" class="form-control"  placeholder = "Last Name">
            </div>
            <br>
            
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Your email is protected with Us.</div>
          </div>

          <label for="choicegames" class="form-label">Choose your Games:</label>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Mobile Legends</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Call of Duty Mobile</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">League of Legends</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Valorant</label>
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>

        </div>
      </section><!-- End Contact Section -->
  @endsection