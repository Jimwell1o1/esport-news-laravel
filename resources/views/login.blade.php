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
              <li><a class="nav-link scrollto active" href="{{ url('#') }}">Log In</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
@endsection

@section('content')
<br><br>
<!-- ======= Login Section ======= -->

<form action="login.php" method="post">
<br><br><br><br>
    
      <input type="text" id="textbox"  class="fadeIn second" name="username" placeholder="Username">
      <input type="password"  id = "myInput" class="fadeIn third" name="password" placeholder="Password"><br/>
      <input type="checkbox" id = "showpass"> Show Password<br/>
      
      <input type="submit" class="fadeIn fourth" value="Log In"><br/>
      <a class="underlineHover" href="#">Forgot Password?</a>

    </form>

  </section><!-- End Login Section -->
  @endsection