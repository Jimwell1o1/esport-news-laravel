@extends('layouts.master')


@section('headercontent')
<header id="header" class="fixed-top d-flex align-items-center">
@endsection

@section('nav')
<nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="{{ url('index') }}">Home</a></li>
              <li><a class="nav-link scrollto active" href="{{ url('news') }}">News</a></li>
              <li><a class="nav-link scrollto" href="{{ url('about') }}">About</a></li>
              <li><a class="nav-link scrollto " href="{{ url('gallery') }}">Gallery</a></li>
              <li><a class="nav-link scrollto" href="{{ url('team') }}">Team</a></li>
              <li><a class="nav-link scrollto" href="{{ url('contact') }}">Contact</a></li>
              <li><a class="nav-link scrollto active" href="{{ url('login') }}">Log In</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
@endsection

@section('content')
<br><br>
<!-- ======= About Us Section ======= -->
<section id="about">
    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h3>LATEST NEWS</h3>
        <p>Here are the most current Esport news updates. Since the esports industry is so massive, there are numerous tournaments and events going on all over the world.</p>
      </header>

      <div class="row about-cols">

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="about-col">
            <div class="img">
              <img src="{{ asset('/img/news/news-1.jpg') }}" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-controller"></i></div>
            </div>
            <h2 class="title"><a href="https://esportsinsider.com/2021/04/apex-legends-mobile/">EA announces Apex Legends Mobile</a></h2>
            <p>
              Electronic Arts (EA) has announced that Apex Legends will launch a mobile variant, with regional beta tests for the game expected to take place this month. The game, simply titled Apex Legends Mobile, will feature similar gameplay mechanics to its PC edition but will be adapted for mobile devices.
            </p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="about-col">
            <div class="img">
              <img src="{{ asset('/img/news/news-2.jpg') }}" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
            </div>
            <h2 class="title"><a href="https://esportsinsider.com/2021/04/roccat-gen-g-partnership-2021/">ROCCAT announces Gen.G partnership</a></h2>
            <p>
              Turtle Beach‘s German peripherals brand ROCCAT has announced a partnership with multinational esports organisation Gen.G. The deal will see ROCCAT become the organisation’s official PC gaming accessories partner for its Overwatch, League of Legends, and PUBG teams, as well as its roster of content creators.
            </p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="about-col">
            <div class="img">
              <img src="{{ asset('/img/news/news-3.jpg') }}" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-lightning-charge"></i></div>
            </div>
            <h2 class="title"><a href="https://esportsinsider.com/2021/03/one-esports-unveils-partnerships-with-foodpanda-tinder-tiktok-and-shopee/">ONE Esports unveils partnerships with Foodpanda, Tinder, TikTok, and Shopee</a></h2>
            <p>ONE Esports, one of the biggest esports venture of sports media company ONE Championship, they have announced that strategic partnerships with grocery delivery platform Foodpanda, Tinder, TikTok, and e-commerce firm Shopee.
            </p>
          </div>
        </div>


        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="about-col">
            <div class="img">
              <img src="{{ asset('/img/news/news-4.jpg') }}" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-trophy"></i></div>
            </div>
            <h2 class="title"><a href="https://www.cnnphilippines.com/sports/2021/1/25/Bren-Esports-wins-Mobile-Legends-world-title-.html#:~:text=startIndex%3A,seven%20thriller%20Sunday%20in%20Singapore.">
              PH’s Bren Esports captures Mobile Legends world title</a></h2>
            <p>
              Bren Esports bagged the Mobile Legends: Bang Bang M2 World Championship title after edging out Burmese Ghouls, 4-3, in a best-of-seven thriller Sunday in Singapore. The Filipino squad was up 2-0 early, but their Myanmar counterparts rallied and won the next three games to take the upper hand.
            </p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="about-col">
            <div class="img">
              <img src="{{ asset('/img/news/news-5.jpg') }}" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-award"></i></div>
            </div>
            <h2 class="title"><a href="https://www.philstar.com/esport/2021/04/18/2092076/e-gilas-back-top-rules-fiba-esports-open-iii">
              E-Gilas back at the top, rules FIBA Esports Open III</a></h2>
            <p>
              MANILA, Philippines – E-Gilas Pilipinas reclaimed the Southeast Asian Conference title after surviving a feisty challenge from rival Indonesia in the thrilling finale of the FIBA Esports Open III Sunday night. Contrary to their easy wins in the preliminary and semifinal, the Nationals figured in a close match.
            </p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="about-col">
            <div class="img">
              <img src="{{ asset('/img/news/news-6.jpg') }}" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-tropical-storm"></i></div>
            </div>
            <h2 class="title"><a href="https://www.philstar.com/esport/news/2021/03/26/2087197/6-philippine-teams-see-action-asia-pacific-predator-league">
              6 Philippine teams to see action in Asia-Pacific Predator League</a></h2>
            <p>
              Six esports teams will represent the Philippines in the long-awaited Asia-Pacific Predator League 2020/21 Grand Final set from April 6-11.

              The First Predator League was hosted in Indonesia in 2018 and Thailand in 2019. It was supposed to be held at the Mall of Asia Arena last year but was postponed due to the COVID-19 pandemic.
            </p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="about-col">
            <div class="img">
              <img src="{{ asset('/img/news/news-9.jpg') }}" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-toggles"></i></div>
            </div>
            <h2 class="title"><a href="https://esportsinsider.com/2021/04/cooler-master-announces-latam-crew-partnerships/">
              Cooler Master announces LATAM Crew partnerships</a></h2>
            <p>
              Cooler Master partnered with the four teams to build the LATAM Crew, to help grow the esports ecosystem in the region. Contract details (such as financial details and contract duration) were not disclosed. 

All Knights is well known for its League Of Legends team. The org competes in the US as well as Latin America.
            </p>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="about-col">
            <div class="img">
              <img src="{{ asset('/img/news/news-8.jpg') }}" alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-shield-shaded"></i></div>
            </div>
            <h2 class="title"><a href="https://esportsinsider.com/2021/03/esl-unveils-new-series-of-pubg-tournaments/">
              ESL unveils new series of PUBG tournaments</a></h2>
            <p>
              Esports organiser and production company ESL has partnered with KRAFTON to launch a new series of tournaments to PLAYERUNKNOWN’S BATTLEGROUNDS (PUBG). 

              The ESL PUBG Masters will consist of four tournaments split between two regions, the Americas and Europe, with each housing a prize pool of $50,000.
            </p>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="about-col">
            <div class="img">
              <img src="{{ asset('/img/news/news-7.jpg') }}"  alt="" class="img-fluid">
              <div class="icon"><i class="bi bi-person-plus"></i></div>
            </div>
            <h2 class="title"><a href="https://esportsinsider.com/2021/04/zenni-unveiled-as-official-eyewear-partner-of-the-call-of-duty-league/">
              Zenni as official eyewear partner of the Call of Duty League</a></h2>
            <p>
              Activision Blizzard and online eyewear retailer Zenni have announced a multi-year partnership that will see the retailer become an official partner of the Call of Duty League (CDL).

The deal will see Zenni named as the presenting partner for the Stage Two Major, which begins on April 7th, and the 2022 Kickoff Classic.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->
  @endsection