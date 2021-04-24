@extends('layouts.layout')

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
              <li><a class="nav-link scrollto active" href="{{ url('team') }}">Team</a></li>
              </li>
              <li><a class="nav-link scrollto" href="{{ url('contact') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

@endsection

@section('content')

<br><br><br>


<!-- ======= Team Section ======= -->
<section id="team">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h3>Team</h3>
      <p>We have the most enthusiastic team management on this Esports platform, who knows you could be part of our team too.</p>
    </div>

    <div class="row">