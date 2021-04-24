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

      <div class="col-lg-3 col-md-6">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <img src="{{ asset('/img/team/team-1.jpg') }}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>John Jimwell Rabino</h4>
              <span>Team Leader</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="member" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('/img/team/team-2.jpg') }}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Aaron John Dumapias</h4>
              <span>Front End Developer</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="member" data-aos="fade-up" data-aos-delay="300">
          <img src="{{ asset('/img/team/team-3.jpg') }}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Jan Carlo Raymundo</h4>
              <span>Content Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="member" data-aos="fade-up" data-aos-delay="400">
          <img src="{{ asset('/img/team/team-4.jpg') }}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>John Carlo Paclibar</h4>
              <span>Editor in Chief</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Team Section -->


<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="section-bg">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h3>Influencer</h3>
    </header>

    <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{ asset('/img/testimonials/testimonial-1.jpg') }}" class="testimonial-img" alt="">
            <h3>AkoSi Dogie</h3>
            <h4>Youtuber Gamer &amp; Influencer</h4>
            <p>
              <img src="{{ asset('/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
              The team that keeps winning is not the most talented but the most hard-working.
              <img src="{{ asset('/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{ asset('/img/testimonials/testimonial-2.jpg') }}" class="testimonial-img" alt="">
            <h3>Alodia Gosiengfiao</h3>
            <h4>Youtuber Gamer &amp; Model</h4>
            <p>
              <img src="{{ asset('/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
              Gamers always believe that an epic win is possible and that it's always worth trying, and trying now. Gamers don't sit around.
              <img src="{{ asset('/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{ asset('/img/testimonials/testimonial-3.jpg') }}" class="testimonial-img" alt="">
            <h3>PewDiePie</h3>
            <h4>Youtuber Gamer &amp; Comedian</h4>
            <p>
              <img src="{{ asset('/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
              The one point gamers all hate is the point where they have to put the controller down.
              <img src="{{ asset('/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{ asset('/img/testimonials/testimonial-4.jpg') }}" class="testimonial-img" alt="">
            <h3>Ghost Wrecker</h3>
            <h4>Streamer &amp; Gamer</h4>
            <p>
              <img src="{{ asset('/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
              The more people who come forward and talk about how much they love gaming, how much they talk about individuality and diversity, the more gamers of color that come out and gay gamers that come out and everybody talking about what they love - that's what the community has in common: a love of gaming.
              <img src="{{ asset('/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{ asset('/img/testimonials/testimonial-5.jpg') }}" class="testimonial-img" alt="">
            <h3>Faker</h3>
            <h4>Pro Player &amp; Gamer</h4>
            <p>
              <img src="{{ asset('/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
              At their highest level, all competitive disciplines become vehicles for the expression of one's human potential.
              <img src="{{ asset('/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->

<!-- ======= Our Clients Section ======= -->
<section id="clients">
  <div class="container" data-aos="zoom-in">

    <header class="section-header">
      <h3>OUR SPONSORS</h3>
    </header>

    <div class="clients-slider swiper-container">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><a href = "https://www.amd.com/en"><img src="{{ asset('/img/clients/client-11.png') }}" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a href = "https://www.nvidia.com/en-us/location-selector/"><img src="{{ asset('/img/clients/client-21.png') }}" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a href = "https://www.garena.ph/"><img src="{{ asset('/img/clients/client-31.png') }}" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a href = "https://www.logitech.com/en-roeu/solutions/business"><img src="{{ asset('/img/clients/client-41.png') }}" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a href = "https://smart.com.ph/corporate"><img src="{{ asset('/img/clients/client-51.png') }}" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a href = "https://www.globe.com.ph/#gref"><img src="{{ asset('/img/clients/client-61.png') }}" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a href = "https://www.tencent.com/en-us/about.html"><img src="{{ asset('/img/clients/client-71.png') }}" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a href = "https://www.riotgames.com/en"><img src="{{ asset('/img/clients/client-81.png') }}" class="img-fluid" alt=""></a></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Our Clients Section -->
    @endsection
