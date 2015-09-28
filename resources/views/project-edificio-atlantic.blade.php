@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Edificio Atlantic','picturesPath'=>'images/projects/americas/EdificioAtlantic/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/americas/EdificioAtlantic/'])
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
            <p class="location">Havana, Cuba</p>
            <h5>Edificio Atlantic</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use residential, commercial office and retail</p>
        <p>ARCHITECTURE<br />
          MSC, DCH</p>
        <p>SIZE<br />
          25 floors<br />
          96 apartments</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>Edificio Atlantic is a building of condominiums with 25 floors located in D street
between 1st and 3rd, in Vedado, Havana. It is located in an area privileged close to
the Havana Leeve. It is the first construction erected by the Cuban-Italian mixed
enterprise. Its construction began in 2000 and it was inaugurated on February 10,
2007.<br />
Edificio Atlantic is considered a symbol of the Cuban modern architecture. The
architecture was designed by a team of Italians experts of the MSC signature,
simultaneously that the structural project and for the different facility was developed
by the Cuban company DCH.<br />
With a spectacular sight of the Strait of the Florida and to the city, it is a luxurious
destination in the big metropolis. The rooms count with last generation services:
air conditioning, lighting, fax, phones, cable TV, video doorman, rapid elevators,
safety interns, systems against intruders, emergency plant.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop