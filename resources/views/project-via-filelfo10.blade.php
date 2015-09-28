@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Via Filelfo 10','picturesPath'=>'images/projects/western-europe/ViaFilelfo10/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/western-europe/ViaFilelfo10/'])
  </div>
</div>
@stop

@section('content')
<section>
  <div class="container">

    <div class="col-title">
        <div class="list">
          <div class="item">
            <a name="readmore"></a>
            <p class="location">Milan, Italy</p>
            <h5>Via Filelfo 10</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Residential</p>
        <p>ARCHITECTURE<br />
          Studio Architettura Claudio Dini</p>
        <p>SIZE<br />
          5,500 square meters<br />
          (60,000 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>Via Filelfo 10 is a luxury residential building located in Corso Sempione, one of
the most important historic residential neighborhoods in Milan. Designed by the
well-known Italian architecture firm Studio Architettura Claudio Dini, the sevenstory,
5,500 square meter (60,000 square feet) property offers exceptional residences
with high-end finishes, onsite parking, security, and video surveillance.
Residents are just a few minutes walking distance from Arco della Pace, as well as
Sempione Park, the most important park in the city. They also benefit from
convenient access to an excellent public transportation system and nearby highways
that connect to Lake Como and Lake Maggiore.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop