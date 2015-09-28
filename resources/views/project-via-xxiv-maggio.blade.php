@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Via XXIV Maggio','picturesPath'=>'images/projects/western-europe/ViaXXIVMaggio/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/western-europe/ViaXXIVMaggio/'])
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
            <p class="location">Bergamo, Italy</p>
            <h5>Via XXIV Maggio</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Mixed-use residential and retail</p>
        <p>ARCHITECTURE<br />
          Studio Architetto, Alberto Bertasa</p>
        <p>SIZE<br />
          7,000 square meters<br />
          (75,350 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>Via XXIV Maggio, located in Bergamo, Italy, is a mixed-use residential and retail
property designed by the noted local architecture firm Studio Architetto Alberto
Bertasa. Bizzi & Partners Development acquired the property, demolished
existing buildings, and created a new development plan.<br />
The property was sold in 2010. Via XXIV Maggio is located in the modern part of
Bergamo just a minute’s walk from the main commercial street (“il Sentierone”).
One of the wealthiest towns in the Lombardy region of Italy, Bergamo is just 30
minutes drive from Milan and is served by Orio al Serio International Airport.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop