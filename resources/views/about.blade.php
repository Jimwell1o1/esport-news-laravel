@extends('layouts.layout')

@section('headercontent')
<header id="header" class="fixed-top d-flex align-items-center">
@endsection

@section('nav')
<nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="{{ url('index') }}">Home</a></li>
              <li><a class="nav-link scrollto" href="{{ url('news') }}">News</a></li>
              <li><a class="nav-link scrollto active" href="{{ url('about') }}">About</a></li>
              <li><a class="nav-link scrollto " href="{{ url('gallery') }}">Gallery</a></li>
              <li><a class="nav-link scrollto" href="{{ url('team') }}">Team</a></li>
              </li>
              <li><a class="nav-link scrollto" href="{{ url('contact') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
@endsection
@section('content')
<br><br>
<section id="services">
  <div class="container" data-aos="fade-up">

    <header class="section-header wow fadeInUp">
      <h3>LEARN ABOUT ESPORTS</h3>
      <p>Esports describes the world of competitive, organized video gaming. Competitors from different leagues or teams face off in the same games that are popular with at-home gamers:League of Legends, Dota 2, Mobile Legends, Call of Duty, and Valorant. These gamers are watched and followed by millions of fans all over the world, who attend live events or tune in on TV or online. Streaming services like Twitch allow viewers to watch as their favorite gamers play in real time, and this is typically where popular gamers build up their fandoms.</p>
    </header>

    <div class="row">

      <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
        <div class="icon"><i class="bi bi-briefcase"></i></div>
        <h4 class="title"><a href="">Start a professional Esports team</a></h4>
        <p class="description">Decide if you want to start a brand new team or join a franchised system. When getting started focus on keeping your team local, find sponsors, decide on a team name and logo, and utilize social media to grow your fanbase.</p>
      </div>
      <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
        <div class="icon"><i class="bi bi-card-checklist"></i></div>
        <h4 class="title"><a href="">List of Esports games</a></h4>
        <p class="description">Esports are video games which are played in professional competitions, usually fall into a few major genres. The majority of esports titles are fighting games, first-person shooters (FPS), real-time strategy (RTS), or multiplayer online battle arena games (MOBA), with the MOBA genre being the most popular in terms of participation and viewership.</p>
      </div>
      <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
        <div class="icon"><i class="bi bi-bar-chart"></i></div>
        <h4 class="title"><a href="">Esports the fastest growing sport</a></h4>
        <p class="description">From being a relatively fringe pastime for endemic fans to cutting across gender, age, and nationality, esports is now one of the fastest-growing professional sports in the world. In fact, esports has grown so quickly that analysts are predicting the industry will be worth $1.5 billion by 2023.</p>
      </div>