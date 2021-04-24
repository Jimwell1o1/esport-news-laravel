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
              <li><a class="nav-link scrollto active" href="{{ url('gallery') }}">Gallery</a></li>
              <li><a class="nav-link scrollto" href="{{ url('team') }}">Team</a></li>
              </li>
              <li><a class="nav-link scrollto" href="{{ url('contact') }}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
@endsection

@section('content')
<br><br>
  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h3 class="section-title">PH's Greatest Event in Esports</h3>
      </header>
      <br>
      <div class="row gy-4">
  
        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper-container">
            <div class="swiper-wrapper align-items-center">
  
              <div class="swiper-slide">
                <img src="{{ asset('img/portfolio/portfolio-details-1.jpg') }}" alt="">
              </div>
  
              <div class="swiper-slide">
                <img src="{{ asset('img/portfolio/portfolio-details-2.jpg') }}" alt="">
              </div>
  
              <div class="swiper-slide">
                <img src="{{ asset('img/portfolio/portfolio-details-3.jpg') }}" alt="">
              </div>
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
  
        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>M2 World Championship</h3>
            <ul>
              <li><strong>Category</strong>: Mobile Legends</li>
              <li><strong>Players</strong>: Coco, Ejhay, Flaptzy, Karltzy, Lusty, Pheww, Ribo</li>
              <li><strong>Place</strong>: CHAMPION</li>
              <li><strong>Reward</strong>: <a href="#">140,000 US Dollars or 6,774,600 pesos</a></li>
            </ul>
          </div>
          
        </div>
  
      </div>
      <div class="portfolio-description">
        <h2>Info</h2>
        <p>
          Bren eSports is the team who represented the Philippines on the MLBB (Mobile Legends: Bang Bang) Tournament along with different pro players from different countries. The week-long tournament was co-organised by MLBB developer Moonton and Scoga, with the support of the Singapore Tourism Board. Bren beat Burmese Ghouls 4-3 in the best-of-seven series to claim the winner's prize purse of US$140,000.
        </p>
      </div>
    </div>
  </section><!-- End Portfolio Details Section -->