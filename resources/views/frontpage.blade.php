@extends('layouts.default')

@section('headerBlock')
<!-- Carousel -->
<div class="jumbotron">
  <div class="container-fluid padding-reset">
    <div id="carousel-intro" class="carousel slide carousel-intro" data-ride="carousel">
      <div class="carousel-data">
        <a href="#" class="toggle-play noselect"><span></span></a>
        <span id="indicator-data" class="noselect"></span>
      </div>
      <!-- carousel static caption -->
      <div class="caption">
        <h1>
          Design-Driven <br />Development
          <small><a href="#aboutus" class="link-box">about us</a></small>
        </h1>
      </div>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <a href="images/1.jpg" data-title="My caption goes here 1" data-lightbox="project">
            <img data-src="images/1.jpg" src="images/1.jpg" alt="First slide image">
          </a>
          <div class="carousel-caption">
            <h3 class="regular-font">&copy; DF</h3>
          </div>
        </div>
        <div class="item">
          <a href="images/2.jpg" data-title="My caption goes here 2" data-lightbox="project">
            <img data-src="images/2.jpg" src="images/2.jpg" alt="First slide image 2">
          </a>
          <div class="carousel-caption">
            <h3>Second slide label</h3>
          </div>
        </div>
        <div class="item">
          <a href="images/3.jpg" data-title="My caption goes here 3" data-lightbox="project">
            <img data-src="images/3.jpg" src="images/3.jpg" alt="First slide image 3">
          </a>
          <div class="carousel-caption">
            <h3>Third slide label</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / CAROUSEL END -->
@stop

@section('content')
<section>
      <div class="container">
        <section>
          <div class="text-block">
            <a name="aboutus"></a>
            <h3 class="regular-font">Founded in 2000 by Davide Bizzi, Bizzi & Partners Development is a global real estate firm focused on the development of premier commercial and residential properties in Europe and The Americas. The firm is led by an executive team with decades of experience in real estate development, including the acquisition, financing, construction and renovation of a wide array of property types.</h3>
          </div>
        </section>
      </div>
    </section>

    <section class="gray">
      <div class="container">
        <section>
          <div class="text-block">
            <h2 class="blue-text center-text hide-sm-brakes">Bizzi & Partners develops properties<br/>
              in established and emerging markets<br/>
              across Europe and The Americas.
              <small>USA &bullet; WESTERN EUROPE &bullet; EASTERN EUROPE &bullet; THE AMERICAS</small>
            </h2>
            <h4 class="page-subtitle blue-text center-text pointer">
              Featured Projects<br />
              <small><a href="#article"><img src="images/arrow-down.png" alt="Move to Featured Projects"/></a></small>
            </h4>
          </div>
        </section>
      </div>
    </section>

    <!-- ARTICLE / 400 FIFTH AVENUE, NEW YORK, USA -->
    <!-- <div class="container-fluid fixed-width padding-reset">
      <a name="article"></a>
      <article>
        <img src="images/400-fifth-avenue-new-york-usa.jpg" alt="400 Fifth Avenue New York USA"/>
        <div class="article">
          <p>New York, USA</p>
          <h3>400 Fifth Avenue</h3>
          <p>400 Fifth Avenue, Bizzi & Partners Development's first project in the United States, is a $700 million new construction luxury high-rise hotel and residential tower located in the heart of Midtown Manhattan in New York City. The firm purchased the land in 2006 and completed construction in 2010.</p>
        </div>
      </article>
    </div> -->

    <!-- GALLERY -->
<?php
$projects = [
  [
    'name'=>'Featured Projects', 
    'projects'=>[ 
      ['path'=>'usa/400FifthAv','image'=>'img_400FifthAv_01.jpg','name'=>'400 Fifth Avenue','address'=>'New York','country'=>'USA'],
      ['path'=>'usa/TheLeonard','image'=>'TheLeonard_01.jpg','name'=>'The Leonard','address'=>'New York','country'=>'USA'],
      ['path'=>'usa/SoHoTower','image'=>'SoHoTower_01.jpg','name'=>'SoHo Tower','address'=>'New York','country'=>'USA'],
      ['path'=>'usa/125Greenwich','image'=>'img_125Greenwich_01.jpg','name'=>'125 Greenwich','address'=>'New York','country'=>'USA'],
      ['path'=>'usa/8701CollinsAv','image'=>'img_8701CollinsAv_02.jpg','name'=>'8701 Collins Avenue','address'=>'Miami','country'=>'USA'],
      ['path'=>'western-europe/Milanosesto','image'=>'Milanosesto_06.jpg','name'=>'Milanosesto','address'=>'Sesto San Giovanni','country'=>'Italy'],
      ['path'=>'western-europe/HotelAngst','image'=>'HotelAngst_01.jpg','name'=>'Hotel Angst','address'=>'Bordighera','country'=>'Italy'],
    ]

  ]
]
?>
    <div class="container padding-reset">
      
@foreach ($projects as $project)
  
  @include('components.slider_projects',['projects' => $project['projects']])
  
@endforeach

    </div>

    @include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

    <section class="">
      <div class="container">
        <section>
          <div class="text-block">
            <h2 class="center-text font-xl">
              <small>CONTACT OUR TEAM AT GLOBAL OFFICES</small><br/>
              Milan, New York, Tallinn, São Paulo<br />
              <small class="block margin-top-xl">@include('components.link_box', ['linkName'=>'meet the team','ref'=>url().'/the-team'])</small>
            </h2>
          </div>
        </section>
      </div>
    </section>
@stop