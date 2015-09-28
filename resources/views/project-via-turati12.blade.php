@extends('layouts.default')

@section('headerBlock')


<section class="blue">
  <div class="container padding-reset">
    <!-- main slider carousel -->
@include('components.slider', ['projectName' => 'Via Turati 12','picturesPath'=>'images/projects/western-europe/ViaTurati12/'])
    <!--/main slider carousel-->
  </div>
</section>

<!-- thumb navigation carousel -->
<div class="container padding-reset">
  <div class="" id="slider-thumbs">
    <!-- thumb navigation carousel items -->
@include('components.slider_navigation', ['picturesPath'=>'images/projects/western-europe/ViaTurati12/'])
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
            <h5>Via Turati 12</h5>
          </div>
        </div>
        <p class="location-link">@include('components.link_box', ['newWindow'=>'true', 'linkName'=>'see location', 'ref'=>'https://www.google.ee/maps/place/400+5th+Ave,+New+York,+NY+10018,+Ameerika+%C3%9Chendriigid/@40.7481295,-73.9838244,17z/data=!4m2!3m1!1s0x89c259a9f8048231:0x3206e29bd09293dec8f94?hl=et'])</p>
        <p>TYPE<br />
          Commercial</p>
        <!-- <p>ARCHITECTURE<br />
          Studio Architettura Claudio Dini</p> -->
        <p>SIZE<br />
          4,000 square meters<br />
          (43,000 square feet)</p>
        <!-- <p>GOSS ASSET VALUE<br />
          120 M $</p> -->
    </div>

    <div class="col-story">

      <p>Via Turati 12, which was built at the beginning of the 20th century,
is a 4,000 square meter (43,000 square foot) commercial office property in Milan.
Bizzi & Partners Development sold the property in 2006 in a sale-leaseback
transaction with Solvay Italia, a major chemical company.</p>
      
    </div>
  </div>
</section>

@include('components.link_block',['linkName'=>'projects gallery','ref'=>url().'/projects']);

@stop