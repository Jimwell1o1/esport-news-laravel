@extends('layouts.app')


@section('headercontent')
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
@endsection

@section('nav')

<nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="{{ url('index') }}">Home</a></li>
              <li><a class="nav-link scrollto" href="{{ url('news') }}">News</a></li>
              <li><a class="nav-link scrollto" href="{{ url('blog') }}">Blog</a></li>
              <li><a class="nav-link scrollto" href="{{ url('about') }}">About</a></li>
              <li><a class="nav-link scrollto " href="{{ url('gallery') }}">Gallery</a></li>
              <li><a class="nav-link scrollto" href="{{ url('team') }}">Team</a></li>
              <li><a class="nav-link scrollto" href="{{ url('contact') }}">Contact</a></li>
              
              @include('layouts.navbar')
              
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
@endsection



@section('content')

  
  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url({{ asset('/img/hero-carousel/1.jpg') }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">ESPORTS NEWS</h2>
                <p class="animate__animated animate__fadeInUp">This is a forum where people can get up to date on the latest developments in the esports industry. We'd like to keep you up to date with all that is going on in the Esports industry. To view the most recent news, simply click get started.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{ asset('/img/hero-carousel/2.jpg') }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">What exactly is Esport?</h2>
                <p class="animate__animated animate__fadeInUp">Esports is a form of video game competition. Esports are often organized, multiplayer video game competitions, especially between professional players, either individually or as teams.</p>
                <a href="{{ url('about') }}" class="btn-get-started scrollto animate__animated animate__fadeInUp">Learn more</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{ asset('/img/hero-carousel/3.jpg') }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Visit Our Experiences!</h2>
                <p class="animate__animated animate__fadeInUp">We have our aesthetic shots where players have the most incredible moments and memories. Simply press the View Gallery button to see what's inside.</p>
                <a href="{{ url('gallery') }}" class="btn-get-started scrollto animate__animated animate__fadeInUp">View Gallery</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{ asset('/img/hero-carousel/4.jpg') }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">We are a team!</h2>
                <p class="animate__animated animate__fadeInUp">Just like any team sports, we have our most enthusiastic leaders because we love to give a very genuine information and up to date news about Esports Industry. </p>
                <a href="{{ url('team') }}" class="btn-get-started scrollto animate__animated animate__fadeInUp">Look at it</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{ asset('/img/hero-carousel/5.jpg') }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Contact Us!</h2>
                <p class="animate__animated animate__fadeInUp">Get in touch with us if you want to reach us. If you need anything other than our services, please contact us and we will get back to you as soon as possible!</p>
                <a href="{{ url('contact') }}" class="btn-get-started scrollto animate__animated animate__fadeInUp">Contact Us</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured Services Section Section ======= -->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="bi bi-briefcase"></i>
            <h4 class="title"><a href=""> How big is the Esport Industry?</a></h4>
            <p class="description">By the late 2010s, it was estimated that the total audience of esports would grow to 454 million viewers, with revenue increasing to more than US$1 billion. The increasing availability of online streaming media platforms, particularly YouTube and Twitch, have become central to the growth and promotion of esports competitions.</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="bi bi-card-checklist"></i>
            <h4 class="title"><a href="">How do gamers became Professional?</a></h4>
            <p class="description">The classification of video games as sports is a controversial subject. Proponents claim that esports are a rapidly growing "non-traditional sport" that necessarily involves "thorough planning, precise timing, and skillful execution." </p>
          </div>

          <div class="col-lg-4 box">
            <i class="bi bi-binoculars"></i>
            <h4 class="title"><a href="">What are the Traditional Esport games?</a></h4>
            <p class="description">The most common video game genres associated with esports are multiplayer online battle arena (MOBA), first-person shooter (FPS), fighting, card, battle royale and real-time strategy (RTS) games. Others argue that sports require physical exercise and preparation, and describe esports as a mind sport.</p>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-4 box box-bg">
            <i class="bi bi-award"></i>
            <h4 class="title"><a href="">What is eSport Team Sponsorship?</a></h4>
            <p class="description">Arguably the most popular and familiar avenue for eSports 
              partnerships is becoming an official sponsor of a team.
              Essentially the same process as sponsoring an NBA or MLS t
              eam, all eSports teams wear jerseys featuring their o
              rganization name/brand as well as any sponsored brand 
              logos whenever they compete.
               </p>
          </div>
         
          <div class="col-lg-4 box">
            <i class="bi bi-controller"></i>
            <h4 class="title"><a href="">How eSports will change the world?</a></h4>
            <p class="description">Esports will be a key driver of new technology and 
              changes in society, affecting people who don't play esports 
              at all. Not for the first time, the games teenagers play 
              alone will shift the tastes of millions.The tastes of millions
              of young people glued to screens in their bedrooms are 
              affecting how the rest of us live our daily lives.
              </p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="bi bi-door-open-fill"></i>
            <h4 class="title"><a href="">Who watches eSports?</a></h4>
            <p class="description">Short answer? A lot of people. According to a report 
              from Newzoo, a market analytics company, 380 million 
              people worldwide will watch eSports this year, including 1
              65 million eSports enthusiasts (a term that describes 
              frequent viewers, as opposed to occasional viewers). 
              The bulk of these enthusiasts watch from North America, 
              China and South Korea.</p>
          </div>

        </div>
      </div>
    </section><!-- End Featured Services Section -->

    
    <!-- ======= Facts Section ======= -->
    <section id="facts">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Facts</h3>
          <p>There are some Esports facts. It will take your breath away!</p>
        </header>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="92" data-purecounter-duration="1" class="purecounter"></span>
            <p>Million Audience Growth</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="83900" data-purecounter-duration="1" class="purecounter"></span>
            <p>Live Channels</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="584" data-purecounter-duration="1" class="purecounter"></span>
            <p>Million Dollars of Sponsorship</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="950" data-purecounter-duration="1" class="purecounter"></span>
            <p>Million Dollars Revenue</p>
          </div>

        </div>

        <div class="facts-img">
          <img src="{{ asset('img/facts-img.png') }}"  alt="" class="img-fluid">
          <br><br><br>
        </div>

      </div>
    </section><!-- End Facts Section -->
  </main><!-- End #main -->


@endsection

